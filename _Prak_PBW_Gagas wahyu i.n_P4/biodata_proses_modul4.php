<?php
    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $ttl = $_POST["ttl"];
        $alamat = $_POST["alamat"];
        $gender = $_POST["gender"];
            if($gender == "P"){
                    echo "Pria";
                }
    }

    echo "Nama: $nama <br> TTL: $ttl <br> Alamat: $alamat <br> Jenis kelamin: $gender";
?>