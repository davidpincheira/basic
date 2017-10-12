<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // agrega el permiso "createPost"
        $createManEvento = $auth->createPermission('createManEvento');
        $createManEvento->description = 'Create a post';
        $auth->add($createManEvento);

        // agrega el permiso "updatePost"
        $updatePost = $auth->createPermission('updateManEvento');
        $updatePost->description = 'Update post';
        $auth->add($updatePost);

        // agrega el rol "author" y le asigna el permiso "createPost"
        $author = $auth->createRole('author');
        $auth->add($author);
        $auth->addChild($author, $createManEvento);

        // agrega el rol "admin" y le asigna el permiso "updatePost"
        // más los permisos del rol "author"
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $updatePost);
        $auth->addChild($admin, $author);

        // asigna roles a usuarios. 1 y 2 son IDs devueltos por IdentityInterface::getId()
        // usualmente implementado en tu modelo User.
        $auth->assign($author, 2);
        $auth->assign($admin, 1);
    }
}