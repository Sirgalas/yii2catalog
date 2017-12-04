<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $id
 * @property integer $id_customer
 * @property integer $id_type_services
 * @property integer $id_user_responsible
 * @property integer $id_user_spec
 * @property string $content
 * @property string $result
 * @property string $created_at
 * @property integer $type_user
 * @property string $type_services
 */
class Services extends \yii\db\ActiveRecord
{
    const SEVICES_ONE=0;
    const SERVICES_TRACKING=1;
    const SERVICES_SUPPORT=2;

    public static $services_status = [
        self::SEVICES_ONE => 'Разовая',
        self::SERVICES_TRACKING => 'Сопровождение',
        self::SERVICES_SUPPORT => 'Содействие',

    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_customer', 'id_type_services', 'id_user_responsible', 'type_user'], 'required'],
            [['id_customer', 'id_type_services', 'id_user_responsible', 'id_user_spec', 'type_user'], 'integer'],
            [['content', 'result'], 'string'],
            [['created_at'], 'safe'],
            [['type_services'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_customer' => Yii::t('app','Id Customer'),
            'id_type_services' => Yii::t('app','Id Type Services'),
            'id_user_responsible' => Yii::t('app','Id User Responsible'),
            'id_user_spec' => Yii::t('app','Id User Spec'),
            'content' => Yii::t('app','Content'),
            'result' => Yii::t('app','Result'),
            'created_at' => Yii::t('app','Created At'),
            'type_user' => Yii::t('app','Type User'),
            'type_services' => Yii::t('app','Type Services'),
        ];
    }

    public function getCustomer(){
        return $this->hasOne(Customer::className(),['id'=>'id_customer']);
    }
    public function getSpec(){
        return $this->hasOne(User::className(),['id'=>'id_user_spec']);
    }
    public function getUserService(){
        return$this->hasOne(User::className(),['id'=>'id_user_responsible']);
    }
    public function getServicesType(){
        return $this->hasOne(Services::className(),['id'=>'id_type_services']);
    }
}
