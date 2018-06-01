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