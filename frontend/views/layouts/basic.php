<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;





?>

<?php $this->beginPage() ?>
<?php AppAsset::register($this);?>



<!DOCTYPE html>
<html class="wide wow-animation" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo Url::to('@web/images/favicon.ico')?>"  type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300i,400,400i,700%7CMontserrat:400,500,600,700%7CPlayfair+Display:400,700,700i%7COswald:400,700,700i">

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>



<body>
<div class="ie-panel"><?= Html::a('',['http://windows.microsoft.com/en-US/internet-explorer/']) ?><?= Html::img('@web/images/ie8-panel/warning_bar_0000_us.jpg', ['alt' => 'Вы используете устаревший браузер. Для более быстрого и безопасного просмотра обновите свой браузер.'], ['width'=>'42'], ['height'=>'820']) ?></div>
<div class="preloader">
  <div class="preloader-body">
    <div class="cssload-container">
      <div class="cssload-speeding-wheel"></div>
    </div>
    <p>Loading...</p>
  </div>
</div>
<div class="page">

  <!-- Page Header-->
  <header class="section page-header">
    <!-- RD Navbar-->


    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-classic rd-navbar-classic-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
        <div class="rd-navbar-main-outer">
          <div class="rd-navbar-main">
            <!-- RD Navbar Panel-->
            <div class="rd-navbar-panel">
              <!-- RD Navbar Toggle-->
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand">
                <!--Brand-->
                <?= Html::a(Html::img('@web/images/logo-default-392x116.png',['alt' => '.','width'=>'196','height'=>'58','class'=>'brand-logo-dark']), ['index'],['class'=>'brand'])?>
<!-- Html::img('@web/images/logo-default-392x116.png', ['alt' => '.','width'=>'196','height'=>'58','class'=>'brand-logo-light']), -->
              </div>
            </div>
            <div class="rd-navbar-main-element">
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <?php if ($this->title == 'Салон красоты Елена') {
                  echo "<li class='rd-nav-item active'>".Html::a('Главная', ['@web/site/index'],['class' => 'rd-nav-link'])."</li>";
        }
                  else { echo "<li class='rd-nav-item'>".Html::a('Главная', ['@web/site/index'],['class' => 'rd-nav-link'])."</li>";}?>

                  <?php if ($this->title == 'О нас') {
                  echo "<li class='rd-nav-item active'>".Html::a('О нас', ['@web/site/about'], ['class' => 'rd-nav-link'])."</li>";
                }
                  else { echo "<li class='rd-nav-item'>".Html::a('О нас', ['@web/site/about'], ['class' => 'rd-nav-link'])."</li>";}?>

                  <?php if ($this->title == 'Контакты') {
                  echo "<li class='rd-nav-item active'>".Html::a('Контакты', ['@web/site/contacts'], ['class' => 'rd-nav-link'])."</li>";
                }
                  else { echo "<li class='rd-nav-item'>".Html::a('Контакты', ['@web/site/contacts'], ['class' => 'rd-nav-link'])."</li>";}?>

                  <?php if ($this->title == 'Прайс лист') {
                  echo "<li class='rd-nav-item active'>".Html::a('Прайс лист', ['@web/site/prise'], ['class' => 'rd-nav-link'])."</li>";
                  }
                  else { echo "<li class='rd-nav-item'>".Html::a('Прайс лист', ['@web/site/prise'], ['class' => 'rd-nav-link'])."</li>";}?>


                </ul>



              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

<?php echo $content ?>

  <!-- Page Footer-->
  <footer class="section bg-default section-xs-type-1 footer-minimal">
    <div class="container">
      <div class="row row-30 align-items-lg-center justify-content-lg-between">
        <div class="col-lg-2">
          <div class="footer-brand"><?= Html::a(Html::img('@web/images/logo-dark-142x58.png',['alt' => '.','width'=>'142','height'=>'58']),['index'])?>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="footer-nav">
            <ul class="rd-navbar-nav">
              <?php if ($this->title == 'Салон красоты Елена') {
              echo "<li class='rd-nav-item active'>".Html::a('Главная', ['@web/site/index'],['class' => 'rd-nav-link'])."</li>";
    }
              else { echo "<li class='rd-nav-item'>".Html::a('Главная', ['@web/site/index'],['class' => 'rd-nav-link'])."</li>";}?>

              <?php if ($this->title == 'О нас') {
              echo "<li class='rd-nav-item active'>".Html::a('О нас', ['@web/site/about'], ['class' => 'rd-nav-link'])."</li>";
            }
              else { echo "<li class='rd-nav-item'>".Html::a('О нас', ['@web/site/about'], ['class' => 'rd-nav-link'])."</li>";}?>

              <?php if ($this->title == 'Контакты') {
              echo "<li class='rd-nav-item active'>".Html::a('Контакты', ['@web/site/contacts'], ['class' => 'rd-nav-link'])."</li>";
            }
              else { echo "<li class='rd-nav-item'>".Html::a('Контакты', ['@web/site/contacts'], ['class' => 'rd-nav-link'])."</li>";}?>

              <?php if ($this->title == 'Прайс лист') {
              echo "<li class='rd-nav-item active'>".Html::a('Прайс лист', ['@web/site/prise'], ['class' => 'rd-nav-link'])."</li>";
              }
              else { echo "<li class='rd-nav-item'>".Html::a('Прайс лист', ['@web/site/prise'], ['class' => 'rd-nav-link'])."</li>";}?>


            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--<section class="bg-gray-100 section-xs text-center">
    <div class="container">
      <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved</span><span>.&nbsp;</span>Design&nbsp;by&nbsp;<a class="link-underline" href="https://www.templatemonster.com/">TemplateMonster</a></p>
    </div>
  </section> -->
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>

<!-- Javascript-->

<!--  <script src="js/script.js"></script>  -->
<!-- coded by houdini-->

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
