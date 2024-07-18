<?php


include __DIR__ . '/class-abstract.php';

class Samsung extends Mobile
{
    public function get_name()
    {
        return 'Device: '. $this->name;
    }

    public function get_price()
    {
        return 'Price: ' . $this->price;
    }

    /**
     * To Get Band 2G/3G/4G/5G
     * @return string
     */
    public function get_band()
    {
        return 'The communication band of the device is ' . $this->band;
    }

    /**
     * To Check is Band is 5G or not
     * @return string 
     */
    public function is_5g()
    {
        if ($this->band == '5G') {
            return 'This is 5G';
        } else {
            return 'This is 4G';
        }
    }
}

$samsung = new Samsung("Samsung Galaxy S21", 799, "5G");

echo $samsung->is_5g();
