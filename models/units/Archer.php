<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 23:37
 */

namespace app\models\units;

/**
 * Class Archer
 * @package app\models\units
 */
final class Archer
{

    /**
     * @var
     */
    private $type = Units::UNIT_TYPE_ARCHER;

    /**
     * @var
     */
    private $strength = 40;

    /**
     * @var
     */
    private $energy = 30;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
    }

}