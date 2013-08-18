<?php

/**
 * This is the model class for table "tbl_items".
 *
 * The followings are the available columns in table 'tbl_items':
 * @property integer $iid
 * @property string $item_name
 * @property string $uom
 * @property integer $current_quantity
 * @property string $item_type
 * @property string $date_created
 * @property string $created_by
 *
 * The followings are the available model relations:
 * @property ClientUsers $createdBy
 * @property StoreIn[] $storeIns
 * @property StoreOut[] $storeOuts
 */
class Items extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Items the static model class
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
		return 'tbl_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_name, uom, current_quantity, item_type, date_created, created_by', 'required'),
			array('current_quantity', 'numerical', 'integerOnly'=>true, 'min'=>0),
			array('item_name, uom, item_type, created_by', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iid, item_name, uom, current_quantity, item_type, date_created, created_by', 'safe', 'on'=>'search'),
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
			'storeIns' => array(self::HAS_MANY, 'StoreIn', 'iid'),
			'storeOuts' => array(self::HAS_MANY, 'StoreOut', 'iid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iid' => 'Iid',
			'item_name' => 'Item Name',
			'uom' => 'Uom',
			'current_quantity' => 'Current Quantity',
			'item_type' => 'Item Type',
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

		$criteria->compare('iid',$this->iid);
		$criteria->compare('item_name',$this->item_name,true);
		$criteria->compare('uom',$this->uom,true);
		$criteria->compare('current_quantity',$this->current_quantity);
		$criteria->compare('item_type',$this->item_type,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}