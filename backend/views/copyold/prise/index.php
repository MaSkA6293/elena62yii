<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Priselist;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PriselistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Прайс лист');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priselist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Создать новую услугу'), ['create'], ['class' => 'btn btn-success']) ?>
          <?= Html::a(Yii::t('app', 'Категории'), ['typeuslugi/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=  GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                        [
                'attribute'=>'type',
                'label'=>'Категория услуги',
                'format'=>'text', // Возможные варианты: raw, html
                'content'=>function($data){

                    return $data-> getParentName();
                },
            'filter' => Priselist:: getParentsList(),
            ],

            [
            'attribute'=>'name',
            'label'=>'Название услуги',],

            [
            'attribute'=>'prise',
            'label'=>'Цена',],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
