<?php

use yii\bootstrap\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;

/* @var $this yii\web\View */
/* @var $model common\models\Application */
/* @var $form yii\widgets\ActiveForm */

$user = \Yii::$app->user->identity;

$userProfile = $user->profile;
$rsa = [$userProfile->rsa, 'Responsible Service of Alcohol'];
$dl_c = [$userProfile->dl_c, 'Driver\'s Licence (car)'];
$dl_h = [$userProfile->dl_h, 'Driver\'s Licence (LR or above)'];
$cse = [$userProfile->cse, 'Customer Service Experience'];
$ohs = [$userProfile->ohs, 'OH&amp;S qualifications'];
$bc = [$userProfile->bc, 'Blue Card (working with children)'];
$fa = [$userProfile->fa, 'First Aid Certificate'];
$skillsCheck = '<input type="checkbox" disabled';

function skillItem($item)
{
	$checked = $item[0] == 1;
	$output = '<div class="';
	$output .= ($checked ? 'has-success' : 'has-warning');
	$output .= '"><div class="checkbox"><label><input type="checkbox" disabled';
	$output .= ($checked ? ' checked' : '');
	$output .= '>' . $item[1] . '</label></div></div>';

	echo $output;
}

$pastJobs = $user->pastJobs();

$jobSelectWidget = array(
	'type' => Form::INPUT_WIDGET,
	'widgetClass' => '\kartik\widgets\Select2',
	'options' => ['data' => [
		null => '',
		'Setup & Bump Out' => [
			10 => 'General Setup',
			9 => 'Fencing',
			8 => 'Decor',
			3 => 'Bar Setup',
			6 => 'Children’s Festival Setup',
			4 => 'Bump Out',
		],
		'Children’s Festival' => [
			14 => 'Presenter',
			11 => 'Helper',
		],
		'Hospitality' => [
			1 => 'Bar Doors',
			2 => 'Bar Service',
			20 => 'Vollies Tent',
		],
		'Around the Site' => [
			5 => 'Campground',
			7 => 'Cleaning',
			17 => 'Ticket Gates',
			18 => 'Traffic',
		],
		'Stages' => [
			13 => 'MC',
			16 => 'Stage Manager',
		],
		'Other' => [
			12 => 'Instrument Lockup',
			15 => 'Shop',
			19 => 'Treasury',
			21 => 'I will do anything',
			22 => 'Special',
		],
	],],
	'hint' => 'Type and select job'
);

?>
<div class="application-form">

	<?php $form = ActiveForm::begin([
		'type' => ActiveForm::TYPE_VERTICAL
	]); ?>

	<div class="row">
		<div class="col-md-12">
			<h4>You have entered these skills...</h4>
		</div>
		<div class="col-md-4">
			<?= skillItem($rsa) ?>
		</div>
		<div class="col-md-4">
			<?= skillItem($dl_c) ?>
		</div>
		<div class="col-md-4">
			<?= skillItem($dl_h) ?>
		</div>
		<div class="col-md-4">
			<?= skillItem($cse) ?>
		</div>
		<div class="col-md-4">
			<?= skillItem($ohs) ?>
		</div>
		<div class="col-md-4">
			<?= skillItem($bc) ?>
		</div>
		<div class="col-md-4">
			<?= skillItem($fa) ?>
		</div>
	</div><!-- / Skills entered -->

	<div class="row">
		<div class="col-md-12">
			<h4>Job Choices</h4>
			<p>Nominate up to 3 job choices. We will do our best to fit you in to one of those. Select the last job item, "Special", <strong>only</strong> explicitly know before applying that you should select it.</p>
		</div>
	</div><!-- / Job Choices -->
	<?php echo Form::widget([
		'model' => $model,
		'form' => $form,
		'columns' => 3,
		'attributes' => [
			'job_choice_1' => $jobSelectWidget,
			'job_choice_2' => $jobSelectWidget,
			'job_choice_3' => $jobSelectWidget,
		]
	]) ?>

	<div class="row">
		<div class="col-md-12">
			<h4>Volunteer Availability</h4>
			<p>Pre-festival is from Wednesday August 30 to Friday September 1. Post-festival is afternoon of Sunday September 3 &amp; all day Monday September 4. Festival volunteer shifts run from Friday morning to Sunday late afternoon, including late nights.</p>
		</div>
	</div><!-- / Availability -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 12,
			'attributes' => [
				'availableFromDate' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Date available from',
						'08-30' => 'Wednesday August 30',
						'08-31' => 'Thursday August 31',
						'09-01' => 'Friday September 1',
						'09-02' => 'Saturday September 2',
						'09-03' => 'Sunday September 3',
					]],
					'columnOptions' => ['colspan' => 3],
				],
				'availableFromTime' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Time available from',
						1 => 'Early, 6:00 AM',
						2 => 'Midday, 12:00 PM',
						3 => 'Evening, 6:00 PM',
					]],
					'columnOptions' => ['colspan' => 2],
				],
				'availableToDate' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Date available to',
						'09-01' => 'Friday September 1',
						'09-02' => 'Saturday September 2',
						'09-03' => 'Sunday September 3',
						'09-04' => 'Monday September 4',
					]],
					'columnOptions' => ['colspan' => 3],
				],
				'availableToTime' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => 'Time available to',
						2 => 'Midday, 12:00 PM',
						3 => 'Evening, 6:00 PM',
						4 => 'Late, Midnight',
					]],
					'columnOptions' => ['colspan' => 2],
				],
				'bestTime' => [
					'type' => Form::INPUT_WIDGET,
					'widgetClass' => '\kartik\widgets\Select2',
					'options' => ['data' => [
						null => '(optional)',
						1 => 'an earlybird',
						2 => 'a nightowl',
					]],
					'columnOptions' => ['colspan' => 2],
				],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'availabilityNotes' => [
					'type' => Form::INPUT_TEXTAREA,
					'options' => ['placeholder' => 'Please tell us any times you are NOT available to work, along with anything else pertinant to your availability (optional).'
				]],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'attributes' => [
				'double' => [
					'type' => Form::INPUT_CHECKBOX,
					'label' => 'I am available for double shifts if required.',
				],
			]
		]);

		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 1,
			'attributes' => [
				'otherNotes' => [
					'type' => Form::INPUT_TEXTAREA,
					'options' => ['placeholder' => 'Here\'s where you give other comments or information that you think helpful to your application (optional).'
				]],
			]
		]);
	?>

	<div class="row">
		<div class="col-md-12">
			<h4>Referee (optional)</h4>
			<p>If applying for Shop, Treasury, or Ticket Gates, please provide a referee. Otherwise optional.</p>
		</div>
	</div><!-- / Referee -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'columns' => 12,
			'attributes' => [
				'referee' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Referee Name'],
					'columnOptions' => ['colspan' => 4],
				],
				'refereeRelationship' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'Referee Relationship'],
					'columnOptions' => ['colspan' => 5],
				],
				'refereePhone' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => '04xx xxx xxx or 0x xxxx xxxx'],
					'columnOptions' => ['colspan' => 3],
				],
			]
		]);
	?>

	<div class="row">
		<div class="col-md-12">
			<h4>Best Calling Time (optional)</h4>
			<p>Just in case someone needs to talk with you before assigning you to a job.</p>
		</div>
	</div><!-- / Best Calling Times -->
	<?php
		echo Form::widget([
			'model' => $model,
			'form' => $form,
			'attributes' => [
				'bestCallingTime' => [
					'type' => Form::INPUT_TEXT,
					'options' => ['placeholder' => 'What are good or bad times to call?'],
					'label' =>false,
				],
			]
		]);
	?>

	<div class="row"><div class="col-md-12"><br></div></div>

	<div class="row">
		<div class="col-md-9">
			<p>Once you're happy with everything above, go ahead and...</p>
		</div><!-- / Check -->
		<div class="col-md-3">
			<div class="form-group">
				<?= Html::submitButton(
					$model->isNewRecord ? 'Submit Your Application' : 'Update Your Application',
					['class' => 'btn btn-' . ($model->isNewRecord ? 'success' : 'primary') . ' btn-lg btn-block']
				) ?>
			</div>
		</div><!-- / Submit -->
	</div>

	<?php ActiveForm::end(); ?>

</div>
