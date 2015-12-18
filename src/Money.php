<?php
class Money
{
    private $_amount;
    private $abcd;

    public function __construct($amount=0)
    {
        $this->_amount = $amount;
    }

    public function getAmount()
    {
        return $this->_amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->_amount);
    }

    public function setAmount($amount)
    {
        $this->_amount = $amount;
    }
    public function addition($a,$b)
    {
        return $a+$b;
    }
    public function substraction($a,$b)
    {
        return $a-$b;
    }
    // ...
}