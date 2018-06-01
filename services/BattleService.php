<?php

/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 22:44
 */
namespace app\services;

use app\models\Army;
use app\models\Battle;
use app\models\Reports;

class BattleService
{

    public static function engage(int $firstArmyCount, int $secondArmyCount)
    {

        $firstArmy = new Army($firstArmyCount);
        $secondArmy = new Army($secondArmyCount);

        $battle = new Battle($firstArmy, $secondArmy);
        $battle->commit();

        $report = new Reports();
        return $report->informationFrom($battle);

    }

}