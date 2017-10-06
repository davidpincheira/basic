<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SisAuthItem;

/**
 * SisAuthItemSearch represents the model behind the search form about `app\models\SisAuthItem`.
 */
class SisAuthItemSearch extends SisAuthItem
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'bizrule', 'data'], 'safe'],
            [['type'], 'integer'],
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
        $query = SisAuthItem::find();

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
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'bizrule', $this->bizrule])
            ->andFilterWhere(['like', 'data', $this->data]);

        return $dataProvider;
    }
}
