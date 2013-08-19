<?php

class InvoiceController extends Controller
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
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('view', 'create', 'update', 'generatePdf'),
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

		$model=$this->loadModel($id);
		$item= new InvoiceItems;
		$customer = ClientCustomers::model()->findByPk($model->customer_id);

		if(isset($_POST['InvoiceItems']))
		{
			$item->attributes=$_POST['InvoiceItems'];
			$item->date_created = date('Y-m-d H:i:s', time());
			$item->created_by = Yii::app()->user->id;
			$item->invoice_id = $model->invoice_id;
			if($item->save()) {
				$item= new InvoiceItems;
			}
		}
		$dataProvider=new CActiveDataProvider('InvoiceItems', array(
									'criteria'=>array(
										'condition'=>'invoice_id='.$model->invoice_id,
								        'order'=>'date_created',
								    )
					                ));
		$CQty = 0;
		$GAmount = 0;
		foreach($dataProvider->getData() as $record) {
		    $GAmount = $GAmount + ($record->rate * $record->quantity);
		    $CQty = $CQty + $record->quantity;
		}
		$this->render('view',array(
			'model'=>$model,
			'item'=>$item,
			'customer'=>$customer,
			'dataProvider'=>$dataProvider,
			'GAmount'=>$GAmount,
			'CQty'=>$CQty
		));
	}
	
	public function actionGeneratePdf($id) {
		$model=$this->loadModel($id);
		$item= new InvoiceItems;
		$customer = ClientCustomers::model()->findByPk($model->customer_id);

		$dataProvider=new CActiveDataProvider('InvoiceItems', array(
									'criteria'=>array(
										'condition'=>'invoice_id='.$model->invoice_id,
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
														'model'=>$model,
														'item'=>$item,
														'customer'=>$customer,
														'dataProvider'=>$dataProvider,
													),  true));

 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Invoice;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Invoice']))
		{
			$model->attributes=$_POST['Invoice'];
			$model->invoice_id = date('YmdHis', time());
			$model->date_created = date('Y-m-d H:i:s', time());
			$model->created_by = Yii::app()->user->id;
			$model->cid = Yii::app()->user->cid;
			if($model->save()) {
				$this->redirect(array('view','id'=>$model->invoice_id));
			}
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

		if(isset($_POST['Invoice']))
		{
			$model->attributes=$_POST['Invoice'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->invoice_id));
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
		$dataProvider=new CActiveDataProvider('Invoice');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Invoice('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Invoice']))
			$model->attributes=$_GET['Invoice'];

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
		$model=Invoice::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='invoice-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
