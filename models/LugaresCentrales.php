<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lugares_centrales".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $estado
 * @property string $baja_fecha
 *
 * @property CliSector[] $cliSectors
 */
class LugaresCentrales extends \yii\db\ActiveRecord
{
    
    public static $opciones_lugares = array(0=>'Inactivo', 1=>'Activo');

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lugares_centrales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['estado'], 'integer'],
            [['baja_fecha'], 'safe'],
            [['nombre'], 'string', 'max' => 100],
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
            'estado' => 'Estado',
            'baja_fecha' => 'Baja Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliSectors()
    {
        return $this->hasMany(CliSector::className(), ['cli_lugar_central_id' => 'id']);
    }
    
    public function getCliEdificios()
    {
        return $this->hasMany(CliEdificio::className(), ['lugares_centrales_id' => 'id']);
    }
}
