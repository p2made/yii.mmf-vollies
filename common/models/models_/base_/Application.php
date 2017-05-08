<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "mmf_application".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $availableFromDate
 * @property integer $availableFromTime
 * @property string $availableToDate
 * @property integer $availableToTime
 * @property integer $earlyLate
 * @property string $availabilityNotes
 * @property integer $double
 * @property integer $closed
 * @property integer $rejected
 * @property string $rejectedReason
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\User $user
 * @property \common\models\ApplicationJob[] $applicationJobs
 * @property \common\models\Commitment[] $commitments
 * @property string $aliasModel
 */
abstract class Application extends \yii\db\ActiveRecord
{



	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'mmf_application';
	}


	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			[
				'class' => BlameableBehavior::className(),
			],
			[
				'class' => TimestampBehavior::className(),
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['user_id'], 'required'],
			[['user_id', 'availableFromTime', 'availableToTime', 'earlyLate', 'double', 'closed', 'rejected'], 'integer'],
			[['availableFromDate', 'availableToDate'], 'safe'],
			[['availabilityNotes', 'rejectedReason'], 'string'],
			[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\User::className(), 'targetAttribute' => ['user_id' => 'id']]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'availableFromDate' => 'Available From Date',
			'availableFromTime' => 'Available From Time',
			'availableToDate' => 'Available To Date',
			'availableToTime' => 'Available To Time',
			'earlyLate' => 'Early Late',
			'availabilityNotes' => 'Availability Notes',
			'double' => 'Double',
			'closed' => 'Closed',
			'rejected' => 'Rejected',
			'rejectedReason' => 'Rejected Reason',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getApplicationJobs()
	{
		return $this->hasMany(\common\models\ApplicationJob::className(), ['appl_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCommitments()
	{
		return $this->hasMany(\common\models\Commitment::className(), ['appl_id' => 'id']);
	}




}