<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Job;

/**
 * JobSearch represents the model behind the search form about `backend\models\Job`.
 *
 * @property integer $id
 * @property integer $team_id
 * @property integer $group_id
 * @property integer $sequence
 * @property string $name
 * @property string $shortName
 * @property string $description
 * @property integer $required
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \common\models\Application[] $applications
 * @property \common\models\Application[] $applications0
 * @property \common\models\Application[] $applications1
 * @property \common\models\MenuGroup $group
 * @property \common\models\Team $team
 * @property string $aliasModel
 *
 * @property string $teamName
 */
class JobSearch extends Job
{
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'team_id', 'group_id', 'sequence', 'required', 'created_at', 'updated_at'], 'integer'],
			[['name', 'shortName', 'description'], 'safe'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params)
	{
		$query = Job::find();

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'id' => $this->id,
			'team_id' => $this->team_id,
			'group_id' => $this->group_id,
			'sequence' => $this->sequence,
			'required' => $this->required,
			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		]);

		$query->andFilterWhere(['like', 'name', $this->name])
			->andFilterWhere(['like', 'shortName', $this->shortName])
			->andFilterWhere(['like', 'description', $this->description]);

		return $dataProvider;
	}
}
