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
    private $uphill = false;
    private $hasGeneral = false;

    function __construct(array $conditions)
    {
        if (isset($conditions['uphill'])) {
            $this->uphill = $conditions['uphill'];
        }
    }

    public function applyConditions($army)
    {
        $this->hasGeneral = $army->hasGeneral;

        if ($this->hasGeneral) {
            foreach ($army->getArmy() as $unit) {
                $unit->addGeneralBonusStrength(5);
            }
        }

        if ($this->uphill) {
            foreach ($army->getArmy() as $unit) {
                $unit->addTerrainBonusStrength(5);
            }
        } else {
            foreach ($army->getArmy() as $unit) {
                $unit->addTerrainBonusStrength(-5);
            }
        }

        return $army;
    }

}