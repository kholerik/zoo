<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "polls".
 *
 * @property integer $id
 * @property string $poll_name
 * @property string $answer_options
 * @property integer $post_id
 */
class Polls extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'polls';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['poll_name', 'answer_options', 'post_id'], 'required'],
            [['answer_options'], 'string'],
            [['post_id'], 'integer'],
            [['poll_name'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'poll_name' => 'Poll Name',
            'answer_options' => 'Answer Options',
            'post_id' => 'Post ID',
        ];
    }
}
