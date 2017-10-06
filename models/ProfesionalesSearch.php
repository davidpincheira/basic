<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profesionales;

/**
 * ProfesionalesSearch represents the model behind the search form about `app\models\Profesionales`.
 */
class ProfesionalesSearch extends Profesionales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idprofesional', 'COD_POS', 'activado', 'factura_internacion', 'factura_ambulatorio', 'tipo_profesional', 'cantidad_sobreturnos', 'fondo_inversion_endoscopia'], 'integer'],
            [['nombre', 'rol', 'direccion', 'localidad', 'provincia', 'telefono', 'matricula', 'mail', 'comentario', 'codigo_contable', 'cuit', 'baja_fecha'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Profesionales::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idprofesional' => $this->idprofesional,
            'COD_POS' => $this->COD_POS,
            'activado' => $this->activado,
            'factura_internacion' => $this->factura_internacion,
            'factura_ambulatorio' => $this->factura_ambulatorio,
            'tipo_profesional' => $this->tipo_profesional,
            'cantidad_sobreturnos' => $this->cantidad_sobreturnos,
            'baja_fecha' => $this->baja_fecha,
            'fondo_inversion_endoscopia' => $this->fondo_inversion_endoscopia,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'rol', $this->rol])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'provincia', $this->provincia])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'comentario', $this->comentario])
            ->andFilterWhere(['like', 'codigo_contable', $this->codigo_contable])
            ->andFilterWhere(['like', 'cuit', $this->cuit]);

        return $dataProvider;
    }
}
