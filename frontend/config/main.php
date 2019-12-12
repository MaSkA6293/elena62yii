<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [





  'language' => 'ru',
    'id' => 'app-frontend',
    'layout' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [

      'assetManager' => [
          'bundles' => [
              'yii\web\JqueryAsset' => [
                  'sourcePath' => null,
                  'js' => ['js/core.min.js'] // тут путь до Вашего экземпляра jquery
              ],
          ],
      ],




        'request' => [
            'csrfParam' => '_csrf-frontend',

	'baseUrl' => '',




        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        'About' => 'site/about',
        'Contacts' => 'site/contacts',
        'Prise' => 'site/prise',
    //    '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
    //    '<action>/' => '<controller>/<action>',
    ],
],

        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
