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
final class Infantry  extends Units
{

    /**
     * @var
     */
    protected $type = Units::UNIT_TYPE_INFANTRY;

    /**
     * @var
     */
    protected $strength = 60;

    /**
     * @var
     */
    protected $energy = 65;

}