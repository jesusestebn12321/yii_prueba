<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Suscription */

$this->title = 'Crear Suscripción';
$this->params['breadcrumbs'][] = ['label' => 'Suscripciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suscription-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
