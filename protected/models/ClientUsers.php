<?php

/**
 * This is the model class for table "tbl_client_users".
 *
 * The followings are the available columns in table 'tbl_client_users':
 * @property integer $cid
 * @property string $uid
 * @property string $login_id
 * @property string $password
 * @property string $name
 * @property string $email
 * @property string $date_created
 *
 * The followings are the available model relations:
 * @property ClientCustomers[] $clientCustomers
 * @property Clients $c
 * @property Items[] $items
 * @property StoreIn[] $storeIns
 * @property StoreOut[] $storeOuts
 * @property Vat[] $vats
 */
class ClientUsers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ClientUsers the static model class
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
		return 'tbl_client_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cid, uid, login_id, password, name, email, date_created', 'required'),
			array('cid', 'numerical', 'integerOnly'=>true),
			array('uid, login_id, password, name, email', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cid, uid, login_id, password, name, email, date_created', 'safe', 'on'=>'search'),
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
			'clientCustomers' => array(self::HAS_MANY, 'ClientCustomers', 'created_by'),
			'c' => array(self::BELONGS_TO, 'Clients', 'cid'),
			'items' => array(self::HAS_MANY, 'Items', 'created_by'),
			'storeIns' => array(self::HAS_MANY, 'StoreIn', 'created_by'),
			'storeOuts' => array(self::HAS_MANY, 'StoreOut', 'created_by'),
			'vats' => array(self::HAS_MANY, 'Vat', 'created_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cid' => 'Cid',
			'uid' => 'Uid',
			'login_id' => 'Login',
			'password' => 'Password',
			'name' => 'Name',
			'email' => 'Email',
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
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('login_id',$this->login_id,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('date_created',$this->date_created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}