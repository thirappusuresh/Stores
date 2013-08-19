<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Report extends CFormModel
{
	public $type;
	public $fromDate;
	public $thruDate;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('type, fromDate, thruDate', 'required'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'type'=>'Report Type',
			'fromDate'=>'From Date',
			'thruDate'=>'To Date',
		);
	}

}
