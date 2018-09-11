<?php
/**
 * Created by PhpStorm.
 * User: fabiankohnen
 * Date: 11.09.18
 * Time: 15:13
 */

class Car
{
    protected $manufacturer;
    protected $doors;

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param mixed $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }
}