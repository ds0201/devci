<?php
include "../src/Money.php";
class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function testCanSetAmount()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $a->setAmount(123);

        // Assert
        $this->assertEquals(123, $a->getAmount());
    }
    // ...
}