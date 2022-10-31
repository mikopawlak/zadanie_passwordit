<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tabela}}`.
 */
class m221031_142024_create_tabela_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tabela}}', [
            'id' => $this->primaryKey(),
            'ts' => $this->timestamp()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tabela}}');
    }
}
