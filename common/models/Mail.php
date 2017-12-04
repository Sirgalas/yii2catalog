<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property integer $id
 * @property string $authority
 * @property string $in_date
 * @property string $out_date
 * @property string $in_info
 * @property string $out_info
 * @property integer $customer_id
 * @property integer $user_id
 */
class Mail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['authority', 'customer_id'], 'required'],
            [['in_date', 'out_date'], 'safe'],
            [['in_info', 'out_info'], 'string'],
            [['customer_id', 'user_id'], 'integer'],
            [['authority'], 'string', 'max' => 510],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'authority' => Yii::t('app','Authority'),
            'in_date' =>Yii::t('app','In Date'),
            'out_date' => Yii::t('app','Out Date'),
            'in_info' => Yii::t('app','In Info'),
            'out_info' => Yii::t('app','Out Info'),
            'customer_id' => Yii::t('app','Customer ID'),
            'user_id' => Yii::t('app','User ID'),
        ];
    }

    public function getCustomer(){
        return $this->hasOne(Customer::className(),['id'=>'customer_id']);
    }
    
    public function getUser(){
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }
}
