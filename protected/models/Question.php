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
			array('quizinfo_id, sort_order', 'numerical', 'integerOnly'=>true),
			array('question, question_type', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, quizinfo_id, question, question_type, sort_order', 'safe', 'on'=>'search'),
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}