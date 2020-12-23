<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%suscriptions}}`.
 */
class m201221_040711_create_suscriptions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    /*public function safeUp()
    {
        $this->createTable('{{%suscriptions}}', [
            'id' => $this->primaryKey(),
        ]);
    }*/

    /**
     * {@inheritdoc}
     */
    /*public function safeDown()
    {
        $this->dropTable('{{%suscriptions}}');
    }
    */

    public function up()
    {
        $this->createTable("suscriptions", [
            "id" => Schema::TYPE_PK,
            "name" => Schema::TYPE_STRING,
            "email" => Schema::TYPE_TEXT,
            "url"=>Schema::TYPE_STRING,
            "description"=>Schema::TYPE_TEXT,
            "client"=>Schema::TYPE_STRING,
            "language"=>Schema::TYPE_STRING,
            "marketing"=>Schema::TYPE_STRING,
            "img"=>Schema::TYPE_TEXT,
            "category"=>Schema::TYPE_STRING,
            "date_end"=>Schema::TYPE_DATE,
            "date_start"=>Schema::TYPE_DATE,
            "service_photo"=>Schema::TYPE_MONEY,
            "comition_photo"=>Schema::TYPE_INTEGER,
            "service_video"=>Schema::TYPE_MONEY,
            "comition_video"=>Schema::TYPE_INTEGER,
            "service_story"=>Schema::TYPE_MONEY,
            "comition_story"=>Schema::TYPE_INTEGER,
         ]);
    }

    public function down()
    {
        echo "m201220_143215_create_news_suscription cannot be reverted.\n";

        return false;
    }
}
