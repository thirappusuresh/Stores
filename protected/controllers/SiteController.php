<?php

class SiteController extends Controller
{
	
	public $layout='//layouts/login';
	public $defaultAction = 'login';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
	
	public function actionReports() {
		$this->layout="//layouts/column";
		$model = new Report;
		if(isset($_POST['Report']))
		{
			$model->attributes=$_POST['Report'];
			if($model->type == 'Store In') {
				$dataProvider=new CActiveDataProvider('StoreIn', array(
											'criteria'=>array(
										        'order'=>'date DESC',
										        'condition'=>'cid='.Yii::app()->user->cid.' AND date BETWEEN \''.$model->fromDate.'\' AND \''.$model->thruDate.'\'',
										    ),
							                'pagination'=>array(
							                        'pageSize'=>Yii::app()->params['itemsPerPage'],
							                )));
				$this->render('storeIn',array('model'=>$model, 'dataProvider'=>$dataProvider));	                
			} 
			else if($model->type == 'Store Out') {
				$dataProvider=new CActiveDataProvider('StoreOut', array(
											'criteria'=>array(
										        'order'=>'date DESC',
										        'condition'=>'cid='.Yii::app()->user->cid.' AND date BETWEEN \''.$model->fromDate.'\' AND \''.$model->thruDate.'\'',
										    ),
							                'pagination'=>array(
							                        'pageSize'=>Yii::app()->params['itemsPerPage'],
							                )));
				$this->render('storeOut',array('model'=>$model, 'dataProvider'=>$dataProvider));	 				
			}
			else if($model->type == 'Invoice') {
				$dataProvider=new CActiveDataProvider('Invoice', array(
											'criteria'=>array(
										        'order'=>'date_created DESC',
										        'condition'=>'cid='.Yii::app()->user->cid.' AND DATE_FORMAT(date_created,\'%m/%d/%Y\') BETWEEN \''.$model->fromDate.'\' AND \''.$model->thruDate.'\'',
										    ),
							                'pagination'=>array(
							                        'pageSize'=>Yii::app()->params['itemsPerPage'],
							                )));
				$this->render('invoice',array('model'=>$model, 'dataProvider'=>$dataProvider));	 				
			}
			else if($model->type == 'Delivery Challan') {
				$dataProvider=new CActiveDataProvider('Dc', array(
											'criteria'=>array(
										        'order'=>'date_created DESC',
										        'condition'=>'cid='.Yii::app()->user->cid.' AND DATE_FORMAT(date_created,\'%m/%d/%Y\') BETWEEN \''.$model->fromDate.'\' AND \''.$model->thruDate.'\'',
										    ),
							                'pagination'=>array(
							                        'pageSize'=>Yii::app()->params['itemsPerPage'],
							                )));
				$this->render('dc',array('model'=>$model, 'dataProvider'=>$dataProvider));	 				
			}
		}
		else {
			$this->render('reports',array('model'=>$model));
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if(Yii::app()->user->isGuest) {
			$model=new LoginForm;
	
			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
	
			// collect user input data
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if($model->validate() && $model->login())
					$this->redirect('/storeIn');
			}
			// display the login form
			$this->render('login',array('model'=>$model));
		}
		else {
			$this->redirect('/storeIn');
		}
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}