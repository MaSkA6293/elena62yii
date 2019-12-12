<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Typeuslugi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="typeuslugi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Название категории')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
