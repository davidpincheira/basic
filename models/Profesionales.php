<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesionales".
 *
 * @property integer $idprofesional
 * @property string $nombre
 * @property string $rol
 * @property string $direccion
 * @property string $localidad
 * @property string $provincia
 * @property string $telefono
 * @property string $matricula
 * @property integer $COD_POS
 * @property string $mail
 * @property integer $activado
 * @property string $comentario
 * @property integer $factura_internacion
 * @property integer $factura_ambulatorio
 * @property integer $tipo_profesional
 * @property integer $cantidad_sobreturnos
 * @property string $codigo_contable
 * @property string $cuit
 * @property string $baja_fecha
 * @property integer $fondo_inversion_endoscopia
 *
 * @property ManEventoSeguimiento[] $manEventoSeguimientos
 */
class Profesionales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesionales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_POS', 'activado', 'factura_internacion', 'factura_ambulatorio', 'tipo_profesional', 'cantidad_sobreturnos', 'fondo_inversion_endoscopia'], 'integer'],
            [['factura_internacion', 'factura_ambulatorio', 'tipo_profesional'], 'required'],
            [['baja_fecha'], 'safe'],
            [['nombre', 'direccion', 'localidad', 'provincia', 'mail'], 'string', 'max' => 50],
            [['rol', 'matricula', 'codigo_contable', 'cuit'], 'string', 'max' => 20],
            [['telefono'], 'string', 'max' => 10],
            [['comentario'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprofesional' => 'Idprofesional',
            'nombre' => 'Nombre',
            'rol' => 'Rol',
            'direccion' => 'Direccion',
            'localidad' => 'Localidad',
            'provincia' => 'Provincia',
            'telefono' => 'Telefono',
            'matricula' => 'Matricula',
            'COD_POS' => 'Cod  Pos',
            'mail' => 'Mail',
            'activado' => 'Activado',
            'comentario' => 'Comentario',
            'factura_internacion' => 'Factura Internacion',
            'factura_ambulatorio' => 'Factura Ambulatorio',
            'tipo_profesional' => 'Tipo Profesional',
            'cantidad_sobreturnos' => 'Cantidad Sobreturnos',
            'codigo_contable' => 'Codigo Contable',
            'cuit' => 'Cuit',
            'baja_fecha' => 'Baja Fecha',
            'fondo_inversion_endoscopia' => 'Fondo Inversion Endoscopia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManEventoSeguimientos()
    {
        return $this->hasMany(ManEventoSeguimiento::className(), ['cli_profesional_actuante_id' => 'idprofesional']);
    }
}
