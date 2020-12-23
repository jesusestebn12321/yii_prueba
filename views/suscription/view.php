<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\Suscription */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Suscripción', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="suscription-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro que desea eliminar el item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?=Html::img('@web/uploads/'.$model->img,)?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:ntext',
            'url:url',
            'description:ntext',
            'client',
            'language',
            'img',
            'marketing',
            'category',
            'date_end',
            'date_start',
            'service_photo',
            //'comition_photo',
            'service_video',
            //'comition_video',
            'service_story',
            //'comition_story',
        ],
    ]) ?>

</div>
