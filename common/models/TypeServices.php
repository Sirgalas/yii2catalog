<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type_services".
 *
 * @property integer $id
 * @property string $code
 * @property string $content
 * @property integer $status
 */
class TypeServices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['code'], 'string', 'max' => 50],
            [['content'], 'string', 'max' => 510],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => Yii::t('app','Code'),
            'content' => Yii::t('app','Content'),
            'status' => Yii::t('app','Status'),
        ];
    }
}
