<?php// This class was automatically generated by a giiant build task// You should not change it manually as it will be overwritten on next buildnamespace common\models\base;use Yii;use yii\behaviors\TimestampBehavior;/** * This is the base-model class for table "mmf_job". * * @property integer $id * @property integer $team_id * @property integer $group_id * @property integer $sequence * @property string $name * @property string $description * @property integer $created_at * @property integer $updated_at * * @property \common\models\Application[] $applications * @property \common\models\Application[] $applications0 * @property \common\models\Application[] $applications1 * @property \common\models\MenuGroup $group * @property \common\models\Team $team * @property string $aliasModel */abstract class Job extends \yii\db\ActiveRecord{	/**	 * @inheritdoc	 */	public static function tableName()	{		return 'mmf_job';	}	/**	 * @inheritdoc	 */	public function behaviors()	{		return [			[				'class' => TimestampBehavior::className(),			],		];	}	/**	 * @inheritdoc	 */	public function rules()	{		return [			[['team_id', 'group_id', 'sequence'], 'integer'],			[['group_id', 'sequence', 'name'], 'required'],			[['description'], 'string'],			[['name'], 'string', 'max' => 48],			[['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\MenuGroup::className(), 'targetAttribute' => ['group_id' => 'id']],			[['team_id'], 'exist', 'skipOnError' => true, 'targetClass' => \common\models\Team::className(), 'targetAttribute' => ['team_id' => 'id']]		];	}	/**	 * @inheritdoc	 */	public function attributeLabels()	{		return [			'id' => 'ID',			'team_id' => 'Team ID',			'group_id' => 'Group ID',			'sequence' => 'Sequence',			'name' => 'Name',			'description' => 'Description',			'created_at' => 'Created At',			'updated_at' => 'Updated At',		];	}	/**	 * @return \yii\db\ActiveQuery	 */	public function getApplications()	{		return $this->hasMany(\common\models\Application::className(), ['job_choice_1' => 'id']);	}	/**	 * @return \yii\db\ActiveQuery	 */	public function getApplications0()	{		return $this->hasMany(\common\models\Application::className(), ['job_choice_2' => 'id']);	}	/**	 * @return \yii\db\ActiveQuery	 */	public function getApplications1()	{		return $this->hasMany(\common\models\Application::className(), ['job_choice_3' => 'id']);	}	/**	 * @return \yii\db\ActiveQuery	 */	public function getGroup()	{		return $this->hasOne(\common\models\MenuGroup::className(), ['id' => 'group_id']);	}	/**	 * @return \yii\db\ActiveQuery	 */	public function getTeam()	{		return $this->hasOne(\common\models\Team::className(), ['id' => 'team_id']);	}		/**	 * @inheritdoc	 * @return \common\models\JobQuery the active query used by this AR class.	 */	public static function find()	{		return new \common\models\JobQuery(get_called_class());	}}