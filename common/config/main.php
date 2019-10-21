<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@api' => dirname(dirname(__DIR__)) . '/api',
        '@services' => dirname(dirname(__DIR__)) . '/services',
    ],
    'controllerMap' => [
        'services' => '@services',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'caller' => [
            'class' => '/services/caller',//TODO for test
        ],
    ],
     'container' => [
        'definitions' => [
             \services\caller\interfaces\CallerInterface::class => [
               'class' => \services\caller\Caller::class,
//                [\yii\di\Instance::of('mongodb')],
            ],
        ],
        'singletons' => [
        ],
    ],
];
