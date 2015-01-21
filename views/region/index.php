<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Regions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Regions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'iso',
            'iso3',
            'fips',
            'country',
            // 'continent',
            // 'currency_code',
            // 'currency_name',
            // 'phone_prefix',
            // 'postal_code',
            // 'languages',
            // 'geonameid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
