<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property integer $account_type
 * @property string $city
 * @property string $country
 * @property string $state
 * @property string $pincode
 * @property string $contact
 *
 * @property UserRole $id0
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'email', 'password', 'account_type', 'city', 'country', 'state', 'pincode', 'contact'], 'required'],
            [['account_type'], 'integer'],
            [['firstname', 'lastname'], 'string', 'max' => 98],
            [['email', 'password'], 'string', 'max' => 390],
            [['city', 'country'], 'string', 'max' => 55],
            [['state'], 'string', 'max' => 50],
            [['pincode'], 'string', 'max' => 7],
            [['contact'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'account_type' => 'Account Type',
            'city' => 'City',
            'country' => 'Country',
            'state' => 'State',
            'pincode' => 'Pincode',
            'contact' => 'Contact',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(UserRole::className(), ['role_id' => 'id']);
    }
}
