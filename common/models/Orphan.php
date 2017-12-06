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
 * @property integer $user_id
 * @property integer $id_customer
 */
class Orphan extends \yii\db\ActiveRecord
{

    const HOME_HAVE=1;
    const HOME_NOT_HAVE=0;
    const SUITABLE=1;
    const NOT_SUITABLE=0;
    const CHECK_IN_YES=1;
    const CHECK_IN_NO=0;
    const HOUSING_ACCOUNT_YES=1;
    const HOUSING_ACCOUNT_NO=0;
    const WORKING_YES=1;
    const WORKING_NO=0;
    const WORKING_STUDY_COLLEGE=2;
    const WORKING_STUDY_UNIVERSITY=3;
    const WORKING_NEED_STUDY=4;


    public static $home_status = [
        self::HOME_HAVE => 'В собственности',
        self::HOME_NOT_HAVE => 'На праве пользования',
    ];
    public static $suitable_status = [
        self::SUITABLE => 'Пригодное',
        self::NOT_SUITABLE => 'Не пригодное',
    ];
    public static $check_in = [
        self::CHECK_IN_YES => 'Стоит',
        self::CHECK_IN_NO => 'Нуждается в постановке',
    ];
    public static $housing_account_status = [
        self::HOUSING_ACCOUNT_YES => 'Пригодное',
        self::HOUSING_ACCOUNT_NO => 'Не пригодное',
    ];
    public static $Working_status = [
        self::WORKING_YES => 'Трудоустроен',
        self::WORKING_NO => 'Нуждается в трудоустройстве',
        self::WORKING_STUDY_COLLEGE => 'Получает профессиональное образование',
        self::WORKING_STUDY_UNIVERSITY => 'Получает высшее образование',
        self::WORKING_NEED_STUDY => 'Нуждается в образовании',
    ];
    /**
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
            [['home', 'availability', 'check_in', 'housing_account', 'working', 'user_id', 'id_customer'], 'integer'],
            [['user_id', 'id_customer'], 'required'],
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
            'user_id' => 'User ID',
            'id_customer' => 'Id Customer',
        ];
    }
}
