<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 3.6.2018.
 * Time: 20:32
 */

namespace app\models;


class Conditions
{
    private $uphill;

    function __construct(array $conditions)
    {
        if (isset($conditions['uphill'])) {
            $this->uphill = $conditions['uphill'];
        }
    }

    public function applyConditions($army)
    {

        if ($this->uphill) {
            foreach ($army->getArmy() as $unit) {
                $unit->addStrength(5);
            }
            return $army;
        }


        foreach ($army->getArmy() as $unit) {
            $unit->subtractStrength(5);
        }

        return $army;
    }

}