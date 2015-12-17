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
    public function testAdditionResult()
    {
        // Arrange
        $a = new Money();

        // Act
        $b = $a->addition(1,1);

        // Assert
        $this->assertEquals(2, $b);
    }
    public function testSubstractionResult()
    {
        // Arrange
        $a = new Money();

        // Act
        $b = $a->substraction(2,1);

        // Assert
        $this->assertEquals(0, $b);
    }
    // ...
}