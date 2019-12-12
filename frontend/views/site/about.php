<?php
$this->title = 'О нас';
use yii\helpers\Url;
use yii\helpers\Html;
?>
<section class="section-page-title" style="background-image: url(<?php echo Url::to('@web/images/page-title-3-1920x305.jpg') ?>); background-size: cover;">
  <div class="container">
    <h1 class="page-title">О нас</h1>
  </div>
</section>
<section class="breadcrumbs-custom">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><?php echo Html::a('Главная', ['@web/site/index']) ?></li>
      <li class="active">О нас</li>
    </ul>
  </div>
</section>
<section class="section section-lg bg-default">
  <div class="container">
    <div class="row row-50 align-items-lg-center justify-content-xl-between">
      <div class="col-lg-6">
        <div class="block-xs">
          <h2>Кто мы?</h2>
          <div class="divider-lg"></div>
          <p class="big text-gray-800">Мы работаем для того, чтобы дарить этому миру красоту. Мы поможем вам подчеркнуть вашу индивидуальность!</p>
          <p>Меняется мир и мода, мы идем в ногу со временем. Мы используем передовые технологии и новинки в бьюти индустрии!</p>
        </div>
        <div class="row row-30">
          <div class="col-md-6">
            <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
              <h5>Мы открыты</h5>
              <ul class="list-xs">
                <li> <span class="text-gray-800">Понедельник-пятница: </span> 9:00–18:00
                </li>
                <li><span class="text-gray-800">Суббота:</span> 9:00–18:00
                </li>
                <li><span class="text-gray-800">Воскресенье: </span> 9:00–18:00
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
              <h5>Мы находимся</h5>
              <ul class="list-xs">
                <li><span class="text-gray-800">Адрес: </span> Рыбное, улица Крымская 13
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="box-images box-images-variant-3">
          <div class="box-images-item" data-parallax-scroll="{&quot;y&quot;: -20, &quot;smoothness&quot;: 30 }">
            <?= Html::img('@web/images/overview-1-470x282.jpg', ['alt' => '','width'=>'470','height'=>'282'])?>
          </div>
          <div class="box-images-item box-images-without-border" data-parallax-scroll="{&quot;y&quot;: 40,  &quot;smoothness&quot;: 30 }">
            <?= Html::img('@web/images/overview-2-470x282.jpg', ['alt'=>'','width'=>'470','height'=>'282'])?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-md bg-default text-center">
  <div class="container">
    <h2>Наша команда профессионалов</h2>
    <div class="divider-lg"></div>
    <p class="block-lg"> </p>
    <div class="row row-40">
      <div class="col-12">
        <!-- Owl Carousel-->
        <div class="owl-carousel carousel-creative" data-items="1" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="false" data-margin="30" data-mouse-drag="false">
          <div class="team-minimal team-minimal-with-shadow">
            <figure><?= Html::img('@web/images/team-3-370x370.png', ['alt' => ''], ['width'=>'370'], ['height'=>'370']) ?></figure>
            <div class="team-minimal-caption">
              <h4 class="team-title"><a href="#">Елена Витих</a></h4>
              <p>Парикмахер стилист</p>
            </div>
          </div>
          <div class="team-minimal team-minimal-with-shadow">
            <figure><?= Html::img('@web/images/team-4-370x370.jpg', ['alt' => ''], ['width'=>'370'], ['height'=>'370']) ?></figure>
            <div class="team-minimal-caption">
              <h4 class="team-title"><a href="#">Екатерина Свердлова</a></h4>
              <p>Мастер ногтевого сервиса</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12"><a class="button button-default-outline" href="#">Вся команда</a></div>
    </div>
  </div>
</section>
