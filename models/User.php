<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user"
 * 
 * @property int $id
 * @property string $created_at
 * @property string $email
 * @property string $password_hash
 * @property bool $is_admin
 */
class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName(): string
    {
        return '{{%user}}';
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        // return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        // return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        // return $this->getAuthKey() === $authKey;
    }

    public function validatePassword(string $password): bool
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function rules(): array
    {
        return [
            [['email'], 'trim'],
            [['email'], 'required'],
            [['email'], 'string', 'max' => 128],
            [['email'], 'email'],
            [['email'], 'unique'],

            [['password_hash'], 'trim'],
            [['password_hash'], 'required'],
            [['password_hash'], 'string', 'max' => 128],

            [['is_admin'], 'required'],
            [['is_admin'], 'boolean'],
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getProducts(): ActiveQuery
    {
        return $this->hasMany(Product::class, ['category_id' => 'id']);
    }
}