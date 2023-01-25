<?php

namespace app\services;

use app\models\Category;

class CategoryService
{
    public function create(array $category): bool
    {
        $category_entity = new Category();
        $category_entity->attributes = $category;

        return $category_entity->save();
    }
}
