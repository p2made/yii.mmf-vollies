<?php
/**
 * profile.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

use dektrium\user\helpers\Timezone;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var common\models\Profile $model
 */

common\assets\VolliesFormsAsset::register($this);

$this->title = 'Volunteer Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-md-12">
				<hr>
					<h2 class="intro-text text-center">
						<?= Html::encode($this->title) ?>
					</h2>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<p class="text-center"><?= $this->render('../user/settings/_menu') ?></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<?= $this->render('_form', ['model' => $model]) ?>
			</div>
		</div>

	</div>
</div>