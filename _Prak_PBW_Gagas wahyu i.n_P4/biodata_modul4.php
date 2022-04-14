<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <form action="biodata_proses_modul4.php" method="POST">
        Nama: <br>
        <input type="text" name="nama" id=""><br><br>
        Tempat, tanggal lahir: <br>
        <input type="text" name="ttl" id=""><br><br>
        Alamat: <br>
        <input type="text" name="alamat" id=""><br><br>
        Jenis kelamin: <br>
        <input type="radio" name="gender" id="" value="Pria">Pria <br>
        <input type="radio" name="gender" id="" value="Wanita">Wanita <br><br>

        <input type="submit" name="submit" id="" value="Kirim">
    </form>
</body>
</html>