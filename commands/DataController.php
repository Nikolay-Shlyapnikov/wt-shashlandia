<?php

namespace app\commands;

use app\models\Category;
use app\models\User;
use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
use yii\helpers\Json;

class DataController extends Controller
{

    public function actionImport()
    {
        $categories = [
            [
                'title' => 'Мясо',
                'desc' => 'Для всех вкусовых предпочтений',
                'modifier' => 'meat',
                'wrapper' => Json::encode(['top' => true, 'bottom' => false]),
            ],
            [
                'title' => 'Овощи',
                'desc' => 'Всегда самые свежие',
                'modifier' => 'vegetables',
                'wrapper' => Json::encode(['top' => false, 'bottom' => true]),
            ],
            [
                'title' => 'Все для шашлыка',
                'desc' => 'Мангалы, уголь, вода, разжигательная смесь',                
                'modifier' => 'kebab',
                'wrapper' => Json::encode(['top' => true, 'bottom' => true]),
            ],
            [
                'title' => 'Услуги',
                'desc' => 'Профессиональный мангальщик',
                'modifier' => 'services',
                'wrapper' => Json::encode(['top' => true, 'bottom' => true]),
            ],
        ];

        $user = new User();
        $user->email = 'test@example.com';
        $user->password_hash = Yii::$app->security->generatePasswordHash('123');
        $user->is_admin = true;
        var_dump($user->save()) . "\n";

        foreach ($categories as $category) {
            $category_entity = new Category();

            $category_entity->title = $category['title'];
            $category_entity->desc = $category['desc'];
            $category_entity->modifier = $category['modifier'];
            $category_entity->wrapper = $category['wrapper'];

            var_dump($category_entity->save()) . "\n";
        }

        return ExitCode::OK;
    }
}
