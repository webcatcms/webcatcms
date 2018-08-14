<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__), 
    'aliases' => [
          //  '@widgets' => dirname(dirname(__DIR__)) . '/widgets',
        ],
    'language' => 'ua-UA',
    'controllerNamespace' => 'backend\controllers',
   // 'catchAll' => ['site/debug'],
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
         'i18n' => [
        'translations' => [
            'app*' => [
                'class' => 'yii\i18n\PhpMessageSource',
            ],
        ],
    ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=webcatcms_db',
            'username' => 'webcat',
            'password' => 'webcat',
            'charset' => 'utf8',
            'tablePrefix' => 'wc_',
        ],
        'request' => [
            'csrfParam' => '_csrf-service',
        ],
        'user' => [
            'identityClass' => 'backend\models\User',
            'loginUrl' => ['site/login'],
            'enableAutoLogin' => false,
            'identityCookie' => ['name' => '_identity-service', 'httpOnly' => true],
        ],
         'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-service',
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
            //'enableStrictParsing' => false,
           'rules' => [
               //'<alias:\w+>' => 'site/<alias>',
            ],
        ],
        
    ],
    'params' => $params,
];
