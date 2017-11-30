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
            'id_customer' => 'Id Customer',
            'id_type_services' => 'Id Type Services',
            'id_user_responsible' => 'Id User Responsible',
            'id_user_spec' => 'Id User Spec',
            'content' => 'Content',
            'result' => 'Result',
            'created_at' => 'Created At',
            'type_user' => 'Type User',
            'type_services' => 'Type Services',
        ];
    }
}
