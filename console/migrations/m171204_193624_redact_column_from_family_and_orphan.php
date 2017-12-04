<?php

use yii\db\Migration;

/**
 * Class m171204_193624_redact_column_from_family_and_orphan
 */
class m171204_193624_redact_column_from_family_and_orphan extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumn('{{%orphan}}','id_customer',$this->integer()->notNull());
        $this->addColumn('{{%family_type}}','type_customer',$this->integer()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropColumn('{{%orphan}}','id_customer');
        $this->dropColumn('{{%family_type}}','type_customer');
    }
}
