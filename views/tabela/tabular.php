<?php

use yii\helpers\Html;

use kartik\form\ActiveForm;
use kartik\builder\TabularForm;

/** @var yii\web\View $this */
/** @var app\Models\Tabela $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tabela-form">

    <?php $form = ActiveForm::begin(); 
    echo TabularForm::widget([
        'dataProvider'=>$dataProvider,
        'form'=>$form,
        'attributes'=>$model->formAttribs,
    ]);
   
         ?>

    <?php ActiveForm::end();?>

</div>
