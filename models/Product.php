<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product"
 * 
 * @property int $id
 * @property string $created_at
 * @property int $category_id
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
            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['category_id'], 'exist', 'targetClass' => Category::class, 'targetAttribute' => 'id'],
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getCategory(): ActiveQuery
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}