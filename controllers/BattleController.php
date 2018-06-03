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
        $report = BattleService::engage(20,20);
        return $this->render('index', compact('report'));
    }
}
