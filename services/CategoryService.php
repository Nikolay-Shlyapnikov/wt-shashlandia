<?php

namespace app\services;

use app\models\Category;

class CategoryService
{
    public function create(array $data): bool
    {
        $category = new Category();
        $category->attributes = $data;

        return $category->save();
    }
}
