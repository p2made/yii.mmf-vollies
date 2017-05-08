<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "mmf_application_job".
 *
 * @property integer $id
 * @property integer $appl_id
 * @property integer $job_id
 * @property integer $preference
 *
 * @property \common\models\Job $job
 * @property \common\models\Application $appl
 * @property string $aliasModel
 */
abstract class ApplicationJob extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_application_job';
	}


	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['appl_id', 'job_id'], 'required'],
			[['appl_id', 'job_id', 'preference'], 'integer'],
			[['job_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Job::className(), 'targetAttribute' => ['job_id' => 'id']],
			[['appl_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Application::className(), 'targetAttribute' => ['appl_id' => 'id']]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'appl_id' => 'Appl ID',
			'job_id' => 'Job ID',
			'preference' => 'Preference',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getJob()
	{
		return $this->hasOne(\common\models\Job::className(), ['id' => 'job_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAppl()
	{
		return $this->hasOne(\common\models\Application::className(), ['id' => 'appl_id']);
	}




}