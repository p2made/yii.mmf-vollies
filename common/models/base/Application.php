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
 * @property integer $job_choice_1
 * @property integer $job_choice_2
 * @property integer $job_choice_3
 * @property string $year
 * @property string $availableFromDate
 * @property integer $availableFromTime
 * @property string $availableToDate
 * @property integer $availableToTime
 * @property integer $bestTime
 * @property string $availabilityNotes
 * @property integer $double
 * @property string $otherNotes
 * @property string $referee
 * @property string $refereeRelationship
 * @property string $refereePhone
 * @property string $bestCallingTime
 * @property integer $status
 * @property integer $team_id
 * @property string $rejectedReason
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
 * @property \common\models\Job $jobChoice1
 * @property \common\models\Job $jobChoice2
 * @property \common\models\Job $jobChoice3
 * @property \common\models\Profile $user
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
            [['user_id', 'job_choice_1', 'year', 'availableFromDate', 'availableFromTime', 'availableToDate', 'availableToTime'], 'required'],
            [['user_id', 'job_choice_1', 'job_choice_2', 'job_choice_3', 'availableFromTime', 'availableToTime', 'bestTime', 'double', 'status', 'team_id'], 'integer'],
            [['year'], 'safe'],
            [['availabilityNotes', 'otherNotes', 'rejectedReason'], 'string'],
            [['availableFromDate', 'availableToDate'], 'string', 'max' => 8],
            [['referee'], 'string', 'max' => 64],
            [['refereeRelationship', 'refereePhone'], 'string', 'max' => 32],
            [['bestCallingTime'], 'string', 'max' => 255],
            [['job_choice_1'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Job::className(), 'targetAttribute' => ['job_choice_1' => 'id']],
            [['job_choice_2'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Job::className(), 'targetAttribute' => ['job_choice_2' => 'id']],
            [['job_choice_3'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Job::className(), 'targetAttribute' => ['job_choice_3' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Profile::className(), 'targetAttribute' => ['user_id' => 'user_id']]
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
            'job_choice_1' => 'Job Choice 1',
            'job_choice_2' => 'Job Choice 2',
            'job_choice_3' => 'Job Choice 3',
            'year' => 'Year',
            'availableFromDate' => 'Available From Date',
            'availableFromTime' => 'Available From Time',
            'availableToDate' => 'Available To Date',
            'availableToTime' => 'Available To Time',
            'bestTime' => 'Best Time',
            'availabilityNotes' => 'Availability Notes',
            'double' => 'Double',
            'otherNotes' => 'Other Notes',
            'referee' => 'Referee',
            'refereeRelationship' => 'Referee Relationship',
            'refereePhone' => 'Referee Phone',
            'bestCallingTime' => 'Best Calling Time',
            'status' => 'Status',
            'team_id' => 'Team ID',
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
    public function getJobChoice1()
    {
        return $this->hasOne(\common\models\Job::className(), ['id' => 'job_choice_1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobChoice2()
    {
        return $this->hasOne(\common\models\Job::className(), ['id' => 'job_choice_2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobChoice3()
    {
        return $this->hasOne(\common\models\Job::className(), ['id' => 'job_choice_3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\Profile::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommitments()
    {
        return $this->hasMany(\common\models\Commitment::className(), ['application_id' => 'id']);
    }


    
    /**
     * @inheritdoc
     * @return \common\models\ApplicationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\ApplicationQuery(get_called_class());
    }


}
