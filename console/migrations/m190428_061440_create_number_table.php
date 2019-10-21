<?php

use yii\db\Migration;

/**
 * Class m190428_061440_CreateNumberTable
 */
class m190428_061440_create_number_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('number', [
            'id' => 'MEDIUMINT NOT NULL',
        ]);
        $this->addPrimaryKey('pk_code', 'number', 'id');

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('number');

        return true;
    }
}
