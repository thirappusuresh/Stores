<?php

/**
 * This is the model class for table "tbl_invoice_items".
 *
 * The followings are the available columns in table 'tbl_invoice_items':
 * @property integer $sid
 * @property integer $iid
 * @property integer $quantity
 * @property integer $rate
 * @property string $invoice_id
 * @property string $date_created
 * @property string $created_by
 */
class InvoiceItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvoiceItems the static model class
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
		return 'tbl_invoice_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iid, quantity, rate, invoice_id, date_created, created_by', 'required'),
			array('iid, quantity, rate', 'numerical', 'integerOnly'=>true),
			array('invoice_id, created_by', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sid, iid, quantity, rate, invoice_id, date_created, created_by', 'safe', 'on'=>'search'),
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
			'item' => array(self::BELONGS_TO, 'Items', 'iid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sid' => 'Sid',
			'iid' => 'Item Name',
			'quantity' => 'Quantity',
			'rate' => 'Rate',
			'invoice_id' => 'Invoice',
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

		$criteria->compare('sid',$this->sid);
		$criteria->compare('iid',$this->iid);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('invoice_id',$this->invoice_id,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}