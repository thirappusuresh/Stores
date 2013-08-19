<?php

class DcController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','generatePdf'),
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

	public function actionGeneratePdf($id) {
		$model=$this->loadModel($id);
		$item = new DcItems;

		$dataProvider=new CActiveDataProvider('DcItems', array(
							'criteria'=>array(
								'condition'=>'docket_no='.$model->docket_no,
						        'order'=>'date_created',
						    )
			                ));


/*		$html2pdf = Yii::app()->ePdf->HTML2PDF();
        $html2pdf->WriteHTML($this->renderPartial('pdf',array(
															'model'=>$model,
															'item'=>$item,
															'customer'=>$customer,
															'dataProvider'=>$dataProvider,
															'GAmount'=>$GAmount,
															'CQty'=>$CQty
														), true));
        $html2pdf->Output();*/
        # mPDF
        $mPDF1 = Yii::app()->ePdf->mpdf();
 
        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::getPathOfAlias('webroot.css') . '/bootstrap.css');
        $mPDF1->WriteHTML($stylesheet, 1);
        
        # renderPartial (only 'view' of current controller)
        $mPDF1->WriteHTML($this->renderPartial('pdf',array(
			'model'=>$model,'item'=>$item,'dataProvider'=>$dataProvider
		),  true));

 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$item = new DcItems;
		if(isset($_POST['DcItems']))
		{
			$item->attributes=$_POST['DcItems'];
			$item->date_created = date('Y-m-d H:i:s', time());
			$item->created_by = Yii::app()->user->id;
			$item->docket_no = $model->docket_no;
			if($item->save()) {
				$item= new DcItems;
			}
		}
		$dataProvider=new CActiveDataProvider('DcItems', array(
							'criteria'=>array(
								'condition'=>'docket_no='.$model->docket_no,
						        'order'=>'date_created',
						    )
			                ));
		$this->render('view',array(
			'model'=>$model,'item'=>$item,'dataProvider'=>$dataProvider
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Dc;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dc']))
		{
			$model->attributes=$_POST['Dc'];
			$model->docket_no = date('YmdHis', time());
			$model->date_created = date('Y-m-d H:i:s', time());
			$model->created_by = Yii::app()->user->id;
			$model->cid = Yii::app()->user->cid;		
			if($model->save())
				$this->redirect(array('view','id'=>$model->docket_no));
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

		if(isset($_POST['Dc']))
		{
			$model->attributes=$_POST['Dc'];
			if($model->save()) {
				$this->redirect(array('view','id'=>$model->docket_no));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		$dataProvider=new CActiveDataProvider('Dc');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dc('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dc']))
			$model->attributes=$_GET['Dc'];

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
		$model=Dc::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='dc-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
