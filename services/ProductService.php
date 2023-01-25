<?php

namespace app\services;

use app\models\Product;
use app\models\forms\ProductForm;

class ProductService
{
    /**
     * @param array|ProductForm $model
     * @return bool
     */
    public function create($model): bool
    {
        $product = new Product();

        $model instanceof ProductForm
            ? $product->attributes = $model->attributes
            : $product->attributes = $model;

        return $product->save();
    }
}
