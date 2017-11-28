<?php

use yii\db\Migration;

/**
 * Class m171128_203439_customer_id_column_from_Orphan
 */
class m171128_203439_customer_id_column_from_Orphan extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('{{%orphan}}','user_id',$this->integer()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('{{%orphan}}','user_id');
    }


}
