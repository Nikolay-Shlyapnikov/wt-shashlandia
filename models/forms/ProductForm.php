<?php

namespace app\models\forms;

use app\models\Subcategory;
use yii\base\Model;

class ProductForm extends Model
{
    public $title;
    public $desc;
    public $price;
    public $subcategory_id;

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

            [['subcategory_id'], 'required'],
            [['subcategory_id'], 'integer'],
            [['subcategory_id'], 'exist', 'targetClass' => Subategory::class, 'targetAttribute' => 'id'],
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

    public function clean(): void
    {
        foreach ($this->attributes() as $attribute) {
            $this->{$attribute} = '';
        }
    }
}
