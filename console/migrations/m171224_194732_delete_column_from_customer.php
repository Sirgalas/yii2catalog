<?php

use yii\db\Migration;

/**
 * Class m171224_194732_delete_column_from_customer
 */
class m171224_194732_delete_column_from_customer extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('customer','delete',$this->boolean()->defaultValue(false));
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->dropColumn('customer','delete');
    }
    
}
