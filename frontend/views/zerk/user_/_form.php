<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/4b7e79a8340461fe629a6ac612644d03
 *
 * @package default
 */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
 *
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

	<?php $form = ActiveForm::begin([
		'id' => 'User',
		'layout' => 'horizontal',
		'enableClientValidation' => true,
		'errorSummaryCssClass' => 'error-summary alert alert-danger'
	]
);
?>

	<div class="">
		<?php $this->beginBlock('main'); ?>

		<p>


<!-- attribute role_id -->
			<?php echo // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'role_id')->dropDownList(
	\yii\helpers\ArrayHelper::map(common\models\Role::find()->all(), 'id', 'name'),
	[
		'prompt' => 'Select',
		'disabled' => (isset($relAttributes) && isset($relAttributes['role_id'])),
	]
); ?>

<!-- attribute status -->
			<?php echo $form->field($model, 'status')->textInput() ?>

<!-- attribute email -->
			<?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<!-- attribute password -->
			<?php echo $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

<!-- attribute logged_in_at -->
			<?php echo $form->field($model, 'logged_in_at')->textInput() ?>

<!-- attribute banned_at -->
			<?php echo $form->field($model, 'banned_at')->textInput() ?>

<!-- attribute username -->
			<?php echo $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

<!-- attribute auth_key -->
			<?php echo $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

<!-- attribute access_token -->
			<?php echo $form->field($model, 'access_token')->textInput(['maxlength' => true]) ?>

<!-- attribute logged_in_ip -->
			<?php echo $form->field($model, 'logged_in_ip')->textInput(['maxlength' => true]) ?>

<!-- attribute created_ip -->
			<?php echo $form->field($model, 'created_ip')->textInput(['maxlength' => true]) ?>

<!-- attribute banned_reason -->
			<?php echo $form->field($model, 'banned_reason')->textInput(['maxlength' => true]) ?>
		</p>
		<?php $this->endBlock(); ?>

		<?php echo
Tabs::widget(
	[
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => Yii::t('models', 'User'),
				'content' => $this->blocks['main'],
				'active'  => true,
			],
		]
	]
);
?>
		<hr/>

		<?php echo $form->errorSummary($model); ?>

		<?php echo Html::submitButton(
	'<span class="glyphicon glyphicon-check"></span> ' .
	($model->isNewRecord ? 'Create' : 'Save'),
	[
		'id' => 'save-' . $model->formName(),
		'class' => 'btn btn-success'
	]
);
?>

		<?php ActiveForm::end(); ?>

	</div>

</div>
