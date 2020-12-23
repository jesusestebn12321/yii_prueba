<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suscriptions".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $url
 * @property string|null $description
 * @property string|null $client
 * @property string|null $language
 * @property string|null $marketing
 * @property string|null $img
 * @property string|null $category
 * @property string|null $goes
 * @property int|null $service_photo
 * @property int|null $service_video
 * @property int|null $service_story
 */
class Suscription extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suscriptions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email','url','service_photo', 'service_video', 'service_story','comition_photo', 'comition_video', 'comition_story','description','name', 'client','category', 'language', 'marketing', 'date_start','date_end'], 'required' ],
            [['description'], 'string' ],
            [['img'],'file', 'extensions' => 'png,jpg'],
            [['url'], 'url'],
            [['category'], 'safe'],
            [['email'], 'email'],
            [['service_photo', 'service_video', 'service_story','comition_photo', 'comition_video', 'comition_story'], 'integer'],
            [['name', 'client', 'language', 'marketing'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'email' => 'E-mail',
            'url' => 'Dirección de Facebook',
            'description' => 'Descripción',
            'client' => 'Pais de los interesados',
            'language' => 'Idioma',
            'marketing' => 'Marketing',
            'img' => 'Imagen',
            'category' => 'Categorias',
            'date_start' => 'Fecha de inicio',
            'date_end' => 'Fecha de fin',
            'service_photo' => 'Servicio Foto',
            'comition_photo' => 'Comición Foto',
            'service_video' => 'Servicio Video',
            'comition_video' => 'Comición Video',
            'service_story' => 'Servicio Story',
            'comition_story' => 'Comición Story',
        ];
    }
}
