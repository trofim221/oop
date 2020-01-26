<?php
/**
 * Created by PhpStorm.
 * User: trofim
 * Date: 26.01.2020
 * Time: 2:12 PM
 */

abstract class Transport
{
    public $driverName;
    public $helm;
    public $transmission;
    public $gas;
    public $speedometer;
    public $wheels = 4;

    abstract protected function changeOil(): string;

    public function countWheels(): int {
        $wheels = $this->wheels;
        return $wheels;
    }

}