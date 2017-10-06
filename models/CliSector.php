<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cli_sector".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $estado
 * @property integer $cli_lugar_central_id
 * @property integer $cli_sector_padre_id
 *
 * @property LugaresCentrales $cliLugarCentral
 * @property CliSector $cliSectorPadre
 * @property CliSector[] $cliSectors
 * @property ManEvento[] $manEventos
 */
class CliSector extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cli_sector';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado', 'cli_lugar_central_id', 'cli_sector_padre_id'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['cli_lugar_central_id'], 'exist', 'skipOnError' => true, 'targetClass' => LugaresCentrales::className(), 'targetAttribute' => ['cli_lugar_central_id' => 'id']],
            [['cli_sector_padre_id'], 'exist', 'skipOnError' => true, 'targetClass' => CliSector::className(), 'targetAttribute' => ['cli_sector_padre_id' => 'id']],
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
            'cli_lugar_central_id' => 'Cli Lugar Central ID',
            'cli_sector_padre_id' => 'Cli Sector Padre ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliLugarCentral()
    {
        return $this->hasOne(LugaresCentrales::className(), ['id' => 'cli_lugar_central_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliSectorPadre()
    {
        return $this->hasOne(CliSector::className(), ['id' => 'cli_sector_padre_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliSectors()
    {
        return $this->hasMany(CliSector::className(), ['cli_sector_padre_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManEventos()
    {
        return $this->hasMany(ManEvento::className(), ['cli_sector_id' => 'id']);
    }
}
