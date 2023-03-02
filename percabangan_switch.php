<?php

$a = "Bekasi";

// if ($a == "Bekasi") {
//     echo "Benar <br>";
// } else if ($a == "Jakarta") {
//     echo "Salah <br>";
// } else if ($a == "Bandung") {
//     echo "Salah <br>";
// } else {
//     echo "Tidak ketemu <br>";
// }

switch ($a) {
    case "Jakarta":
        echo "Ini Jakarta";
        break;
    case "Bekasi":
        echo "Ini Bekasi";
        break;

    case "Bandung":
        echo "Ini Bandung";
        break;

    default:
        echo "Tidak Ketemu";
        break;
}
