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
        return $this->generateSlots($this->getFirstArmy(), true);
    }

    public function secondArmySlots()
    {
        return $this->generateSlots($this->getSecondArmy(), true);
    }

    public function firstArmyAfterBattleSlots()
    {
        return $this->generateSlots($this->getFirstArmyAfterBattle());
    }

    public function secondArmyAfterBattleSlots()
    {
        return $this->generateSlots($this->getSecondArmyAfterBattle());
    }


    public function generateSlots($army, $bonusSlotsVisible = false)
    {

        $slots = [];
        $slots['Army Strength'] = $army->getArmyStrength();

        foreach (Units::getUnitsTypes() as $unitType) {
            $slots[$unitType] = 0;
        }

        foreach ($army->getArmy() as $unit) {
            $slots[$unit->getType()] += 1;
        }

        if ($bonusSlotsVisible) {
            foreach ($army->getArmyBonuses() as $key => $value) {
                $slots[$key] = $value;
            }
        }

        return $slots;
    }

    /**
     * @return mixed
     */
    public function getBattle()
    {
        return $this->battle;
    }

    public function getFirstArmy()
    {
        return $this->getBattle()->getFirstArmy();
    }

    public function getSecondArmy()
    {
        return $this->getBattle()->getSecondArmy();
    }

    public function getFirstArmyAfterBattle()
    {
        return $this->getBattle()->getFirstArmyAfterBattle();
    }

    public function getSecondArmyAfterBattle()
    {
        return $this->getBattle()->getSecondArmyAfterBattle();
    }

}
