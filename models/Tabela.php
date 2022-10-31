<?php

namespace app\models;

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
}
