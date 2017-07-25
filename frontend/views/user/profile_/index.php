<?php
/**
 * /WWW/yii.mmf-vollies/frontend/runtime/giiant/a0a12d1bd32eaeeb8b2cff56d511aa22
 *
 * @package default
 */


use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
 *
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\ProfileSearch $searchModel
 */
$this->title = Yii::t('models', 'Profiles');
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
<div class="giiant-crud profile-index">

	<?php
//			 echo $this->render('_search', ['model' =>$searchModel]);
?>


	<?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

	<h1>
		<?php echo Yii::t('models', 'Profiles') ?>
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
					'url' => ['application/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . 'Application',
				],
				[
					'url' => ['commitment/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'Commitment'),
				],
				[
					'url' => ['history/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'History'),
				],
				[
					'url' => ['team/index'],
					'label' => '<i class="glyphicon glyphicon-arrow-right"></i> ' . Yii::t('models', 'Team'),
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
			'bio:ntext',
			'timezone',
			'public_email:email',
			'gravatar_email:email',
			'website',
			'name',
			'location',
			/*'givenName',*/
			/*'familyName',*/
			/*'phone1',*/
			/*'address1',*/
			/*'locality',*/
			/*'emergencyContact',*/
			/*'emergencyPhone1',*/
			/*'discovery',*/
			/*'rsa',*/
			/*'dl_c',*/
			/*'dl_h',*/
			/*'cse',*/
			/*'ohs',*/
			/*'bc',*/
			/*'vol',*/
			/*'mmfVol',*/
			/*'mmfAtt',*/
			/*'returned',*/
			/*'dnr',*/
			/*'preferredName',*/
			/*'phone2',*/
			/*'state',*/
			/*'postcode',*/
			/*'country',*/
			/*'emergencyPhone2',*/
			/*'gravatar_id',*/
			/*'address2',*/
			/*'discoveryDetail',*/
			/*'user_id',*/
		],
	]); ?>
	</div>

</div>


<?php \yii\widgets\Pjax::end() ?>
