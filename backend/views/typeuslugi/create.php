<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Typeuslugi */

$this->title = Yii::t('app', 'Создать новую категорию');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Категории'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typeuslugi-create">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
