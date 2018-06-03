<?php

/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 22:43
 */

namespace app\models\units;

use yii\web\NotFoundHttpException;

/**
 * Class Units
 * @package app\models\units
 */
class Units
{

    const UNIT_TYPE_GENERAL = 'General';
    const UNIT_TYPE_INFANTRY = 'Infantry';
    const UNIT_TYPE_ARCHER = 'Arher';
    const UNIT_TYPE_CAVALRY = 'Cavalry';

    public static function getUnitsTypes()
    {
        return [
            self::UNIT_TYPE_GENERAL,
            self::UNIT_TYPE_INFANTRY,
            self::UNIT_TYPE_ARCHER,
            self::UNIT_TYPE_CAVALRY
        ];
    }

    /**
     * @var
     */
    protected $type = '';

    /**
     * @var
     */
    protected $strength = 0;

    /**
     * @var array
     */
    protected $bonusStrength = [];

    /**
     * @var
     */
    protected $energy = 0;

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
        return $this->strength + $this->calculateBonusStrength();
    }

    public function calculateBonusStrength()
    {
        $additionalStrength = 0;
        foreach ($this->bonusStrength as $key => $bonus) {
            $additionalStrength += $bonus;
        }
        return $additionalStrength;
    }

    /**
     * @return array
     */
    public function getBonusStrength()
    {
        return $this->bonusStrength;
    }

    /**
     * @param $amount
     */
    public function addGeneralBonusStrength($amount)
    {
        $this->bonusStrength['General'] = $amount;
    }

    /**
     * @param $amount
     */
    public function addTerrainBonusStrength($amount)
    {
        $this->bonusStrength['Terrain'] = $amount;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return Archer|Cavalry|Infantry
     * @throws NotFoundHttpException
     */
    public function createRandomUnit()
    {
        $index = rand(0, 2);

        switch ($index) {
            case 0:
                return new Infantry();
                break;
            case 1:
                return new Archer();
                break;
            case 2:
                return new Cavalry();
                break;
            default:
                throw new NotFoundHttpException('Index in units types array does not exist');
        }
    }



}