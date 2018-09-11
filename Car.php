<?php
/**
 * Created by PhpStorm.
 * User: fabiankohnen
 * Date: 11.09.18
 * Time: 15:13
 */

class Car
{
    protected $_manufacturer;
    protected $_doors;

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->_manufacturer;
    }

    /**
     * @param mixed $_manufacturer
     */
    public function setManufacturer($_manufacturer)
    {
        $this->_manufacturer = $_manufacturer;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->_doors;
    }

    /**
     * @param mixed $_doors
     */
    public function setDoors($_doors)
    {
        $this->_doors = $_doors;
    }
}