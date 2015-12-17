<?php
include "Money.php";

$a = new Money(1);
$b = 1;
$c = 2;
$r = $a->addition($b,$c);
echo "Le résultat de $b + $c est ".$r;

