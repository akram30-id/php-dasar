<?php 

$a = "Ini bekasi <br>";

// perulangan for, while, do-while
// for ($i = 1; $i <= 10; $i++) {
//     echo $a;
// }

// klasifikasi bilangan ganjil dna genap dari 1-10
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " adalah bilangan genap <br>";
    } else {
        echo $i . " adalah bilangan ganjil <br>";
    }
}


?>