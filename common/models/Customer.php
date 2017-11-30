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
            'name' => Yii::t('app','Name'),
            'last_name' => Yii::t('app','Last Name'),
            'family_name' => Yii::t('app','Family Name'),
            'date_of_birth' => Yii::t('app','Date Of Birth'),
            'town' => Yii::t('app','Town'),
            'street' => Yii::t('app','Street'),
            'home' => Yii::t('app','Home'),
            'apartment' => Yii::t('app','Apartment'),
            'created_at' => Yii::t('app','Created At'),
            'deleted_at' => Yii::t('app','Deleted At'),
            'phone' => Yii::t('app','Phone'),
            'id_parent_family' => Yii::t('app','Id Parent Family'),
            'type_family_member' => Yii::t('app','Type Family Member'),
            'type_child' => Yii::t('app','Type Child'),
            'family_income' => Yii::t('app','Family Income'),
            'char_of_housing' => Yii::t('app','Char Of Housing'),
            'accompanying' => Yii::t('app','Accompanying'),
            'info_family' => Yii::t('app','Info Family'),
            'user_id' => Yii::t('app','User ID'),
            'snils' => Yii::t('app','Snils'),
            'customer_doc' => Yii::t('app','Customer Doc'),
            'work' => Yii::t('app','Work'),
            'out_shcool' => Yii::t('app','Out Shcool'),
        ];
    }
}
