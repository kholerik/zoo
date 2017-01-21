<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Photocontest;

/**
 * PhotocontestSearch represents the model behind the search form about `app\models\Photocontest`.
 */
class PhotocontestSearch extends Photocontest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'preview_w', 'preview_h', 'title_id', 'partnerType_id', 'onePhoto_check', 'comment_check', 'vote_check', 'voteGuest_check', 'vote_end', 'voteStop_check', 'noViewVote_check', 'deleteVote_check', 'onIndexPage_check'], 'integer'],
            [['title', 'text', 'partner'], 'safe'],
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
        $query = Photocontest::find();

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
//            'id' => $this->id,
            'preview_w' => $this->preview_w,
            'preview_h' => $this->preview_h,
            'title_id' => $this->title_id,
            'partnerType_id' => $this->partnerType_id,
            'onePhoto_check' => $this->onePhoto_check,
            'comment_check' => $this->comment_check,
            'vote_check' => $this->vote_check,
            'voteGuest_check' => $this->voteGuest_check,
            'vote_end' => $this->vote_end,
            'voteStop_check' => $this->voteStop_check,
            'noViewVote_check' => $this->noViewVote_check,
            'deleteVote_check' => $this->deleteVote_check,
            'onIndexPage_check' => $this->onIndexPage_check,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'partner', $this->partner]);

        return $dataProvider;
    }
}
