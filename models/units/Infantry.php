<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 23:37
 */

namespace app\models\units;

/**
 * Class Infantry
 * @package app\models\units
 */
final class Infantry
{

    /**
     * @var
     */
    private $type = Units::UNIT_TYPE_INFANTRY;

    /**
     * @var
     */
    private $strength = 60;

    /**
     * @var
     */
    private $energy = 65;

    /**
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
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
    public function getType()
    {
        return $this->type;
    }

}