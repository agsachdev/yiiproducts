<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

return [
    'rules' => [
        [
            '__class' => \yii\rest\UrlRule::class,
            'pluralize' => false,
            'controller' => [
                'v1/products/admin' => 'v1/products/product'
            ],
            'tokens' => [
                '{id}' => '<id:\\w[\\w,]*>',
            ],
        ],
    ]
];