<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 23:26
 */

namespace app\models;


class Battle implements ReportableInterface
{

    private $firstArmy ;
    private $secondArmy;

    private $firstArmyAfterBattle;
    private $secondArmyAfterBattle;

    function __construct(Army $firstArmy, Army $secondArmy)
    {
        $this->firstArmy = $firstArmy;
        $this->secondArmy = $secondArmy;
    }

    public function commit(){

        if ($this->firstArmy->getArmyStrength() > $this->secondArmy->getArmyStrength()) {
            $ratio = $this->secondArmy->getArmyStrength() / $this->firstArmy->getArmyStrength();

            $this->secondArmyAfterBattle = new Army();
            $this->firstArmyAfterBattle = $this->applyLosses($ratio, $this->firstArmy);

            return $this->firstArmyAfterBattle;

        };

        $ratio = $this->firstArmy->getArmyStrength() / $this->secondArmy->getArmyStrength();

        $this->firstArmyAfterBattle = new Army();
        $this->secondArmyAfterBattle = $this->applyLosses($ratio, $this->secondArmy);
        return $this->secondArmyAfterBattle;
    }

    private function applyLosses($ratio, Army $army): Army
    {
        $energyLeft = round($army->getArmyEnergy() * (1 - $ratio), 2);

        $energySlot = 0;

        $survivedUnits = [];

        foreach ($army->getArmy() as $unit) {
            if ($energySlot < $energyLeft) {
                array_push($survivedUnits, $unit);
                $energySlot += $unit->getEnergy();
            }

        }

        $survivorArmy = new Army();
        $survivorArmy->addArmy($survivedUnits);

        return $survivorArmy;
    }

    /**
     * @return Army
     */
    public function getFirstArmy()
    {
        return $this->firstArmy;
    }

    /**
     * @return Army
     */
    public function getSecondArmy()
    {
        return $this->secondArmy;
    }

    /**
     * @return array
     */
    public function getFirstArmyAfterBattle()
    {
        return $this->firstArmyAfterBattle;
    }

    /**
     * @return array
     */
    public function getSecondArmyAfterBattle()
    {
        return $this->secondArmyAfterBattle;
    }


}