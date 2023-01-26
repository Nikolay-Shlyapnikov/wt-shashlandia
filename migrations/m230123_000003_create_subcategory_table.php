<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m230123_000003_create_subcategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subcategory}}', [
            'id' => $this->primaryKey()->unsigned(),
            'title' => $this->string(128)->notNull(),
            'modifier' => $this->string()->notNull(),
            'category_id' => $this->integer()->unsigned()->notNull(),
        ]);

        // creates index for column 'category_id'
        $this->createIndex(
            'idx-subcategory-category_id',
            'subcategory',
            'category_id'
        );

        // creates foreign key for table 'category'
        $this->addForeignKey(
            '{{%fk-subcategory-category_id}}',
            '{{%subcategory}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subcategory}}');
    }
}
