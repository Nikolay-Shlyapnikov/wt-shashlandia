<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order"
 * 
 * @property int $id
 * @property string $created_at
 * @property string $key
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
            [['key'], 'trim'],
            [['key'], 'required'],
            [['key'], 'string', 'max' => 128],
        ];
    }
}