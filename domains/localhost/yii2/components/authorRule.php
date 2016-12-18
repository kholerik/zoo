<?php

namespace app\components;

use Yii;
use yii\rbac\Rule;

/**
 * Проверяем authorID на соответствие с пользователем, переданным через параметры
 */
class AuthorRule extends Rule
{


    public $name = 'isAuthor';

    /**
     * @param string|integer $user the user ID.
     * @param Item $item the role or permission that this rule is associated width.
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return boolean a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        echo '<pre>';
//        var_dump(Yii::$app->user->identity->group); die();
        echo '</pre>';
        if( Yii::$app->user->can('РедактированиеВсехПостов') ) { // Если Админ
           return true;
        }
//        var_dump(Yii::$app->user->checkAccess('administrator')); exit();
//        return isset($params['post']) ? $params['post']->createdBy == $user : false;
//        var_dump( Yii::$app->authManager->getRolesByUser($user->id) ); exit();
        return isset($params['post']) ? $params['post']->user_id == $user : false;
    }
}

?>