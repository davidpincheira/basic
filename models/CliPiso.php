<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cli_piso".
 *
 * @property integer $id
 * @property string $numero
 * @property integer $cli_edificio_id
 *
 * @property CliEdificio $cliEdificio
 */
class CliPiso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cli_piso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'cli_edificio_id'], 'required'],
            [['cli_edificio_id'], 'integer'],
            [['numero'], 'string', 'max' => 10],
            [['cli_edificio_id'], 'exist', 'skipOnError' => true, 'targetClass' => CliEdificio::className(), 'targetAttribute' => ['cli_edificio_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'cli_edificio_id' => 'Cli Edificio ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliEdificio()
    {
        return $this->hasOne(CliEdificio::className(), ['id' => 'cli_edificio_id']);
    }
}
