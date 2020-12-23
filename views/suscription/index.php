<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suscripciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suscription-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Suscription', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:ntext',
            'url:url',
            'description:ntext',
            //'client',
            //'language',
            //'marketing',
            //'img:ntext',
            //'category',
            //'date_end',
            //'date_start',
            //'service_photo',
            //'comition_photo',
            //'service_video',
            //'comition_video',
            //'service_story',
            //'comition_story',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
