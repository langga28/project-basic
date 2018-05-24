<?php

use yii\db\Migration;

/**
 * Handles the creation of table `film`.
 */
class m180523_031601_create_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('film', [
            'id' => $this->primaryKey(),
            'filmname' => $this->string(10)->notNull(),
            'country' => $this->string(10)->notNull(),
            'releaseYear' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('film');
    }
}
