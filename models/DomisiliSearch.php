<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Domisili;

/**
 * DomisiliSearch represents the model behind the search form of `app\models\Domisili`.
 */
class DomisiliSearch extends Domisili
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_domisili'], 'integer'],
            [['nama_domisili'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Domisili::find();

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
            'id_domisili' => $this->id_domisili,
        ]);

        $query->andFilterWhere(['like', 'nama_domisili', $this->nama_domisili]);

        return $dataProvider;
    }
}
