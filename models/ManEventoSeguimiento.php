<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "man_evento_seguimiento".
 *
 * @property integer $id
 * @property integer $man_evento_id
 * @property integer $cli_profesional_actuante_id
 * @property string $fecha
 * @property string $descripcion
 * @property string $baja_fecha
 *
 * @property Profesionales $cliProfesionalActuante
 * @property ManEvento $manEvento
 */
class ManEventoSeguimiento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'man_evento_seguimiento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['man_evento_id', 'cli_profesional_actuante_id', 'fecha', 'descripcion'], 'required'],
            [['man_evento_id', 'cli_profesional_actuante_id'], 'integer'],
            [['fecha', 'baja_fecha'], 'safe'],
            [['descripcion'], 'string', 'max' => 500],
            [['cli_profesional_actuante_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profesionales::className(), 'targetAttribute' => ['cli_profesional_actuante_id' => 'idprofesional']],
            [['man_evento_id'], 'exist', 'skipOnError' => true, 'targetClass' => ManEvento::className(), 'targetAttribute' => ['man_evento_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'man_evento_id' => 'Man Evento ID',
            'cli_profesional_actuante_id' => 'Cli Profesional Actuante ID',
            'fecha' => 'Fecha',
            'descripcion' => 'Descripcion',
            'baja_fecha' => 'Baja Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliProfesionalActuante()
    {
        return $this->hasOne(Profesionales::className(), ['idprofesional' => 'cli_profesional_actuante_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManEvento()
    {
        return $this->hasOne(ManEvento::className(), ['id' => 'man_evento_id']);
    }
}
