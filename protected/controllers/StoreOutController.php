<?php

class StoreOutController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','create','update','getFields'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new StoreOut;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StoreOut']))
		{
			$model->attributes=$_POST['StoreOut'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->sout_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StoreOut']))
		{
			$model->attributes=$_POST['StoreOut'];
			if($model->save()) {
				Yii::app()->user->setFlash('info','Successfully submitted!!!');
				$this->redirect(array('index'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionGetFields($id) {
		$val = Items::model()->findByPk($id);
		$store = StoreIn::model()->find(array('select'=>'*',
											'condition'=>'iid=:iid',
											'params'=>array(':iid'=>$id)));
		$cost = 0;
		if($store) {
			$cost = $store->rate;
		}									
		$retVal = array("uom"=>$val->uom, "qty"=>$val->current_quantity, "cost"=>$cost);
		echo json_encode($retVal);
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new StoreOut;
		$dataProvider=new CActiveDataProvider('StoreOut', array(
											'criteria'=>array(
										        'order'=>'date DESC',
										        'condition'=>'cid='.Yii::app()->user->cid,
										    ),
							                'pagination'=>array(
							                        'pageSize'=>Yii::app()->params['itemsPerPage'],
							                )));
		if(isset($_POST['StoreOut']))
		{
			$model->attributes=$_POST['StoreOut'];
			$model->date_created = date('Y-m-d H:i:s', time());
			$model->created_by = Yii::app()->user->id;
			$model->cid = Yii::app()->user->cid;
			$item = Items::model()->find(array('select'=>'*',
											'condition'=>'iid=:iid',
											'params'=>array(':iid'=>$model->iid)));
			$item->current_quantity = $item->current_quantity - $model->quantity;
			if($item->current_quantity >= 0) {
				if($item->save() && $model->save()) {
					Yii::app()->user->setFlash('info','Successfully submitted!!!');
					$this->redirect(array('index'));
				}
			}
			else {
				$model->addError('quantity','Product is not available at this quantity, try to give lesser quantity!!!');
			}
		}
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'model'=>$model
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new StoreOut('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StoreOut']))
			$model->attributes=$_GET['StoreOut'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=StoreOut::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='store-out-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
