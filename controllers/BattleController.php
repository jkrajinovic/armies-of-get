<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\services\BattleService;

class BattleController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $army1 = intval(Yii::$app->request->getQueryParam('army1'));
        $army2 = intval(Yii::$app->request->getQueryParam('army2'));

        $report = BattleService::engage($army1, $army2);

        return $this->render('index', compact('report'));
    }
}
