<?php

use yii\db\Migration;

/**
 * Class m180524_052954_craete_role_table
 */
class m180524_052954_craete_role_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('role', [
            'id' => $this->primaryKey(),
            'artist_id' => $this->integer()->notNull(),
            'film_id' => $this->integer()->notNull(),
            'roleinfilm' => $this->string(100)->notNull(),
            'nameinfilm' => $this->string(100)->notNull()
        ]);
        $this->createIndex(
            'idx-role-film_id',
            'role','film_id'
        );

        $this->addForeignKey(
            'fk-role-film',
            'role','film_id',
            'film', 'id'
        );

        $this->createIndex(
            'idx-role-artist',
            'role','artist_id'
        );

        $this->addForeignKey(
            'fk-role-artist',
            'role','artist_id',
            'artist', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-role-film', 'role');
        $this->dropForeignKey('fk-role-artist', 'role');
        $this->dropIndex('idx-role-film_id','role');
        $this->dropIndex('idx-role-artist_id','role');
        $this->dropTable('role');
    }
}
    