<?php

namespace powerkernel\yiiproducts\models;

use Yii;
use powerkernel\yiicommon\behaviors\UTCDateTimeBehavior;



/**
 * This is the model class for collection "products_db".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $product_name
 * @property mixed $product_description
 * @property mixed $product_price
 * @property mixed $product_image_url
 * @property mixed $product_status
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $updated_by
 * @property mixed $created_by
 */
class ProductsDb extends \yii\mongodb\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['laundry', 'products_db'];
    }

    /**
     * {@inheritdoc}
     */
    public function attributes()
    {
        return [
            '_id',
            'product_name',
            'product_description',
            'product_price',
            'product_image_url',
            'product_status',
            'created_at',
            'updated_at',
            'updated_by',
            'created_by',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_description', 'product_price', 'product_image_url', 'product_status', 'created_at', 'updated_at', 'updated_by', 'created_by'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'ID'),
            'product_name' => Yii::t('app', 'Product Name'),
            'product_description' => Yii::t('app', 'Product Description'),
            'product_price' => Yii::t('app', 'Product Price'),
            'product_image_url' => Yii::t('app', 'Product Image Url'),
            'product_status' => Yii::t('app', 'Product Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'created_by' => Yii::t('app', 'Created By'),
        ];
    }
}
