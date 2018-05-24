<?php

namespace app\controllers;
use yii;
use app\models\Role;

use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\AccessRule;

class RoleController extends \yii\web\Controller
{
    public function behaviours()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['index','create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['index','create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['index','delete'],
                        'allow' => true,
                        'roles' => ['100']
                    ]
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
    public function actionCreate()
    {
        $model = new Role();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        Role::findOne($id)->delete($id);
        return $this->redirect(['/role/index']);
    }

    public function actionIndex()
    {
        $model = Role::find()->orderBy('id')->all();;
        return $this->render('index', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = Role::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Role::findOne($id);
        return $this->render('view', compact('model'));
    }

}
