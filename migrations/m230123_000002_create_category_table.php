<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m230123_000002_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey()->unsigned(),
            'title' => $this->string(128)->notNull(),
            'desc' => $this->text()->notNull(),
            'modifier' => $this->string()->notNull(),
            'wrapper' => $this->string(128)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
