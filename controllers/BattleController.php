<?php
declare(strict_types=1);

namespace app\controllers;

use app\services\BattleService;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class BattleController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $report = BattleService::engage(20,20);
        return $this->render('index', compact('report'));
    }
}
