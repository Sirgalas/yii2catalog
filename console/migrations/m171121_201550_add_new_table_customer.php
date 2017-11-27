<?php

use yii\db\Migration;

/**
 * Class m171121_201550_add_new_table_customer
 */
class m171121_201550_add_new_table_customer extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('customer',[
            'id'=>$this->primaryKey(),
            'name'=>$this->string(255)->notNull(),
            'last_name'=>$this->string(255)->notNull(),
            'family_name'=>$this->string(255),
            'date_of_birth'=>$this->dateTime(),
            'town'=>$this->string(255),
            'street'=>$this->string(255)->notNull(),
            'home'=>$this->integer()->notNull(),
            'apartment'=>$this->integer(),
            'created_at'=>$this->dateTime()->defaultValue('CURRENT_TIMESTAMP'),
            'deleted_at'=>$this->dateTime(),
            'phone'=>$this->string(255),
            'id_parent_family'=>$this->integer(),
            'type_family_member'=>$this->integer(),
            'type_child'=>$this->integer(),
            'family_income'=>$this->integer(),
            'char_of_housing'=>$this->text(),
            'accompanying'=>$this->integer(),
            'info_family'=>$this->integer(),
            'user_id'=>$this->integer(),
            'snils'=>$this->string(25),
            'customer_doc'=>$this->integer(),
            'work'=>$this->string(100),
            'out_shcool'=>$this->string(510)
        ]);
        $this->createTable('type_services',[
            'id'=>$this->primaryKey(),
            'code'=>$this->string(50),
            'content'=>$this->string(510),
            'status'=>$this->integer(3)
        ]);
        $this->createTable('category_family',[
            'id'=>$this->primaryKey(),
            'id_customer'=>$this->integer()->notNull(),
            'content'=>$this->string(),
            'description'=>$this->string(510)
        ]);
        $this->createTable('services',[
            'id'=>$this->primaryKey(),
            'id_customer'=>$this->integer()->notNull(),
            'id_type_services'=>$this->integer()->notNull(),
            'id_user_responsible'=>$this->integer()->notNull(),
            'id_user_spec'=>$this->integer(),
            'content'=>$this->text(),
            'result'=>$this->text(),
            'created_at'=>$this->dateTime(),
            'type_user'=>$this->integer()->notNull(),
            'type_services'=>$this->string(255)
        ]);
        $this->createTable('orphan',[
            'id'=>$this->primaryKey(),
            'home'=>$this->integer(2)->defaultValue(1),
            'availability'=>$this->integer(2)->defaultValue(1),
            'check_in'=>$this->boolean()->defaultValue(false),
            'housing_account'=>$this->boolean()->defaultValue(true),
            'working'=>$this->integer(4)->defaultValue(3)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171121_201550_add_new_table_customer cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171121_201550_add_new_table_customer cannot be reverted.\n";

        return false;
    }
    */
}
