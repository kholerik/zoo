<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Poster;

/**
 * PosterSearch represents the model behind the search form about `app\models\Poster`.
 */
class PosterSearch extends Poster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'child_check', 'master_check', 'meet_check', 'priority_check', 'adBlock_check', 'socNet_check', 'age_id', 'noAge_check', 'format_id', 'album_id'], 'integer'],
            [['title', 'shortDescription', 'place', 'description', 'photo', 'video'], 'safe'],
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
        $query = Poster::find();

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
            'category_id' => $this->category_id,
            'child_check' => $this->child_check,
            'master_check' => $this->master_check,
            'meet_check' => $this->meet_check,
            'priority_check' => $this->priority_check,
            'adBlock_check' => $this->adBlock_check,
            'socNet_check' => $this->socNet_check,
            'age_id' => $this->age_id,
            'noAge_check' => $this->noAge_check,
            'format_id' => $this->format_id,
            'album_id' => $this->album_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'shortDescription', $this->shortDescription])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'video', $this->video]);

        return $dataProvider;
    }
}
