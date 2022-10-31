<?php

use app\Models\Tabela;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\form\ActiveForm;
use kartik\builder\TabularForm;



/** @var yii\web\View $this */
/** @var app\Models\TabelaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tabelas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabela-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nowy wiersz', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'data',
            'ts',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tabela $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]
); 
    

    ?>


</div>

