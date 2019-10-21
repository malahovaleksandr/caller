<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@api' => dirname(dirname(__DIR__)) . '/api',
        '@services' => dirname(dirname(__DIR__)) . '/services',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
         'caller' => [
            'class' => '@services/',
        ],
    ],
     'container' => [
        'definitions' => [
        ],
        'singletons' => [
        ],
    ],
];
