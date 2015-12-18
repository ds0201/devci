<?php
include "Money.php";

$a = new Money(1);
$b = 1;
$c = 2;
$r = $a->addition($b, $c);
$s = $a->substraction($c, $b);
echo "Le résultat de $b + $c est ".$r;
echo "<br/>Le résultat de $c - $b est ".$s;
echo "<br>Test";
