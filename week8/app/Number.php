<?php

class Number
{
    public $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    # divides the numberic value in half
    public function getHalf()
    {
        return $this->num / 2;
    }

    # determines if the value is numeric
    public function isValid()
    {
        return is_numeric($this->num);
    }
}

# Public = wide open within the class or any classes that are extending the class and when we instance/invoke the classes
# Protected = can only be used within its class and any sub classes that extend it but not outside of this, not when intancing or invoking its methods or properties
# Private = can only be used within its class and methods or properties within the same class