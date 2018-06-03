<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 22:44
 */

namespace app\models;

use app\models\units\Units;

class Reports
{
    private $battle;

    public function informationFrom($battle)
    {
        $this->battle = $battle;
        return $this;
    }

    public function firstArmySlots()
    {

        return $this->generateSlots($this->battle->getFirstArmy());
    }

    public function secondArmySlots()
    {

        return $this->generateSlots($this->battle->getSecondArmy());
    }

    public function firstArmyAfterBattleSlots()
    {

        return $this->generateSlots($this->battle->getFirstArmyAfterBattle());
    }

    public function secondArmyAfterBattleSlots()
    {
        return $this->generateSlots($this->battle->getSecondArmyAfterBattle());
    }


    public function generateSlots($army){

        $slots = [
            'Army Strength' => $army->getArmyStrength(),
            Units::UNIT_TYPE_INFANTRY => 0,
            Units::UNIT_TYPE_ARCHER => 0,
            Units::UNIT_TYPE_CAVALRY => 0
        ];



        foreach ($army->getArmy() as $unit ) {
            if($unit->getType() == Units::UNIT_TYPE_INFANTRY){
                $slots[Units::UNIT_TYPE_INFANTRY] += 1;
            }

            if($unit->getType() == Units::UNIT_TYPE_ARCHER){
                $slots[Units::UNIT_TYPE_ARCHER] += 1;
            }

            if($unit->getType() == Units::UNIT_TYPE_CAVALRY){
                $slots[Units::UNIT_TYPE_CAVALRY] += 1;
            }

        }

        return $slots;
    }

}
