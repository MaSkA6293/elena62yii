<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Priselist */

$this->title = Yii::t('app', 'Update Priselist: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Прайс лист'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="priselist-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
