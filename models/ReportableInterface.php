<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 2.6.2018.
 * Time: 0:04
 */

namespace app\models;


interface ReportableInterface
{

    public function getFirstArmy();

    public function getSecondArmy();

    public function getFirstArmyAfterBattle();

    public function getSecondArmyAfterBattle();

}