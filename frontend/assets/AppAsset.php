<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
"css/bootstrap.css",
"css/fonts.css",
"css/style.css",
    ];
    public $js = [
        //   'js/core.min.js',
           'js/script.js',

    ];
    public $depends = [
      'yii\web\JqueryAsset',
  //    'yii\web\YiiAsset',
  //   'yii\bootstrap\BootstrapAsset',

    ];
}
