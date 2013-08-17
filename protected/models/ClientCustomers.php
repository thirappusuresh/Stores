<?php

/**
 * This is the model class for table "tbl_client_customers".
 *
 * The followings are the available columns in table 'tbl_client_customers':
 * @property integer $cid
 * @property string $customer_id
 * @property string $customer_name
 * @property string $address
 * @property string $site_address
 * @property string $tin
 * @property string $po_number
 * @property string $date_created
 * @property string $created_by
 *
 * The followings are the available model relations:
 * @property ClientUsers $createdBy
 * @property Clients $c
 */
class ClientCustomers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ClientCustomers the static model class
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
		return 'tbl_client_customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid, customer_id, customer_name, address, site_address, tin, po_number, date_created, created_by', 'required'),
			array('cid', 'numerical', 'integerOnly'=>true),
			array('customer_id, customer_name, site_address, tin, po_number, created_by', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cid, customer_id, customer_name, address, site_address, tin, po_number, date_created, created_by', 'safe', 'on'=>'search'),
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
			'createdBy' => array(self::BELONGS_TO, 'ClientUsers', 'created_by'),
			'c' => array(self::BELONGS_TO, 'Clients', 'cid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cid' => 'Cid',
			'customer_id' => 'Customer',
			'customer_name' => 'Customer Name',
			'address' => 'Address',
			'site_address' => 'Site Address',
			'tin' => 'Tin',
			'po_number' => 'Po Number',
			'date_created' => 'Date Created',
			'created_by' => 'Created By',
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
		$criteria->compare('customer_id',$this->customer_id,true);
		$criteria->compare('customer_name',$this->customer_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('site_address',$this->site_address,true);
		$criteria->compare('tin',$this->tin,true);
		$criteria->compare('po_number',$this->po_number,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}