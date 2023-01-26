<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product"
 * 
 * @property int $id
 * @property string $created_at
 * @property string $title
 * @property string $desc
 * @property int $price
 * @property int $subcategory_id
 * 
 * @property Category $category
 */
class Product extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%product}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'trim'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 128],

            [['desc'], 'trim'],
            [['desc'], 'required'],
            [['desc'], 'string', 'max' => 128],

            [['price'], 'required'],
            [['price'], 'integer', 'min' => 1],

            [['subcategory_id'], 'required'],
            [['subcategory_id'], 'integer'],
            [['subcategory_id'], 'exist', 'targetClass' => Subcategory::class, 'targetAttribute' => 'id'],
        ];
    }

    public function fields()
    {
        return [
            'id',
            'created_at',
            'title',
            'desc',
            'price',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getSubcategory(): ActiveQuery
    {
        return $this->hasOne(Subcategory::class, ['id' => 'subcategory_id']);
    }
}