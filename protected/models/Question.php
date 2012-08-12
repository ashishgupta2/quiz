<?php

/**
 * This is the model class for table "tbl_Question".
 *
 * The followings are the available columns in table 'tbl_Question':
 * @property integer $id
 * @property integer $quizinfo_id
 * @property string $question
 * @property string $question_type
 * @property integer $sort_order
 * @property string $create_time
 * @property integer $created_by
 * @property string $update_time
 * @property integer $updated_by
 *
 * The followings are the available model relations:
 * @property Option[] $options
 * @property QuizInfo $quizinfo
 */
class Question extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Question the static model class
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
		return 'tbl_Question';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_time, created_by, update_time', 'required'),
			array('quizinfo_id, sort_order, created_by, updated_by', 'numerical', 'integerOnly'=>true),
			array('question, question_type', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, quizinfo_id, question, question_type, sort_order, create_time, created_by, update_time, updated_by', 'safe', 'on'=>'search'),
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
			'options' => array(self::HAS_MANY, 'Option', 'ques_id'),
			'quizinfo' => array(self::BELONGS_TO, 'QuizInfo', 'quizinfo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'quizinfo_id' => 'Quizinfo',
			'question' => 'Question',
			'question_type' => 'Question Type',
			'sort_order' => 'Sort Order',
			'create_time' => 'Create Time',
			'created_by' => 'Created By',
			'update_time' => 'Update Time',
			'updated_by' => 'Updated By',
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
		$criteria->compare('quizinfo_id',$this->quizinfo_id);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('question_type',$this->question_type,true);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('updated_by',$this->updated_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}