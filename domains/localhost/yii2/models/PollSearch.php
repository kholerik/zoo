<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Poll;
use app\models\PollStatus;
use yii\db\QueryInterface;

/**
 * PollSearch represents the model behind the search form about `app\models\Poll`.
 */
class PollSearch extends Poll
{

    public $statusName;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status_id'], 'integer'],
            [['name', 'statusName'], 'safe'], // чтоб поиск у всех атрибутов в  http://yii2/admin/poll/index работал
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

    /**
     * Настроим поиск для использования
     * полей name и statusName
     */
    public function search($params)
    {
        $query = Poll::find();

//             add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        /* Включаем связанные таблицы в выборку */
        $query->joinWith(['status']); // status из Poll.php
        /**
         * Настройка параметров сортировки (там шде синия подсветка названия)
         * Важно: должна быть выполнена раньше $this->load($params)
         * statement below
         */
        $dataProvider->setSort([
            'attributes' => [
                'id',
                'name',
                'statusName',
//                'statusName' => [
//                    'asc' => ['name' => SORT_ASC],
//                    'desc' => ['name' => SORT_DESC],
//                    'label' => 'statusName',
//                    'default' => SORT_ASC
//                ],
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

//        $this->addCondition($query, 'pollStatus');

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status_id' => $this->status_id,
//            'name' => $this->statusName,
        ]);

//        $sf = new PollStatus;
//        print_r($sf->name); die();


        $query->andFilterWhere(['like', 'name', $this->name]); // поисковая строка

        if ($this->statusName) {
            $query->andFilterWhere(['like', 'poll_status.name', $this->statusName]);
        }


        // Фильтр по стране
//        $query->joinWith(['status' => function ($q) {
////            $q->where('tbl_pollStatus.name LIKE "%' . $this->statusName . '%"');
//            $q->andFilterWhere(['like', 'tbl_pollStatus.name', $this->statusName]);
//        }]);
        return $dataProvider;
    }





    protected function addCondition(QueryInterface $query, $attribute, $partialMatch = false)
    {
        if (($pos = strrpos($attribute, '.')) !== false) {
            $modelAttribute = substr($attribute, $pos + 1);
        } else {
            $modelAttribute = $attribute;
        }

        $value = $this->$modelAttribute;
        if (trim($value) === '') {
            return;
        }

        /*
         * Для корректной работы фильтра со связью со
         * свой же моделью делаем:
         */
        $attribute = "poll.$attribute";

        if ($partialMatch) {
            $query->andWhere(['like', $attribute, $value]);
        } else {
            $query->andWhere([$attribute => $value]);
        }
    }
}
