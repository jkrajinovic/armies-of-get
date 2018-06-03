<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 22:43
 */

namespace app\models;

use app\models\units\Units;

class Army
{

    private $army = [];


    public function generateFromUnitsNumber($count)
    {
        $i = 0;
        while ($i < $count) {
            array_push($this->army, (new Units())->createRandomUnit());
            $i++;
        }
    }


    public function getArmyStrength()
    {
        return array_reduce($this->army, function ($strength, $unit) {
            $strength += $unit->getStrength();
            return $strength;
        });
    }

    public function getArmyEnergy()
    {
        return array_reduce($this->army,function ($strength,$unit) {
            $strength += $unit->getEnergy();
            return $strength;
        });
    }

    public function getArmy(): array{
        return $this->army;
    }

    public function addArmy(array $army){
        $this->army = $army;
    }


}