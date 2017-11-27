<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $family_name
 * @property string $date_of_birth
 * @property string $town
 * @property string $street
 * @property integer $home
 * @property integer $apartment
 * @property string $created_at
 * @property string $deleted_at
 * @property string $phone
 * @property integer $id_parent_family
 * @property integer $type_family_member
 * @property integer $type_child
 * @property integer $family_income
 * @property string $char_of_housing
 * @property integer $accompanying
 * @property integer $info_family
 * @property integer $user_id
 * @property string $snils
 * @property integer $customer_doc
 * @property string $work
 * @property string $out_shcool
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'street', 'home'], 'required'],
            [['date_of_birth', 'created_at', 'deleted_at'], 'safe'],
            [['home', 'apartment', 'id_parent_family', 'type_family_member', 'type_child', 'family_income', 'accompanying', 'info_family', 'user_id', 'customer_doc'], 'integer'],
            [['char_of_housing'], 'string'],
            [['name', 'last_name', 'family_name', 'town', 'street', 'phone'], 'string', 'max' => 255],
            [['snils'], 'string', 'max' => 25],
            [['work'], 'string', 'max' => 100],
            [['out_shcool'], 'string', 'max' => 510],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'last_name' => 'Last Name',
            'family_name' => 'Family Name',
            'date_of_birth' => 'Date Of Birth',
            'town' => 'Town',
            'street' => 'Street',
            'home' => 'Home',
            'apartment' => 'Apartment',
            'created_at' => 'Created At',
            'deleted_at' => 'Deleted At',
            'phone' => 'Phone',
            'id_parent_family' => 'Id Parent Family',
            'type_family_member' => 'Type Family Member',
            'type_child' => 'Type Child',
            'family_income' => 'Family Income',
            'char_of_housing' => 'Char Of Housing',
            'accompanying' => 'Accompanying',
            'info_family' => 'Info Family',
            'user_id' => 'User ID',
            'snils' => 'Snils',
            'customer_doc' => 'Customer Doc',
            'work' => 'Work',
            'out_shcool' => 'Out Shcool',
        ];
    }
}
