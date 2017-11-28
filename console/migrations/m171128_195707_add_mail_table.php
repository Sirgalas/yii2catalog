<?php

use yii\db\Migration;

/**
 * Class m171128_195707_add_mail_table
 */
class m171128_195707_add_mail_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%mail}}',[
            'id'=>$this->primaryKey(),
            'authority'=>$this->string(510)->notNull(),
            'in_date'=>$this->dateTime(),
            'out_date'=>$this->dateTime(),
            'in_info'=>$this->text(),
            'out_info'=>$this->text(),
            'customer_id'=>$this->integer()->notNull(),
            'user_id'=>$this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('mail');
    }


}
