<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */


namespace powerkernel\yiiproducts\controllers;

use yii\filters\AccessControl;

/**
 * Class ProductsController
 */
class ProductsController extends \powerkernel\yiicommon\controllers\ActiveController
{
    public $modelClass = 'powerkernel\yiiproducts\models\productsDb';

}
