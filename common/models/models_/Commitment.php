<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%commitment}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $appl_id
 * @property integer $team_id
 * @property string $year
 * @property string $job
 * @property integer $hours
 * @property string $report
 * @property integer $reinvite
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 *
 * @property Application $appl
 * @property Team $team
 * @property User $user
 */
class Commitment extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%commitment}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['user_id', 'year', 'job'], 'required'],
			[['user_id', 'appl_id', 'team_id', 'hours', 'reinvite', 'created_by', 'updated_by'], 'integer'],
			[['year', 'created_at', 'updated_at'], 'safe'],
			[['report'], 'string'],
			[['job'], 'string', 'max' => 64],
			[['appl_id'], 'exist', 'skipOnError' => true, 'targetClass' => Application::className(), 'targetAttribute' => ['appl_id' => 'id']],
			[['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['team_id' => 'id']],
			[['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
			'appl_id' => 'Appl ID',
			'team_id' => 'Team ID',
			'year' => 'Year',
			'job' => 'Job',
			'hours' => 'Hours',
			'report' => 'Report',
			'reinvite' => 'Reinvite',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAppl()
	{
		return $this->hasOne(Application::className(), ['id' => 'appl_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTeam()
	{
		return $this->hasOne(Team::className(), ['id' => 'team_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(User::className(), ['id' => 'user_id']);
	}

	/**
	 * @inheritdoc
	 * @return CommitmentQuery the active query used by this AR class.
	 */
	public static function find()
	{
		return new CommitmentQuery(get_called_class());
	}
}
?>

