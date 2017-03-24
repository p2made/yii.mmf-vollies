<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'givenName',
            'familyName',
            'preferredName',
            // 'phone1',
            // 'phone2',
            // 'address1',
            // 'address2',
            // 'locality',
            // 'state',
            // 'postcode',
            // 'country',
            // 'emergencyContact',
            // 'emergencyPhone1',
            // 'emergencyPhone2',
            // 'rsa',
            // 'dl_c',
            // 'dl_h',
            // 'cse',
            // 'ohs',
            // 'vol',
            // 'mmfVol',
            // 'mmfAtt',
            // 'discovery',
            // 'discoveryDetail',
            // 'returned',
            // 'dnr',
            // 'timezone',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
