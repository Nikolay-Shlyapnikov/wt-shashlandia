<?php

namespace app\services;

use app\models\User;

class UserService
{
    public function create(array $user): bool
    {
        $user_entity = new User();
        $user_entity->attributes = $user;

        return $user_entity->save();
    }
}
