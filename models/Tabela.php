<?php

namespace app\models;

use kartik\builder\TabularForm;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "tabela".
 *
 * @property int $id
 * @property string|null $ts
 */
class Tabela extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabela';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['ts'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
            'ts' => 'Ts',
        ];
    }

    public function getFormAttribs() {
        return [
            // primary key column
            'id'=>[ // primary key attribute
                'type'=>TabularForm::INPUT_HIDDEN, 
            ], 
            'data'=>['type'=>TabularForm::INPUT_TEXT],
            'ts'=>['type'=>TabularForm::INPUT_STATIC],
        ];
    }
   
}


