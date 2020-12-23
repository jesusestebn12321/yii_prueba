<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Suscription */
/* @var $form ActiveForm */
?>
<div class="suscription">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'img') ?>
        <?= $form->field($model, 'service_photo') ?>
        <?= $form->field($model, 'service_video') ?>
        <?= $form->field($model, 'service_story') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'url') ?>
        <?= $form->field($model, 'client') ?>
        <?= $form->field($model, 'language') ?>
        <?= $form->field($model, 'marketing') ?>
        <?= $form->field($model, 'category') ?>
        <?= $form->field($model, 'goes') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- suscription -->
