<?php
/**
 * login.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @package p2made/yii.mmf-vollies
 * @license Private Use
 */

use dektrium\user\widgets\Connect;
use dektrium\user\models\LoginForm;
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use p2m\helpers\FA;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;

$fieldOptions1 = [
	'options' => ['class' => 'form-group has-feedback', 'autofocus' => 'autofocus'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-envelope form-control-feedback'></i>",
];

$fieldOptions2 = [
	'options' => ['class' => 'form-group has-feedback'],
	'inputTemplate' => "{input}<i class='glyphicon glyphicon-lock form-control-feedback'></i>",
];
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="sb-box">
	<div class="sb-logo">
		MMF Vollies HQ
	</div>
	<div class="sb-box-body panel panel-default">
		<div class="panel-body">

			<p class="sb-box-msg">Login to start your session</p>

			<?php $form = ActiveForm::begin([
				'id' => 'login-form',
				'enableClientValidation' => false
			]); ?>

				<?= $form
					->field($model, 'username', $fieldOptions1)
					->label(false)
					->textInput(['placeholder' => $model->getAttributeLabel('username')])
				?>

				<?= $form
					->field($model, 'password', $fieldOptions2)
					->label(false)
					->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
				?>

				<div class="row">
					<div class="col-xs-8">
						<?= $form->field($model, 'rememberMe')->checkbox() ?>
					</div>
					<div class="col-xs-4">
						<?= Html::submitButton('Login', [
							'class' => 'btn btn-primary btn-block btn-flat',
							'name' => 'login-button'
						]) ?>
					</div>
				</div>

			<?php ActiveForm::end(); ?>

		</div>
	</div>
</div>


