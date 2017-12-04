<?php

use yii\db\Migration;

/**
 * Class m171130_203257_add_column_type_family_id
 */
class m171130_203257_add_column_type_family_id extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('customer','family_type_id',$this->integer()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->dropColumn('customer','family_type_id');
    }
    
}
