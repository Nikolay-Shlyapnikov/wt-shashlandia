<?php

namespace app\services;

use app\models\Subcategory;

class SubcategoryService
{
    public function create(array $data): bool
    {
        $subcategory = new Subcategory();
        $subcategory->attributes = $data;

        return $subcategory->save();
    }
}
