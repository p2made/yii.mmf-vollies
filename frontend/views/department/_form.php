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
 * @var common\models\Department $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin([
		'id' => 'Department',
		'layout' => 'horizontal',
		'enableClientValidation' => true,
		'errorSummaryCssClass' => 'error-summary alert alert-error'
	]
);
?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>


<!-- attribute head_id -->
			<?php echo // generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::activeField
$form->field($model, 'head_id')->dropDownList(
	\yii\helpers\ArrayHelper::map(common\models\User::find()->all(), 'id', 'id'),
	[
		'prompt' => 'Select',
		'disabled' => (isset($relAttributes) && isset($relAttributes['head_id'])),
	]
); ?>

<!-- attribute sequence -->
			<?php echo $form->field($model, 'sequence')->textInput() ?>

<!-- attribute name -->
			<?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!-- attribute description -->
			<?php echo $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        </p>
        <?php $this->endBlock(); ?>

        <?php echo
Tabs::widget(
	[
		'encodeLabels' => false,
		'items' => [
			[
				'label'   => Yii::t('models', 'Department'),
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
