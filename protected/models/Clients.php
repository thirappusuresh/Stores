<?php

/**
 * This is the model class for table "tbl_clients".
 *
 * The followings are the available columns in table 'tbl_clients':
 * @property integer $cid
 * @property string $company_name
 * @property string $address
 * @property string $site_address
 * @property string $tin
 * @property string $date_created
 *
 * The followings are the available model relations:
 * @property ClientCustomers[] $clientCustomers
 * @property ClientUsers[] $clientUsers
 */
class Clients extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clients the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_clients';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name, address, site_address, tin, date_created', 'required'),
			array('company_name, site_address, tin', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cid, company_name, address, site_address, tin, date_created', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'clientCustomers' => array(self::HAS_MANY, 'ClientCustomers', 'cid'),
			'clientUsers' => array(self::HAS_MANY, 'ClientUsers', 'cid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cid' => 'Cid',
			'company_name' => 'Company Name',
			'address' => 'Address',
			'site_address' => 'Site Address',
			'tin' => 'Tin',
			'date_created' => 'Date Created',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cid',$this->cid);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('site_address',$this->site_address,true);
		$criteria->compare('tin',$this->tin,true);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}