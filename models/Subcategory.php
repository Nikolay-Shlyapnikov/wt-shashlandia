<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "subcategory"
 * 
 * @property int $id
 * @property string $title
 * @property string $modifier
 * @property int $category_id
 * 
 * @property Category $category
 * @property Product[] $products
 */
class Subcategory extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%subcategory}}';
    }

    public function rules(): array
    {
        return [
            [['title'], 'trim'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 128],

            [['modifier'], 'trim'],
            [['modifier'], 'required'],
            [['modifier'], 'string', 'max' => 128],

            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['category_id'], 'exist', 'targetClass' => Category::class, 'targetAttribute' => 'id'],
        ];
    }

    public function fields()
    {
        return [
            'id',
            'title',
            'modifier',
            'products',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getCategory(): ActiveQuery
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getProducts(): ActiveQuery
    {
        return $this->hasMany(Product::class, ['subcategory_id' => 'id']);
    }
}
