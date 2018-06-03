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
final class General extends Units
{

    /**
     * @var
     */
    protected $type = Units::UNIT_TYPE_GENERAL;

    /**
     * @var
     */
    protected $strength = 200;

    /**
     * @var
     */
    protected $energy = 150;

}