<?php

namespace backend\controllers;
use common\models\User;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * PriseController implements the CRUD actions for Priselist model.
 */
class RollController extends Controller
{


    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
          'access' => [
              'class' => AccessControl::className(),
              'rules' => [
                  [
                      'actions' => ['index','add'],
                      'allow' => true,
                      'roles' => ['@'],
                  ],
              ],
          ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Priselist models.
     * @return mixed
     */
    public function actionIndex()
    {

      $auth = Yii::$app->authManager;


            // добавляем роль "admin"

            // $admin = $auth->createRole('admin');
            // $admin->description = 'Администратор';
            // $auth->add($admin);
            //
            // добавляем роль "user"
            //
            // $user = $auth->createRole('user');
            // $user->description = 'Пользователь';
            // $auth->add($user);

            // добавляем разрешение "CanAdmin"
                  // $permit = $auth->createPermission('canAdmin');
                  // $permit->description = 'Вход в админку';
                  // $auth->add($permit);
              //
              // //    добавляем разрешение "CanAdmin"
              //           $permit = $auth->createPermission('canCreate');
              //           $permit->description = 'Вход в Create';
              //           $auth->add($permit);
              //
              //

                //
                // $roll = $auth->getRole ('user');
                // $permit = $auth->getPermission ('canCreate');
                // $auth->addChild($roll, $permit);

//  Добавляем роль юзер вместе с child пользователю
// $userRole = $auth->getRole('user');
// // Второй параметр ID пользователя в таблице user
// $auth->assign($userRole,2);



return 'Контроллер сработал';
    }

                        // public function actionAdd() {
                        //     $model = User::find()->where(['username' => 'Lena'])->one();
                        //     if (empty($model)) {
                        //         $user = new User();
                        //         $user->username = 'Lena';
                        //         $user->email = 'admin@кодер.укр';
                        //         $user->setPassword('12345');
                        //         $user->generateAuthKey();
                        //         if ($user->save()) {
                        //             echo 'good';
                        //         }
                        //     }
                        // }
}
