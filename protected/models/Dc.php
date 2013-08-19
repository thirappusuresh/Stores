<?php

/**
 * This is the model class for table "tbl_dc".
 *
 * The followings are the available columns in table 'tbl_dc':
 * @property string $docket_no
 * @property string $driver
 * @property string $date
 * @property string $vehicle_no
 * @property string $job_no
 * @property string $client_name
 * @property string $site_name
 * @property string $address
 * @property string $a_no
 * @property string $order_no
 * @property string $mix_des
 * @property string $mix_title
 * @property integer $ordered_qty
 * @property integer $dispatched_qty
 * @property integer $cumulative_qty
 * @property string $this_load
 * @property string $concrete_grade
 * @property string $slump
 * @property string $aggregate
 * @property string $admixture
 * @property string $cement
 * @property string $special_requirement
 * @property string $pump_type
 * @property string $pump_name
 * @property integer $pumped_qty
 * @property string $pump_time
 * @property string $date_created
 * @property string $created_by
 * @property integer $cid
 *
 * The followings are the available model relations:
 * @property Clients $c
 * @property ClientUsers $createdBy
 * @property DcItems[] $dcItems
 */
class Dc extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dc the static model class
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
		return 'tbl_dc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('docket_no, driver, date, vehicle_no, job_no, client_name, site_name, address, a_no, order_no, mix_des, mix_title, ordered_qty, dispatched_qty, cumulative_qty, this_load, concrete_grade, slump, aggregate, admixture, cement, special_requirement, pump_type, pump_name, pumped_qty, pump_time, date_created, created_by, cid', 'required'),
			array('ordered_qty, dispatched_qty, cumulative_qty, pumped_qty, cid', 'numerical', 'integerOnly'=>true),
			array('docket_no, driver, date, vehicle_no, job_no, client_name, site_name, a_no, order_no, mix_des, mix_title, this_load, concrete_grade, slump, aggregate, admixture, cement, special_requirement, pump_type, pump_name, pump_time, created_by', 'length', 'max'=>222),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('docket_no, driver, date, vehicle_no, job_no, client_name, site_name, address, a_no, order_no, mix_des, mix_title, ordered_qty, dispatched_qty, cumulative_qty, this_load, concrete_grade, slump, aggregate, admixture, cement, special_requirement, pump_type, pump_name, pumped_qty, pump_time, date_created, created_by, cid', 'safe', 'on'=>'search'),
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
			'c' => array(self::BELONGS_TO, 'Clients', 'cid'),
			'createdBy' => array(self::BELONGS_TO, 'ClientUsers', 'created_by'),
			'dcItems' => array(self::HAS_MANY, 'DcItems', 'docket_no'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'docket_no' => 'Docket No',
			'driver' => 'Driver',
			'date' => 'Date',
			'vehicle_no' => 'Vehicle No',
			'job_no' => 'Job No',
			'client_name' => 'Client Name',
			'site_name' => 'Site Name',
			'address' => 'Address',
			'a_no' => 'A No',
			'order_no' => 'Order No',
			'mix_des' => 'Mix Des',
			'mix_title' => 'Mix Title',
			'ordered_qty' => 'Ordered Qty',
			'dispatched_qty' => 'Dispatched Qty',
			'cumulative_qty' => 'Cumulative Qty',
			'this_load' => 'This Load',
			'concrete_grade' => 'Concrete Grade',
			'slump' => 'Slump',
			'aggregate' => 'Aggregate',
			'admixture' => 'Admixture',
			'cement' => 'Cement',
			'special_requirement' => 'Special Requirement',
			'pump_type' => 'Pump Type',
			'pump_name' => 'Pump Name',
			'pumped_qty' => 'Pumped Qty',
			'pump_time' => 'Pump Time',
			'date_created' => 'Date Created',
			'created_by' => 'Created By',
			'cid' => 'Cid',
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
		$criteria->compare('driver',$this->driver,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('vehicle_no',$this->vehicle_no,true);
		$criteria->compare('job_no',$this->job_no,true);
		$criteria->compare('client_name',$this->client_name,true);
		$criteria->compare('site_name',$this->site_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('a_no',$this->a_no,true);
		$criteria->compare('order_no',$this->order_no,true);
		$criteria->compare('mix_des',$this->mix_des,true);
		$criteria->compare('mix_title',$this->mix_title,true);
		$criteria->compare('ordered_qty',$this->ordered_qty);
		$criteria->compare('dispatched_qty',$this->dispatched_qty);
		$criteria->compare('cumulative_qty',$this->cumulative_qty);
		$criteria->compare('this_load',$this->this_load,true);
		$criteria->compare('concrete_grade',$this->concrete_grade,true);
		$criteria->compare('slump',$this->slump,true);
		$criteria->compare('aggregate',$this->aggregate,true);
		$criteria->compare('admixture',$this->admixture,true);
		$criteria->compare('cement',$this->cement,true);
		$criteria->compare('special_requirement',$this->special_requirement,true);
		$criteria->compare('pump_type',$this->pump_type,true);
		$criteria->compare('pump_name',$this->pump_name,true);
		$criteria->compare('pumped_qty',$this->pumped_qty);
		$criteria->compare('pump_time',$this->pump_time,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('cid',$this->cid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}