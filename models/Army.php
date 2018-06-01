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

    function __construct(int $count)
    {
        $i = 0;
        while ($i < $count) {
            array_push($this->army, (new Units())->createRandomUnit());
            $i++;
        }

        return $this->army;
    }

    public function getArmyStrenth()
    {
        return array_reduce($this->army,function ($strength,$unit) {
            $strength += $unit->getStrength();
            return $strength;
        });
    }

}