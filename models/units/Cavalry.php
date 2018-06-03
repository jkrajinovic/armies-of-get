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
final class Cavalry extends Units
{
    /**
     * @var
     */
    protected $type = Units::UNIT_TYPE_CAVALRY;

    /**
     * @var
     */
    protected $strength = 85;

    /**
     * @var
     */
    protected $energy = 80;

}