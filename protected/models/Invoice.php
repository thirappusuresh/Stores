<?php

/**
 * This is the model class for table "tbl_invoice".
 *
 * The followings are the available columns in table 'tbl_invoice':
 * @property string $invoice_id
 * @property integer $customer_id
 * @property string $pump
 * @property string $esugam
 * @property string $cst
 * @property string $ecc
 * @property string $tariff
 * @property string $commodity
 * @property integer $vat
 * @property string $date_created
 * @property string $created_by
 *
 * The followings are the available model relations:
 * @property ClientUsers $createdBy
 * @property ClientCustomers $customer
 */
class Invoice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Invoice the static model class
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
		return 'tbl_invoice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoice_id, customer_id, pump, esugam, cst, ecc, tariff, commodity, vat, date_created, created_by, cid', 'required'),
			array('customer_id, vat', 'numerical', 'integerOnly'=>true),
			array('invoice_id, pump, esugam, cst, ecc, tariff, commodity, created_by', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('invoice_id, customer_id, pump, esugam, cst, ecc, tariff, commodity, vat, date_created, created_by', 'safe', 'on'=>'search'),
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
			'v' => array(self::BELONGS_TO, 'Vat', 'vat'),
			'customer' => array(self::BELONGS_TO, 'ClientCustomers', 'customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'invoice_id' => 'Invoice',
			'customer_id' => 'Customer',
			'pump' => 'Pump',
			'esugam' => 'Esugam',
			'cst' => 'Cst',
			'ecc' => 'Ecc',
			'tariff' => 'Tariff',
			'commodity' => 'Commodity',
			'vat' => 'Vat',
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

		$criteria->compare('invoice_id',$this->invoice_id,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('pump',$this->pump,true);
		$criteria->compare('esugam',$this->esugam,true);
		$criteria->compare('cst',$this->cst,true);
		$criteria->compare('ecc',$this->ecc,true);
		$criteria->compare('tariff',$this->tariff,true);
		$criteria->compare('commodity',$this->commodity,true);
		$criteria->compare('vat',$this->vat);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}