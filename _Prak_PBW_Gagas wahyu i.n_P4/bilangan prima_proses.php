<?php
    $angka = $_POST["nilai"];
    $hasil = true;
    for ($i = 2; $i < $angka; $i++)
    {
        if ($angka % $i == 0)
            $hasil = false;
    }
    echo 'Angka <b>'.$angka.'</b><br/>';
    echo $hasil ? 'Termasuk bilangan prima' : 'Bukan bilangan prima';
?>