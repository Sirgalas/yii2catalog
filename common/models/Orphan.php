<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orphan".
 *
 * @property integer $id
 * @property integer $home
 * @property integer $availability
 * @property integer $check_in
 * @property integer $housing_account
 * @property integer $working
 */
class Orphan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orphan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['home', 'availability', 'check_in', 'housing_account', 'working'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'home' => 'Home',
            'availability' => 'Availability',
            'check_in' => 'Check In',
            'housing_account' => 'Housing Account',
            'working' => 'Working',
        ];
    }
}
