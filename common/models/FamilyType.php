<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "family_type".
 *
 * @property integer $id
 * @property string $type
 * @property string $comment
 * @property string $code
 * @property integer $type_customer
 */
class FamilyType extends \yii\db\ActiveRecord
{
    const CHILD=0;
    const ADULT=1;
    public static $type=[
        self::CHILD=>'Ребенок',
        self::ADULT=>'Взролслый'
    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'family_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type','type_customer'], 'required'],
            [['comment'], 'string'],
            [['type'], 'string', 'max' => 510],
            [['code'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => Yii::t('app','Type'),
            'comment' => Yii::t('app','Comment'),
            'code' => Yii::t('app','Code'),
        ];
    }
}
