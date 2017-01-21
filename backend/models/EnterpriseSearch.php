<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Enterprise;

/**
 * EnterpriseSearch represents the model behind the search form about `app\models\Enterprise`.
 */
class EnterpriseSearch extends Enterprise
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'shortName', 'category_id', 'user_id', 'tariff_id', 'commentsOn_check', 'emailAlert_check', 'post_id', 'stock_id', 'album_id', 'servise_id', 'design_id', 'socnet_id', 'address_id', 'block_id'], 'integer'],
            [['name', 'logo', 'phone', 'representative', 'workTime', 'siteUrl', 'email', 'icq', 'skype', 'emailAlert', 'albumName'], 'safe'],
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
        $query = Enterprise::find();

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
            'shortName' => $this->shortName,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'tariff_id' => $this->tariff_id,
            'commentsOn_check' => $this->commentsOn_check,
            'emailAlert_check' => $this->emailAlert_check,
            'post_id' => $this->post_id,
            'stock_id' => $this->stock_id,
            'album_id' => $this->album_id,
            'servise_id' => $this->servise_id,
            'design_id' => $this->design_id,
            'socnet_id' => $this->socnet_id,
            'address_id' => $this->address_id,
            'block_id' => $this->block_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'representative', $this->representative])
            ->andFilterWhere(['like', 'workTime', $this->workTime])
            ->andFilterWhere(['like', 'siteUrl', $this->siteUrl])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'icq', $this->icq])
            ->andFilterWhere(['like', 'skype', $this->skype])
            ->andFilterWhere(['like', 'emailAlert', $this->emailAlert])
            ->andFilterWhere(['like', 'albumName', $this->albumName]);

        return $dataProvider;
    }
}
