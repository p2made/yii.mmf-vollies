<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_team".
 *
 * @property integer $id
 * @property integer $head_id
 * @property integer $sequence
 * @property string $name
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Job[] $jobs
 * @property \common\models\Profile $head
 * @property string $aliasModel
 */
class Team extends \backend\models\base\Team
{
	// virtual attributes
	public $headName;
	public $preferredName;

	public function behaviors()
	{
		return ArrayHelper::merge(
			parent::behaviors(),
			[
				# custom behaviors
			]
		);
	}

	public function rules()
	{
		return ArrayHelper::merge(
			parent::rules(),
			[
				# custom validation rules
				[['headName'], 'safe'],
			]
		);
	}

	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'head_id' =>     'Head ID',
			'headName' =>    'Head Name',
			'sequence' =>    'Sequence',
			'name' =>        'Name',
			'description' => 'Description',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	public function afterFind()
	{
		parent::afterFind();

	}

	public function getHeadName()
	{
		if ($this->headName) {
			return $this->headName;
		}

		return $this->headName = $this->head->vollieName;
	}

	public function getPreferredName()
	{
		if ($this->preferredName) {
			return $this->preferredName;
		}

		return $this->preferredName = $this->head->preferredName;
	}

}
