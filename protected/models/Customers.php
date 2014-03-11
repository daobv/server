<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $id
 * @property integer $roomId
 * @property integer $serviceListId
 * @property integer $songListId
 * @property integer $orderId
 *
 * The followings are the available model relations:
 * @property Bills[] $bills
 * @property Orders $order
 * @property Rooms $room
 * @property Servicelistsid $serviceList
 * @property Songlists $songList
 * @property Feedbacks[] $feedbacks
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('roomId, serviceListId, songListId, orderId', 'required'),
			array('roomId, serviceListId, songListId, orderId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, roomId, serviceListId, songListId, orderId', 'safe', 'on'=>'search'),
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
			'bills' => array(self::HAS_MANY, 'Bills', 'customerId'),
			'order' => array(self::BELONGS_TO, 'Orders', 'orderId'),
			'room' => array(self::BELONGS_TO, 'Rooms', 'roomId'),
			'serviceList' => array(self::BELONGS_TO, 'Servicelistsid', 'serviceListId'),
			'songList' => array(self::BELONGS_TO, 'Songlists', 'songListId'),
			'feedbacks' => array(self::HAS_MANY, 'Feedbacks', 'customerId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'roomId' => 'Room',
			'serviceListId' => 'Service List',
			'songListId' => 'Song List',
			'orderId' => 'Order',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('roomId',$this->roomId);
		$criteria->compare('serviceListId',$this->serviceListId);
		$criteria->compare('songListId',$this->songListId);
		$criteria->compare('orderId',$this->orderId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
