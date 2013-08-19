<?php

/**
 * This is the model class for table "tbl_dc_items".
 *
 * The followings are the available columns in table 'tbl_dc_items':
 * @property string $docket_no
 * @property string $product_code
 * @property double $design
 * @property double $required_qty
 * @property double $batched_qty
 * @property double $moisture
 * @property string $date_created
 * @property string $created_by
 *
 * The followings are the available model relations:
 * @property ClientUsers $createdBy
 * @property Dc $docketNo
 */
class DcItems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DcItems the static model class
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
		return 'tbl_dc_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('docket_no, product_code, design, required_qty, batched_qty, moisture, date_created, created_by', 'required'),
			array('design, required_qty, batched_qty, moisture', 'numerical'),
			array('docket_no, product_code, created_by', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('docket_no, product_code, design, required_qty, batched_qty, moisture, date_created, created_by', 'safe', 'on'=>'search'),
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
			'docketNo' => array(self::BELONGS_TO, 'Dc', 'docket_no'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'docket_no' => 'Docket No',
			'product_code' => 'Product Code',
			'design' => 'Design',
			'required_qty' => 'Required Qty',
			'batched_qty' => 'Batched Qty',
			'moisture' => 'Moisture',
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

		$criteria->compare('docket_no',$this->docket_no,true);
		$criteria->compare('product_code',$this->product_code,true);
		$criteria->compare('design',$this->design);
		$criteria->compare('required_qty',$this->required_qty);
		$criteria->compare('batched_qty',$this->batched_qty);
		$criteria->compare('moisture',$this->moisture);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}