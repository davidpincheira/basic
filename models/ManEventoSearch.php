<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ManEvento;

/**
 * ManEventoSearch represents the model behind the search form about `app\models\ManEvento`.
 */
class ManEventoSearch extends ManEvento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cli_profesional_actuante_id', 'cli_sector_id'], 'integer'],
            [['titulo', 'detalle_evento', 'fecha', 'fecha_visto', 'estado', 'fecha_finalizacion', 'fecha_finalizacion_real', 'baja_fecha'], 'safe'],
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
        $query = ManEvento::find();

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
            'id' => $this->id,
            'fecha' => $this->fecha,
            'fecha_visto' => $this->fecha_visto,
            'cli_profesional_actuante_id' => $this->cli_profesional_actuante_id,
            'fecha_finalizacion' => $this->fecha_finalizacion,
            'fecha_finalizacion_real' => $this->fecha_finalizacion_real,
            'baja_fecha' => $this->baja_fecha,
            'cli_sector_id' => $this->cli_sector_id,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'detalle_evento', $this->detalle_evento])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
