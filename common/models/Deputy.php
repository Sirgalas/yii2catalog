<?php

namespace common\models;

use Behat\Gherkin\Loader\YamlFileLoader;
use Yii;

/**
 * This is the model class for table "deputy".
 *
 * @property integer $id
 * @property integer $id_deputy
 * @property integer $id_user
 * @property string $created_at
 * @property string $update_at
 */
class Deputy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'deputy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_deputy', 'id_user'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_deputy' => Yii::t('app','Id Deputy'),
            'id_user' => Yii::t('app','Id User'),
            'created_at' => Yii::t('app','Created At'),
            'update_at' => Yii::t('app','Update At'),
        ];
    }

    public function getDeputy(){
        return $this->hasOne(User::className(),['id'=>'id_deputy']);
    }
    public function getUser(){
        return $this->hasOne(User::className(),['id'=>'id_user']);
    }
}
