<?php

$this->title = 'Прайс лист';
use yii\helpers\Url;
use yii\helpers\Html;

//print_r($prise);


?>



<div class="clearfix"></div>

<section class="section-page-title" style="background-image: url(<?php echo Url::to('@web/images/page-title-3-1920x305.jpg') ?>); background-size: cover;">
  <div class="container">
    <h1 class="page-title">Прайс</h1>
  </div>
</section>
<section class="breadcrumbs-custom">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><?php echo Html::a('Главная', ['@web/site/index']) ?></li>
      <li class="active">Прайс</li>
    </ul>
  </div>
</section>


<div class="container table_position col-sm-12	col-md-12	col-lg-8	col-xl-8">
    <div id="accordion">
<?php
      foreach ($type as $key => $value) {
          $id = $value['id'];
          echo " <div class='card'>
                          <div class='card-header' id='headingOne'>
                              <h5 class='mb-0'>
                                <button class='btn-fil  zagolovok_price btn-link' data-toggle='collapse' data-target='#".$id."' aria-expanded='true' aria-controls='collapseOne'>".$value['name']."</button>
                                  </h5>
                            </div> ";
          $uslugi = array();
          echo "<div id='".$id."' class='collapse' aria-labelledby='".$id."' data-parent='#accordion'>
              <div class='card-body'>";
                              foreach ($prise as $key => $value) {
                                    if ($value['type'] == $id){
                                      $uslugi[] = $value;
                                    }};
                                    // сортировка по полю name
                                    $name = array_column($uslugi, 'name');
                                    array_multisort($name, SORT_ASC, $uslugi);
                    echo"<div class=' container col-sm-12	col-md-12	col-lg-12	col-xl-12'>
                    <div class='row'>";
                                      foreach ($uslugi as $key => $value) {
                                        echo "
                                        <div class='col-9 col-sm-9	col-md-9	col-lg-9	col-xl-9'>".$value['name']."</div>
                                        <div class='col-3 col-sm-3	col-md-3	col-lg-3	col-xl-3 price_color'>".$value['prise']."&#8381</div>

                                                  ";};
                                                  echo "</div></div>";
                                                  echo "</div></div></div>";
                                      };

  ?>
    </div>
</div>

<div class="clearfix"></div>
