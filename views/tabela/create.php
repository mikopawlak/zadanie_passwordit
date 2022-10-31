<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\Models\Tabela $model */

$this->title = 'Create Tabela';
$this->params['breadcrumbs'][] = ['label' => 'Tabelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabela-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
