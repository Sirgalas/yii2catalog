<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'modelMap' => [
                'User' => 'common\models\User',
            ],
            'adminPermission' => 'role, permission',
            'admins'=>['Sergalas'],
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
    ],
];
