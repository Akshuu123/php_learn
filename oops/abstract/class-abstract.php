<?php

/**
 * Summary of User
 * Abstract Class User ki Property or Method Use Karega for Multiple Inheritance K liye
 * Isse Instantiate nhi kar sakte
 */
abstract class Mobile
{
    /**
     * Name of Mobile
     */
    public $name;
    /**
     * Price of Mobile
     */
    public $price;
    /**
     * Support of communication 4g/5g
     */
    public $band;

    public function  __construct(string $name, int $price, string $band)
    {
        $this->name = $name;
        $this->price = $price;
        $this->band = $band;
    }

    abstract public function get_name();
    abstract public function get_price();
    abstract public function get_band();
}

