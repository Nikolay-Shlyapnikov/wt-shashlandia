<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order_product"
 * 
 * @property int $id
 * @property int $order_id
 * @property int $category_id
 * @property int $product_count
 */
class OrderProduct extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%order_product}}';
    }

    public function rules(): array
    {
        return [
            [['order_id'], 'required'],
            [['order_id'], 'integer'],
            [['order_id'], 'exist', 'targetClass' => Order::class, 'targetAttribute' => 'id'],

            [['product_id'], 'required'],
            [['product_id'], 'integer'],
            [['product_id'], 'exist', 'targetClass' => Product::class, 'targetAttribute' => 'id'],

            [['product_count'], 'required'],
            [['product_count'], 'integer', 'min' => 1],
        ];
    }

    public function fields()
    {
        return [
            'id',
            'order_id',
            'product_id',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getOrder(): ActiveQuery
    {
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getProduct(): ActiveQuery
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }
}
