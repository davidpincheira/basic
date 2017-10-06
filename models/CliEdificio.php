<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cli_edificio".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $baja_fecha
 *
 * @property CliPiso[] $cliPisos
 */
class CliEdificio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cli_edificio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'direccion'], 'required'],
            [['baja_fecha'], 'safe'],
            [['nombre', 'direccion'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'baja_fecha' => 'Baja Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliPisos()
    {
        return $this->hasMany(CliPiso::className(), ['cli_edificio_id' => 'id']);
    }
    
    public function getCliEdificio()
    {
        return $this->hasOne(LugaresCentrales::className(), ['id' => 'cli_lugar_central_id']);
    }
}
