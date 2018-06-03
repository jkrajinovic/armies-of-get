<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 23:37
 */

namespace app\models\units;

/**
 * Class Cavalry
 * @package app\models\units
 */
final class Cavalry
{
    /**
     * @var
     */
    private $type = Units::UNIT_TYPE_CAVALRY;

    /**
     * @var
     */
    private $strength = 85;

    /**
     * @var
     */
    private $energy = 80;

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