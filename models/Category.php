<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category"
 * 
 * @property int $id
 * @property string $created_at
 * @property string $title
 * @property string $desc
 * @property string $modifier
 * @property string $wrapper
 */
class Category extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%category}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'trim'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 128],
            
            [['desc'], 'trim'],
            [['desc'], 'required'],
            [['desc'], 'string'],

            [['modifier'], 'trim'],
            [['modifier'], 'required'],
            [['modifier'], 'string', 'max' => 128],

            [['wrapper'], 'trim'],
            [['wrapper'], 'required'],
            [['wrapper'], 'string', 'max' => 128],
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getProducts(): ActiveQuery
    {
        return $this->hasMany(Product::class, ['category_id' => 'id']);
    }
}