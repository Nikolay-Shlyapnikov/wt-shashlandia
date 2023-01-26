<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_product}}`.
 */
class m230123_000006_create_order_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_product}}', [
            'id' => $this->primaryKey()->unsigned(),
            'order_id' => $this->integer()->unsigned()->notNull(),
            'product_id' => $this->integer()->unsigned()->notNull(),
            'product_count' => $this->integer()->unsigned()->notNull()->defaultValue(1),
        ]);

        // creates index for column 'order_id'
        $this->createIndex(
            'idx-order_product-order_id',
            'order_product',
            'order_id'
        );

        // creates foreign key for table 'order'
        $this->addForeignKey(
            '{{%fk-order_product-order_id}}',
            '{{%order_product}}',
            'order_id',
            '{{%order}}',
            'id',
            'CASCADE'
        );

        // creates index for column 'product_id'
        $this->createIndex(
            'idx-order_product-product_id',
            'order_product',
            'product_id'
        );

        // creates foreign key for table 'product'
        $this->addForeignKey(
            '{{%fk-order_product-product_id}}',
            '{{%order_product}}',
            'product_id',
            '{{%product}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_product}}');
    }
}
