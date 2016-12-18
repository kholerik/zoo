<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostSearch represents the model behind the search form about `app\models\Post`.
 */
class PostSearch extends Post
{

    public $imageFile;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'commentsOn_check', 'regionNews_check', 'importantNews_check', 'pressRelease_check', 'adult_check', 'category_id'], 'integer'],
            [[ 'title', 'slogan', 'description', 'type_id', 'at_date', 'author', 'source_url', 'source_name', 'status_id', 'miniature'], 'safe'],
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
        $query = Post::find();
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
            'user_id' => $this->user_id,
            'at_date' => $this->at_date,
            'commentsOn' => $this->commentsOn_check,
            'regionNewsCheck' => $this->regionNews_check,
            'importantNewsCheck' => $this->importantNews_check,
            'PressReleaseCheck' => $this->pressRelease_check,
            'adult' => $this->adult_check,
        ]);

        $query->andFilterWhere(['like', 'category_name', $this->category_id])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'slogan', $this->slogan])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'type', $this->type_id])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'sourceUrl', $this->source_url])
            ->andFilterWhere(['like', 'sourceName', $this->source_name])
            ->andFilterWhere(['like', 'status', $this->status_id])
//            ->andFilterWhere(['like', 'questionnaire', $this->questionnaire_id])
            ->andFilterWhere(['like', 'imageFile', $this->imageFile]);

        return $dataProvider;
    }


    public function upload()
    {
        if ($this->validate()) {
            $path = 'uploads/news/original/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($path);
            $this->attachImage($path);
            return true;
        } else {
            return false;
        }
    }

    
}
