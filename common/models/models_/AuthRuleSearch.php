<?php
/**
 * /WWW/yii.mmf-vollies/backend/runtime/giiant/e0080b9d6ffa35acb85312bf99a557f2
 *
 * @package default
 */


namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AuthRule;

/**
 * AuthRuleSearch represents the model behind the search form about `common\models\AuthRule`.
 */
class AuthRuleSearch extends AuthRule
{

	/**
	 *
	 * @inheritdoc
	 * @return unknown
	 */
	public function rules() {
		return [
			[['name', 'data', 'created_at', 'updated_at'], 'safe'],
			[['created_by', 'updated_by'], 'integer'],
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
		$query = AuthRule::find();

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
				'created_at' => $this->created_at,
				'created_by' => $this->created_by,
				'updated_at' => $this->updated_at,
				'updated_by' => $this->updated_by,
			]);

		$query->andFilterWhere(['like', 'name', $this->name])
		->andFilterWhere(['like', 'data', $this->data]);

		return $dataProvider;
	}


}
?>

