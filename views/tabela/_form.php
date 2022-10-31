<?php

use yii\helpers\Html;

use kartik\form\ActiveForm;
use kartik\builder\TabularForm;

/** @var yii\web\View $this */
/** @var app\Models\Tabela $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tabela-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ts')->textInput(['readonly' => true, 'value' => date('Y-m-d H:i:s')]) ?>
    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); 
    

    
    
    ?>

</div>
