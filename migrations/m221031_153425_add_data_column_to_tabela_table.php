<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tabela}}`.
 */
class m221031_153425_add_data_column_to_tabela_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%tabela}}', 'data', $this->string(64)->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%tabela}}', 'data');
    }
}
