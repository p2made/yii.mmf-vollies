<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Commitment;

/**
 * CommitmentSearch represents the model behind the search form about `backend\models\Commitment`.
 */
class CommitmentSearch extends Commitment
{

	public function rules()
	{
		return [
			[['id', 'user_id', 'application_id', 'team_id', 'hours', 'reinvite', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['year', 'job', 'report'], 'safe'],
		];
	}

	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	public function search($params)
	{
		$query = Commitment::find();

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
			'user_id' => $this->user_id,
			'application_id' => $this->application_id,
			'team_id' => $this->team_id,
			'year' => $this->year,
			'hours' => $this->hours,
			'reinvite' => $this->reinvite,
			'created_at' => $this->created_at,
			'created_by' => $this->created_by,
			'updated_at' => $this->updated_at,
			'updated_by' => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'job', $this->job])
			->andFilterWhere(['like', 'report', $this->report]);

		return $dataProvider;
	}

}
