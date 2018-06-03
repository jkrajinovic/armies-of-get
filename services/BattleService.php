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
use app\models\Conditions;
use app\models\Reports;

class BattleService
{

    public static function engage(int $firstArmyCount, int $secondArmyCount)
    {

        $firstArmy = new Army();
        $firstArmy->generateFromUnitsNumber($firstArmyCount);

        $secondArmy = new Army();
        $secondArmy->generateFromUnitsNumber($secondArmyCount);

        $condition = new Conditions([
            'uphill' => true
        ]);

        $condition->applyConditions($firstArmy);

        $condition = new Conditions([
            'uphill' => false
        ]);

        $condition->applyConditions($secondArmy);

        $battle = new Battle($firstArmy, $secondArmy);
        $battle->commit();

        $report = new Reports();
        return $report->informationFrom($battle);

    }

}