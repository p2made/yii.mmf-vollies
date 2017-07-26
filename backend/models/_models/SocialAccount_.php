<?php

namespace common\models;

use Yii;
use \common\models\base\SocialAccount as BaseSocialAccount;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mmf_social_account".
 */
class SocialAccount extends BaseSocialAccount
{

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
			 ]
		);
	}
}
