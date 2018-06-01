<?php
/**
 * Created by PhpStorm.
 * User: jadro
 * Date: 1.6.2018.
 * Time: 23:26
 */

namespace app\models;


class Battle implements ReportableInterface
{

    private $firstArmy = [];
    private $secondArmy = [];

    function __construct($firstArmy, $secondArmy)
    {

    }

    public function commit(){

    }

}