<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Priselist */

$this->title = Yii::t('app', 'Создать новую услугу');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Прайс лист'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priselist-create">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
