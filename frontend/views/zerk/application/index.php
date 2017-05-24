<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/a0a12d1bd32eaeeb8b2cff56d511aa22
 *
 * @package default
 */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
 *
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\ApplicationSearch $searchModel
 */
$this->title = Yii::t('models', 'Applications');
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
	$actionColumnTemplate = implode(' ', $actionColumnTemplates);
	$actionColumnTemplateString = $actionColumnTemplate;
} else {
	Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']);
	$actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">'.$actionColumnTemplateString.'</div>';
?>
<div class="giiant-crud application-index">

	<?php
//			 echo $this->render('_search', ['model' =>$searchModel]);
?>


	<?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

	<h1>
		<?php echo Yii::t('models', 'Applications') ?>
		<small>
			List
		</small>
	</h1>
	<div class="clearfix crud-navigation">
		<div class="pull-left">
			<?php echo Html::a('<span class="glyphicon glyphicon-plus"></span> ' . 'New', ['create'], ['class' => 'btn btn-success']) ?>
		</div>

		<div class="pull-right">


			<?php echo
\yii\bootstrap\ButtonDropdown::widget(
	[
		'id' => 'giiant-relations',
		'encodeLabel' => false,
		'label' => '<span class="glyphicon glyphicon-paperclip"></span> ' . 'Relations',
		'dropdown' => [
			'options' => [
				'class' => 'dropdown-menu-right'
			],
			'encodeLabels' => false,
			'items' => [
				[
					'url' => ['job/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Job'),
				],
				[
					'url' => ['job/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Job'),
				],
				[
					'url' => ['job/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'Job'),
				],
				[
					'url' => ['user/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-left"></i> ' . Yii::t('models', 'User'),
				],

			]
		],
		'options' => [
			'class' => 'btn-default'
		]
	]
);
?>
		</div>
	</div>

	<hr />

	<div class="table-responsive">
		<?php echo GridView::widget([
		'dataProvider' => $dataProvider,
		'pager' => [
			'class' => yii\widgets\LinkPager::className(),
			'firstPageLabel' => 'First',
			'lastPageLabel' => 'Last',
		],
		'filterModel' => $searchModel,
		'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
		'headerRowOptions' => ['class'=>'x'],
		'columns' => [
			[
				'class' => 'yii\grid\ActionColumn',
				'template' => $actionColumnTemplateString,
				'buttons' => [
					'view' => function ($url, $model, $key) {
						$options = [
							'title' => Yii::t('yii', 'View'),
							'aria-label' => Yii::t('yii', 'View'),
							'data-pjax' => '0',
						];
						return Html::a('<span class="glyphicon glyphicon-file"></span>', $url, $options);
					}


				],
				'urlCreator' => function($action, $model, $key, $index) {
					// using the column name as key, not mapping to 'id' like the standard generator
					$params = is_array($key) ? $key : [$model->primaryKey()[0] => (string) $key];
					$params[0] = \Yii::$app->controller->id ? \Yii::$app->controller->id . '/' . $action : $action;
					return Url::toRoute($params);
				},
				'contentOptions' => ['nowrap'=>'nowrap']
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
				'class' => yii\grid\DataColumn::className(),
				'attribute' => 'user_id',
				'value' => function ($model) {
					if ($rel = $model->getUser()->one()) {
						return Html::a($rel->id, ['user/view', 'id' => $rel->id, ], ['data-pjax' => 0]);
					} else {
						return '';
					}
				},
				'format' => 'raw',
			],
			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
				'class' => yii\grid\DataColumn::className(),
				'attribute' => 'job_choice_1',
				'value' => function ($model) {
					if ($rel = $model->getJobChoice1()->one()) {
						return Html::a($rel->name, ['job/view', 'id' => $rel->id, ], ['data-pjax' => 0]);
					} else {
						return '';
					}
				},
				'format' => 'raw',
			],
			'year',
			'availableFromDate',
			'availableFromTime:datetime',
			'availableToDate',
			'availableToTime:datetime',
			/*// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
				'class' => yii\grid\DataColumn::className(),
				'attribute' => 'job_choice_2',
				'value' => function ($model) {
					if ($rel = $model->getJobChoice2()->one()) {
						return Html::a($rel->name, ['job/view', 'id' => $rel->id,], ['data-pjax' => 0]);
					} else {
						return '';
					}
				},
				'format' => 'raw',
			],*/
			/*// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
			[
				'class' => yii\grid\DataColumn::className(),
				'attribute' => 'job_choice_3',
				'value' => function ($model) {
					if ($rel = $model->getJobChoice3()->one()) {
						return Html::a($rel->name, ['job/view', 'id' => $rel->id,], ['data-pjax' => 0]);
					} else {
						return '';
					}
				},
				'format' => 'raw',
			],*/
			/*'bestTIme:datetime',*/
			/*'double',*/
			/*'accepted',*/
			/*'team_id',*/
			/*'rejected',*/
			/*'availabilityNotes:ntext',*/
			/*'otherNotes:ntext',*/
			/*'rejectedReason:ntext',*/
			/*'referee',*/
			/*'refereeRelationship',*/
			/*'refereePhone',*/
		],
	]); ?>
	</div>

</div>


<?php \yii\widgets\Pjax::end() ?>
