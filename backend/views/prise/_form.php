<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Typeuslugi;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Priselist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priselist-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
     $type = Typeuslugi::find()->all();
    // формируем массив, с ключем равным полю 'id' и значением равным полю 'name'
        $items = ArrayHelper::map($type,'id','name');
        $params = [
            'prompt' => 'Выберите категорию'
        ];

    ?>



        <?= $form->field($model, 'type')->label('Категория')->dropDownList($items,$params);?>

    <?= $form->field($model, 'name')->label('Название услуги')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prise')->label('Цена услуги')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
