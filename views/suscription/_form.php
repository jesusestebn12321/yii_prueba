<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Suscription */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="content">
    <div class="box box-default">
        <div class="suscription-form container-fluid">
            <div class="row">
                <?php $form = ActiveForm::begin([
                                                'options' => [
                                                    'enctype' => 'multipart/form-data',
                                                ],
                                            ]);
                 ?>
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <div class="form-grup">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'requiere'])->label('Nombre') ?>
                                </div>
                            </div>
                            
                            <div class="form-grup">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'email')->input('email')->label('E-mail')  ?>
                                </div>
                            </div>
                            
                            <div class="form-grup">
                                <div class="col-md-12">
                                    <?= $form->field($model, 'url')->input('url')->label('Dirección de Facebook') ?>
                                </div>
                            </div>

                            
                            <div class="form-grup">
                                <div class="col-md-12">
                                    <?= $form->field($model, 'description')->textarea(['rows' => 6])->label('Descripción') ?>
                                </div>
                            </div>


                            <div class="form-grup">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'client')->dropDownList([
                                        'Paises'=>[0=>'Brasil',1=>'Colombia',2=>'Venezuela',3=>'Mexico']]) ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'language')->dropDownList([
                                        'Idiomas'=>[0=>'Español',1=>'Ingles',2=>'Portugues',3=>'Aleman']]) ?>
                                </div>
                            </div>
                            
                            <div class="form-grup">
                                <div class="col-md-12">
                                    <?= $form->field($model, 'marketing')->radioList([1=>'Simpre indicare en mis publicaciones patrocinadas que ese tecto es publico', 2=>'Dependera de cada caso, de la marca y el producto que hable'],['separator'=> '<br>' ])->label('Avisos de publicidad') ?>
                                </div>
                            </div>

                            <div class="form-grup">
                                <div class="col-md-12">
                                    <?= $form->field($model, 'img')->fileInput(['multipart'=>'multipart'])->label('Imagen') ?>
                                </div>
                            </div>

                            <div class="form-grup">
                                <div class="col-md-12">
                                    <?= $form->field($model, 'category[]')->checkboxList([
                                        1 => 'opcja 1', 
                                        2 => 'opcja 2',
                                        3 => 'opcja 3',
                                        4 => 'opcja 4',
                                        5 => 'opcja 5',
                                    ]); ?>
                                </div>
                            </div>
                            


                            


                            <label for="">Modo vacaciones</label>
                            <div class="form-grup">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'date_start')->input('date')->label('Fecha de inicio') ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'date_end')->input('date')->label('Fecha de fin') ?>

                                </div>
                            </div>

                        </div>

                        <div class="tab-pane " id="service">
                            <h2 class="">Mis Redes Sociales</h2>
                            <h3 class="">Servicios y precios</h3>
                            <div class="form-grup">
                                <div class="box box-info">
                                    <div class="box-header"><h4 class="title">Foto en Instagram</h4></div>
                                    <div class="box-body">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Atque alias fuga repellat praesentium cupiditate optio, fugiat magnam reprehenderit perferendis aliquid obcaecati, rerum, quod! Deleniti aut ex recusandae quis, ipsa quaerat.
                                    </div>
                                    <div class="container-fluid">
                                            <div class="row">
                                            
                                            <div class="col-md-3">
                                                <?= $form->field($model, 'service_photo')->textInput()->label('Valor por este paquete') ?> 
                                            </div>
                                            <div class="col-md-7"></div>
                                            <div class="col-md-2">
                                                <?= $form->field($model, 'comition_photo')->input('number')->label('Porsentaje descuento (%)') ?> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-grup">
                                <div class="box box-info">
                                    <div class="box-header"><h4 class="title">Video en Instagram</h4></div>
                                    <div class="box-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum omnis perspiciatis nisi consequatur fugiat odio saepe necessitatibus consectetur, vero modi, a, reprehenderit similique quae molestias ipsam deleniti. Error porro, explicabo!
                                    </div>
                                    <div class="container-fluid">
                                            <div class="row">
                                            
                                            <div class="col-md-3">
                                                <?= $form->field($model, 'service_video')->textInput()->label('Valor por este paquete') ?>
                                            </div>
                                            <div class="col-md-7"></div>
                                            <div class="col-md-2">
                                                <?= $form->field($model, 'comition_video')->input('number')->label('Porsentaje descuento (%)') ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-grup">
                                <div class="box box-info">
                                    <div class="box-header"><h4 class="title">Instagram Story</h4></div>
                                    <div class="box-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam excepturi sit laborum nihil officia, assumenda, ad maxime ducimus nisi non laboriosam quibusdam repudiandae, et doloremque accusantium. Soluta, vero exercitationem similique.
                                    </div>
                                    <div class="container-fluid">
                                            <div class="row">
                                                
                                            <div class="col-md-3">
                                                <?= $form->field($model, 'service_story')->textInput()->label('Valor por este paquete') ?>
                                            </div>
                                            <div class="col-md-7"></div>
                                            <div class="col-md-2">
                                                <?= $form->field($model, 'comition_story')->input('number')->label('Porsentaje descuento (%)') ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                      <li class="active"><a class='btn btn-default' href="#activity" data-toggle="tab" aria-expanded="true">Atras</a></li>
                      <li class=""><a class='btn btn-default' href="#service" data-toggle="tab" aria-expanded="false">Siguiente</a></li>
                    </ul>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>

</div>
<script>
    $('#suscription-goes').daterangepicker({ timePickerIncrement: 30, format: 'DD/MM/YYYY' });
</script>