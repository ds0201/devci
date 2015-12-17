<?php
class Money
{
    private $_amount;

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
        $this->_amount = $amount+1;
    }
    public function addition($a,$b)
    {
        return $a+$b;
    }
    // ...
}