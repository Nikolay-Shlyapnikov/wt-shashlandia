<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m230123_000004_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey()->unsigned(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'title' => $this->string(128)->notNull(),
            'desc' => $this->string(128)->notNull(),
            'price' => $this->integer()->notNull(),
            'subcategory_id' => $this->integer()->unsigned()->notNull(),
        ]);

        // creates index for column 'category_id'
        $this->createIndex(
            'idx-product-subcategory_id',
            'product',
            'subcategory_id'
        );

        // creates foreign key for table 'category'
        $this->addForeignKey(
            '{{%fk-product-subcategory_id}}',
            '{{%product}}',
            'subcategory_id',
            '{{%subcategory}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
