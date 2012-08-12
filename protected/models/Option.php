<?php

/**
 * This is the model class for table "tbl_Option".
 *
 * The followings are the available columns in table 'tbl_Option':
 * @property integer $id
 * @property integer $ques_id
 * @property string $option_text
 * @property string $option_type
 * @property string $option_info
 * @property integer $weightage
 *
 * The followings are the available model relations:
 * @property Question $ques
 */
class Option extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Option the static model class
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
		return 'tbl_Option';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ques_id, weightage', 'numerical', 'integerOnly'=>true),
			array('option_text, option_type, option_info', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ques_id, option_text, option_type, option_info, weightage', 'safe', 'on'=>'search'),
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
			'ques' => array(self::BELONGS_TO, 'Question', 'ques_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ques_id' => 'Ques',
			'option_text' => 'Option Text',
			'option_type' => 'Option Type',
			'option_info' => 'Option Info',
			'weightage' => 'Weightage',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('ques_id',$this->ques_id);
		$criteria->compare('option_text',$this->option_text,true);
		$criteria->compare('option_type',$this->option_type,true);
		$criteria->compare('option_info',$this->option_info,true);
		$criteria->compare('weightage',$this->weightage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}