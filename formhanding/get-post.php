<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <!-- metode get -->
    <!-- <form action="./get-data.php" method="GET">
        <div style="margin-bottom: 3px";>
            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="masukan nama anda" /> 
            <br>
            <label for="kelas">kelas</label>
            <input type="text" id="kelas" name="kelas" placeholder="masukan kelas anda" />
        </div>
        <input type="submit" value="Simpan data"> -->

         <!-- metode post -->
    <form action="./get-data.php" method="POST">
        <div style="margin-bottom: 3px";>
            <label for="username">username</label>
            <input type="text" id="username" name="username" placeholder="masukan nama anda" /> 
            <br>
            <label for="kelas">kelas</label>
            <input type="text" id="kelas" name="kelas" placeholder="masukan kelas anda" />
        </div>
        <input type="submit" value="Simpan data">
</body>

</html>