
<?php
$this->title = 'Контакты';
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<section class="section-page-title" style="background-image: url(<?php echo Url::to('@web/images/page-title-4-1920x305.jpg') ?>); background-size: cover;">
  <div class="container">
    <h1 class="page-title">Контакты</h1>
  </div>
</section>
<section class="breadcrumbs-custom">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><?php echo Html::a('Главная', ['@web/site/index']) ?></li>
      <li class="active">Контакты</li>
    </ul>
  </div>
</section>



       <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
         <section class="section section-md">
           <div class="container">
             <div class="row row-50">
           <div class="col-lg-8">
         <div class="alert alert-success">
            Спасибо за обращение к нам. Мы постараемся ответить вам как можно скорее.
        </div>
</div>


<div class="col-lg-4">
  <ul class="contact-list">
    <li>
      <p class="contact-list-title">Адрес</p>
      <div class="contact-list-content"><span class="icon mdi mdi-map-marker icon-primary"></span><a href="#">Рыбное, улица Крымская 13</a></div>
    </li>
    <li>
      <p class="contact-list-title">Телефон</p>
      <div class="contact-list-content"><span class="icon mdi mdi-phone icon-primary"></span><a href="tel:#">+7 (952) 126 15 27</a><span>, </span><a href="tel:#">+7 (920) 631 31 41</a></div>
    </li>
    <li>
      <p class="contact-list-title">E-mail</p>
      <div class="contact-list-content"><span class="icon mdi mdi-email-outline icon-primary"></span><a href="mailto:#">Salonelena13@yandex.ru</a></div>
    </li>
    <li>
      <p class="contact-list-title">Часы работы</p>
      <div class="contact-list-content"><span class="icon mdi mdi-clock icon-primary"></span>
        <ul class="list-xs">
          <li>Понедельник - пятница: 9:00 – 18:00</li>
          <li>Суббота:  9:00 – 18:00</li>
          <li>Воскресенье:  9:00 – 18:00</li>
        </ul>
      </div>
    </li>


    <li>
      <p class="contact-list-title">Мы в сети</p>
      <div class="contact-list-content">
        <ul class="list-xs">
          <li>
            <?= Html::a(Html::img('@web/images/ok.png',['alt' => 'Одноклассники','class'=>'imagessylki']), 'https://ok.ru/profile/354890367932',['target' => '_blank'])?>
            <?= Html::a(Html::img('@web/images/vk.png',['alt' => 'В контакте','class'=>'imagessylki']), 'https://vk.com/public117163294',['target' => '_blank'])?>
            <?= Html::a(Html::img('@web/images/inst.png',['alt' => 'Инстаграмм','class'=>'imagessylki']), 'https://www.instagram.com/elenavitikh/',['target' => '_blank'])?>
          </li>
        </ul>
        </div>
      </li>
  </ul>
</div>
</div>
</div>
</section>


       <?php else: ?>

<!-- Mailform-->
<section class="section section-md">
  <div class="container">
    <div class="row row-50">
      <div class="col-lg-8">
        <h2>Напишите нам</h2>
        <div class="divider-lg"></div>
        <p>Вы можете связаться с нами любым удобным для вас способом. <br class="d-none d-lg-inline">Также можно использовать форму обратной связи ниже или посетить наш салон лично.</p>
        <!-- RD Mailform-->
             <?php $form = ActiveForm::begin([
              'id' => 'contact-form', /* Идентификатор формы */
              'options' => ['class' => 'form-horizontal'],
            ]); ?>

            <div class="row row-30">
            <div class="col-sm-6">
              <div class="form-wrap">
                  <?= $form->field($model, 'name')->textInput(['class' => 'form-input','placeholder'=>'Имя','id'=>'contact-name'])->label(false) ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-wrap">
                  <?= $form->field($model, 'surname')->textInput(['class' => 'form-input','placeholder'=>'Фамилия'])->label(false) ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-wrap">
                  <?= $form->field($model, 'phone')->textInput(['class' => 'form-input','placeholder'=>'Телефон'])->label(false) ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-wrap">
              <?= $form->field($model, 'email')->textInput(['class' => 'form-input','placeholder'=>'Email'])->label(false) ?>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                  <?= $form->field($model, 'message')->textarea(['class' => 'form-input form-control-has-validation form-control-last-child','placeholder'=>'Сообщение', 'id'=>'contact-message'])->label(false)?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-wrap">
                <?= $form->field($model, 'verifyCode')->label(false)->widget(Captcha::className(), [
                    'captchaAction' => '/site/captcha',
                    'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-7">{input}</div></div>',
                ]) ?>
              </div>
          </div>
          <div class="col-sm-6">
      <?= Html::submitButton('Отправить сообщение', ['class' => 'button button-primary', 'name' => 'contact-button']) ?>
          </div>
        </div>
          <?php ActiveForm::end(); ?>

</div>
<div class="col-lg-4">
  <ul class="contact-list">
    <li>
      <p class="contact-list-title">Адрес</p>
      <div class="contact-list-content"><span class="icon mdi mdi-map-marker icon-primary"></span><a href="#">Рыбное, улица Крымская 13</a></div>
    </li>
    <li>
      <p class="contact-list-title">Телефон</p>
      <div class="contact-list-content"><span class="icon mdi mdi-phone icon-primary"></span><a href="tel:#">+7 (952) 126 15 27</a><span>, </span><a href="tel:#">+7 (920) 631 31 41</a></div>
    </li>
    <li>
      <p class="contact-list-title">E-mail</p>
      <div class="contact-list-content"><span class="icon mdi mdi-email-outline icon-primary"></span><a href="mailto:#">Salonelena13@yandex.ru</a></div>
    </li>
    <li>
      <p class="contact-list-title">Часы работы</p>
      <div class="contact-list-content"><span class="icon mdi mdi-clock icon-primary"></span>
        <ul class="list-xs">
          <li>Понедельник - пятница: 9:00 – 18:00</li>
          <li>Суббота:  9:00 – 18:00</li>
          <li>Воскресенье:  9:00 – 18:00</li>
        </ul>
      </div>
      </li>
        <li>
          <p class="contact-list-title">Мы в сети</p>
          <div class="contact-list-content">
            <ul class="list-xs">
              <li>
                <?= Html::a(Html::img('@web/images/ok.png',['alt' => 'Одноклассники','class'=>'imagessylki']), 'https://ok.ru/profile/354890367932',['target' => '_blank'])?>
                <?= Html::a(Html::img('@web/images/vk.png',['alt' => 'В контакте','class'=>'imagessylki']), 'https://vk.com/public117163294',['target' => '_blank'])?>
                <?= Html::a(Html::img('@web/images/inst.png',['alt' => 'Инстаграмм','class'=>'imagessylki']), 'https://www.instagram.com/elenavitikh/',['target' => '_blank'])?>
              </li>
            </ul>
            </div>
          </li>
      </ul>
  </div>


</div>
</div>
</section>


      <?php endif; ?>
