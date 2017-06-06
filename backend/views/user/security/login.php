<?php
/**
 * login.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
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
			<?php $form = ActiveForm::begin([
				'id' => 'login-form',
				'enableAjaxValidation' => true,
				'enableClientValidation' => false,
				'validateOnBlur' => false,
				'validateOnType' => false,
				'validateOnChange' => false,
			]) ?>

				<?= $form->field($model, 'login', ['inputOptions' => [
					'autofocus' => 'autofocus',
					'class' => 'form-control',
					'tabindex' => '1'
				]]) ?>

				<?= $form->field($model, 'password', ['inputOptions' => [
					'class' => 'form-control',
					'tabindex' => '2'
				]])->passwordInput()->label(Yii::t('user', 'Password') . ($module->enablePasswordRecovery ? ' (' . Html::a(Yii::t('user', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '5']) . ')' : '')) ?>

				<div class="row">
					<div class="col-md-8">
						<?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '3']) ?>
					</div>
					<div class="col-md-4">
						<?= Html::submitButton(Yii::t('user', 'Sign in'), [
							'class' => 'btn btn-primary btn-block btn-flat',
							'name' => 'login-button',
							'tabindex' => '4',
						]) ?>
					</div>
				</div>

			<?php ActiveForm::end(); ?>
		</div>
	</div>
	<?= Connect::widget([
		'baseAuthUrl' => ['/user/security/auth'],
	]) ?>
</div>