<?php

namespace app\commands;

use app\rbac\AuthorRule;
use app\rbac\Rbac;
use yii\console\Controller;

// Запусти php yii rbac/init

class RbacController extends Controller
{
    public function actionInit()
    {

        $auth = \Yii::$app->authManager;
        $auth->removeAll();

        $adminPanel = $auth->createPermission(Rbac::ADMIN_PANEL);
        $adminPanel->description = 'Control panel';
        $auth->add($adminPanel);

        $viewPosts = $auth->createPermission(Rbac::POSTS_VIEW);
        $viewPosts->description = 'View posts';
        $auth->add($viewPosts);

        $createPosts = $auth->createPermission(Rbac::POSTS_CREATE);
        $createPosts->description = 'Create a post';
        $auth->add($createPosts);

        $managePosts = $auth->createPermission(Rbac::POSTS_MANAGE); // UPDATE DELETE
        $managePosts->description = 'Manage posts';
        $auth->add($managePosts);

        $rule = new AuthorRule;
        $auth->add($rule);

        $manageOwnPosts = $auth->createPermission(Rbac::POSTS_MANAGE_OWN);
        $manageOwnPosts->description = 'Manage own posst';
        $manageOwnPosts->ruleName = $rule->name;
        $auth->add($manageOwnPosts);

        $auth->addChild($manageOwnPosts, $managePosts);

        $user = $auth->createRole('user');
        $auth->add($user);
        
        $manager = $auth->createRole('manager');
        $auth->add($manager);

        $auth->addChild($manager, $viewPosts);
        $auth->addChild($manager, $createPosts);
        $auth->addChild($manager, $manageOwnPosts);
        $auth->addChild($manager, $adminPanel);

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $auth->addChild($admin, $viewPosts);
        $auth->addChild($admin, $createPosts);
        $auth->addChild($admin, $managePosts);
        $auth->addChild($admin, $adminPanel);

        $auth->assign($admin, 1);
    }
}