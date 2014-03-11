<?php

/**
 * This is the model class for table "bills".
 *
 * The followings are the available columns in table 'bills':
 * @property integer $id
 * @property integer $customerId
 * @property integer $roomId
 * @property integer $serviceListId
 * @property integer $receptorId
 * @property string $checkoutTime
 *
 * The followings are the available model relations:
 * @property Receptors $receptor
 * @property Customers $customer
 * @property Rooms $room
 * @property Servicelistsid $serviceList
 */
class Bills extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bills';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerId, roomId, serviceListId, receptorId, checkoutTime', 'required'),
			array('customerId, roomId, serviceListId, receptorId', 'numerical', 'integerOnly'=>true),
			array('checkoutTime', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customerId, roomId, serviceListId, receptorId, checkoutTime', 'safe', 'on'=>'search'),
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
			'receptor' => array(self::BELONGS_TO, 'Receptors', 'receptorId'),
			'customer' => array(self::BELONGS_TO, 'Customers', 'customerId'),
			'room' => array(self::BELONGS_TO, 'Rooms', 'roomId'),
			'serviceList' => array(self::BELONGS_TO, 'Servicelistsid', 'serviceListId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customerId' => 'Customer',
			'roomId' => 'Room',
			'serviceListId' => 'Service List',
			'receptorId' => 'Receptor',
			'checkoutTime' => 'Checkout Time',
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
		$criteria->compare('customerId',$this->customerId);
		$criteria->compare('roomId',$this->roomId);
		$criteria->compare('serviceListId',$this->serviceListId);
		$criteria->compare('receptorId',$this->receptorId);
		$criteria->compare('checkoutTime',$this->checkoutTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bills the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
