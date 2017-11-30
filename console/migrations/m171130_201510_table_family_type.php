<?php

use yii\db\Migration;

/**
 * Class m171130_201510_table_family_type
 */
class m171130_201510_table_family_type extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('family_type',[
            'id'=>$this->primaryKey(),
            'type'=>$this->string(510)->notNull(),
            'comment'=>$this->text(),
            'code'=>$this->string(255)
        ]);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('family_type');
    }


}
