<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/f197ab8e55d1e29a2dea883e84983544
 *
 * @package default
 */


namespace frontend\controllers\api;

/**
 * This is the class for REST controller "ApplicationController".
 */
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ApplicationController extends \yii\rest\ActiveController
{
	public $modelClass = 'common\models\ApplicationJob';
}
