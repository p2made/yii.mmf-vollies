<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/e0080b9d6ffa35acb85312bf99a557f2
 *
 * @package default
 */


namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `common\models\Profile`.
 */
class ProfileSearch extends Profile
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['id', 'user_id', 'rsa', 'dl_c', 'dl_h', 'cse', 'ohs', 'vol', 'mmfVol', 'mmfAtt', 'returned', 'created_by', 'updated_by'], 'integer'],
			[['givenName', 'familyName', 'preferredName', 'phone1', 'phone2', 'address1', 'address2', 'locality', 'state', 'postcode', 'country', 'emergencyContact', 'emergencyPhone1', 'emergencyPhone2', 'discovery', 'discoveryDetail', 'dnr', 'timezone', 'created_at', 'updated_at'], 'safe'],
		];
	}


	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function scenarios() {
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}


	/**
	 * Creates data provider instance with search query applied
	 *
	 *
	 * @param array   $params
	 * @return ActiveDataProvider
	 */
	public function search($params) {
		$query = Profile::find();

		$dataProvider = new ActiveDataProvider([
				'query' => $query,
			]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		$query->andFilterWhere([
				'id' => $this->id,
				'user_id' => $this->user_id,
				'rsa' => $this->rsa,
				'dl_c' => $this->dl_c,
				'dl_h' => $this->dl_h,
				'cse' => $this->cse,
				'ohs' => $this->ohs,
				'vol' => $this->vol,
				'mmfVol' => $this->mmfVol,
				'mmfAtt' => $this->mmfAtt,
				'returned' => $this->returned,
				'dnr' => $this->dnr,
				'created_at' => $this->created_at,
				'created_by' => $this->created_by,
				'updated_at' => $this->updated_at,
				'updated_by' => $this->updated_by,
			]);

		$query->andFilterWhere(['like', 'givenName', $this->givenName])
		->andFilterWhere(['like', 'familyName', $this->familyName])
		->andFilterWhere(['like', 'preferredName', $this->preferredName])
		->andFilterWhere(['like', 'phone1', $this->phone1])
		->andFilterWhere(['like', 'phone2', $this->phone2])
		->andFilterWhere(['like', 'address1', $this->address1])
		->andFilterWhere(['like', 'address2', $this->address2])
		->andFilterWhere(['like', 'locality', $this->locality])
		->andFilterWhere(['like', 'state', $this->state])
		->andFilterWhere(['like', 'postcode', $this->postcode])
		->andFilterWhere(['like', 'country', $this->country])
		->andFilterWhere(['like', 'emergencyContact', $this->emergencyContact])
		->andFilterWhere(['like', 'emergencyPhone1', $this->emergencyPhone1])
		->andFilterWhere(['like', 'emergencyPhone2', $this->emergencyPhone2])
		->andFilterWhere(['like', 'discovery', $this->discovery])
		->andFilterWhere(['like', 'discoveryDetail', $this->discoveryDetail])
		->andFilterWhere(['like', 'timezone', $this->timezone]);

		return $dataProvider;
	}


}