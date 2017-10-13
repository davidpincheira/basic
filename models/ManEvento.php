<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "man_evento".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $detalle_evento
 * @property string $fecha
 * @property string $fecha_visto
 * @property integer $cli_profesional_actuante_id
 * @property string $estado
 * @property string $fecha_finalizacion
 * @property string $fecha_finalizacion_real
 * @property string $baja_fecha
 * @property integer $cli_sector_id
 *
 * @property CliSector $cliSector
 * @property ManEventoSeguimiento[] $manEventoSeguimientos
 */
class ManEvento extends \yii\db\ActiveRecord {
    

    public static $opciones_estado = array(1 => 'Nuevo', 2 => 'Visto', 3 => 'Pendiente de Aprobacion', 4 => 'Pendiente de Compra', 5 => 'Pendiente de Servicio Externo', 6 => 'Resuelto');

    public static function tableName() {
        return 'man_evento';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['titulo', 'detalle_evento', 'fecha', 'estado', 'cli_sector_id'], 'required'],
            [['fecha', 'fecha_visto', 'fecha_finalizacion', 'fecha_finalizacion_real', 'baja_fecha'], 'safe'],
            [['cli_profesional_actuante_id', 'cli_sector_id'], 'integer'],
            [['titulo'], 'string', 'max' => 50],
            [['detalle_evento'], 'string', 'max' => 500],
            [['estado'], 'string', 'max' => 1],
            [['cli_sector_id'], 'exist', 'skipOnError' => true, 'targetClass' => CliSector::className(), 'targetAttribute' => ['cli_sector_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'detalle_evento' => 'Detalle Evento',
            'fecha' => 'Fecha',
            'fecha_visto' => 'Fecha Visto',
            'cli_profesional_actuante_id' => 'Cli Profesional Actuante ID',
            'estado' => 'Estado',
            'fecha_finalizacion' => 'Fecha Finalizacion',
            'fecha_finalizacion_real' => 'Fecha Finalizacion Real',
            'baja_fecha' => 'Baja Fecha',
            'cli_sector_id' => 'Cli Sector ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliSector() {
        return $this->hasOne(CliSector::className(), ['id' => 'cli_sector_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManEventoSeguimientos() {
        return $this->hasMany(ManEventoSeguimiento::className(), ['man_evento_id' => 'id']);
    }

    

}
