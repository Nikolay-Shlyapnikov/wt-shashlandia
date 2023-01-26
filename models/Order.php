<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order"
 * 
 * @property int $id
 * @property string $created_at
 * @property string $phone
 * @property string $frist_name
 * @property string $last_name
 * @property string $address
 * @property string $user_id
 * 
 * @property OrderProduct[] $products
 */
class Order extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%order}}';
    }

    public function rules(): array
    {
        return [
            [['phone'], 'trim'],
            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 128],

            [['first_name'], 'trim'],
            [['first_name'], 'required'],
            [['first_name'], 'string', 'max' => 128],

            [['last_name'], 'trim'],
            [['last_name'], 'required'],
            [['last_name'], 'string', 'max' => 128],

            [['address'], 'trim'],
            [['address'], 'required'],
            [['address'], 'string', 'max' => 128],

            [['user_id'], 'trim'],
            [['user_id'], 'integer'],
            [['user_id'], 'exist', 'targetClass' => User::class, 'targetAttribute' => 'id'],
        ];
    }

    public function fields()
    {
        return [
            'id',
            'created_at',
            'phone',
            'first_name',
            'last_name',
            'address',
            'products',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getUser(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getProducts(): ActiveQuery
    {
        return $this->hasMany(OrderProduct::class, ['order_id' => 'id']);
    }
}
