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
final class Archer extends Units
{

    /**
     * @var
     */
    protected $type = Units::UNIT_TYPE_ARCHER;

    /**
     * @var
     */
    protected $strength = 40;

    /**
     * @var
     */
    protected $energy = 30;

}