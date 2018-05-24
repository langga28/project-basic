<?php

use yii\db\Migration;

/**
 * Handles the creation of table `artist`.
 */
class m180523_032123_create_artist_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('artist', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string(30)->notNull(),
            'lastName' => $this->string(30)->notNull(),
            'gender' => $this->string(10)->notNull(),
            'nationality' => $this->string(20)->notNull(),
            'DOB' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('artist');
    }
}
