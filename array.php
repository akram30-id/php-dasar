<?php 

// tipe data array adalah tipe data yang dapat menampung tidak hanya satu nilai
$nama = ['Ananda', 'Akram', 'Syahrastani', 123, 10.5, true, NULL];

// var_dump($nama);
// var_dump($nama[5]);

// var_dump(count($nama));
// for ($i = 0; $i < count($nama); $i++) {
//     var_dump($nama[$i]  ."<br>");
// }
foreach ($nama as $cast) {
    var_dump($cast . "<br>");
}

?>