<?php

namespace app\models\forms;

use app\models\Category;
use yii\base\Model;

class ProductForm extends Model
{
    public $title;
    public $desc;
    public $price;
    public $category_id;

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
            [['price'], 'integer'],

            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['category_id'], 'exist', 'targetClass' => Category::class, 'targetAttribute' => 'id'],
        ];
    }

    public function attributesLabels(): array
    {
        return [
            'title' => 'Title',
            'desc' => 'Desc',
            'price' => 'Price',
        ];
    }
}
