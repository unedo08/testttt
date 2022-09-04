<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_m".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password
 * @property string $accessToken
 * @property int $roles
 */
class UserM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password', 'accessToken'], 'required'],
            [['username', 'password', 'accessToken'], 'string'],
            [['roles'], 'default', 'value' => null],
            [['roles'], 'integer'],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password' => 'Password',
            'accessToken' => 'Access Token',
            'roles' => 'Roles',
        ];
    }
}
