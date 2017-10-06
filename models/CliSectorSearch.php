<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CliSector;

/**
 * CliSectorSearch represents the model behind the search form about `app\models\CliSector`.
 */
class CliSectorSearch extends CliSector
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'estado', 'cli_lugar_central_id', 'cli_sector_padre_id'], 'integer'],
            [['nombre'], 'safe'],
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
        $query = CliSector::find();

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
            'estado' => $this->estado,
            'cli_lugar_central_id' => $this->cli_lugar_central_id,
            'cli_sector_padre_id' => $this->cli_sector_padre_id,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
