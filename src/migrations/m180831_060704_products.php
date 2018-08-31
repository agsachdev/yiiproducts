<?php

class m180831_060704_products extends \yii\mongodb\Migration
{
    public function up()
    {
        $col = Yii::$app->mongodb->getCollection('products_db');
        $col->createIndexes([
            [
                'key' => ['slug'],
                'unique' => true
            ]
        ]);
    }

    public function down()
    {
        echo "m180831_060704_products cannot be reverted.\n";

        return false;
    }
}
