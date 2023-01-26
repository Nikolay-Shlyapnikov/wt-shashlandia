<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m230123_000005_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey()->unsigned(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'phone' => $this->string(128)->notNull(),
            'first_name' => $this->string(128)->notNull(),
            'last_name' => $this->string(128)->notNull(),
            'address' => $this->string(128)->notNull(),
            'user_id' => $this->integer()->unsigned()->notNull(),
        ]);

        // creates index for column 'user_id'
        $this->createIndex(
            'idx-order-user_id',
            'order',
            'user_id'
        );

        // creates foreign key for table 'user'
        $this->addForeignKey(
            '{{%fk-order-user_id}}',
            '{{%order}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
