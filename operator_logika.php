<?php 

// AND (&&)
// OR (||)

$a = 10;
$b = 5;
$c = 3;

var_dump(($a < $b) || ($b < $c)); // OR, false
var_dump(($a > $b) || ($b < $c)); // OR, true
// OR itu akan bernilai true kecuali saat semua perbandigannya bernilai false
echo "<br>";
var_dump(($a < $b) && ($b < $c)); // AND, false
var_dump(($a > $b) && ($b > $c)); // AND, true
// AND akan bernilai false kecuali saat perbadingannya bernilai true

?>