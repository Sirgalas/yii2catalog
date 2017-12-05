<?php

use yii\db\Migration;

/**
 * Class m171205_183522_create_table_deputy
 */
class m171205_183522_create_table_deputy extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('deputy',[
            'id'=>$this->primaryKey(),
            'id_deputy'=>$this->integer(),
            'id_user'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'update_at'=>$this->dateTime()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->dropTable('deputy');
    }


}
