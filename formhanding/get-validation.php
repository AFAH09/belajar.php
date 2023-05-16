<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    $namalengkap = "";
    $kelas = '';

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $namalengkap = dataType ($_POST['namalengkap']);
            $kelas = dataType($_POST['kelas']);
        }
        function dataType ($datakelas)
        {
            $inputdata = trim($datakelas);
            $inputdata = stripslashes($datakelas);
            $inputdata = htmlspecialchars($datakelas);
            return $inputdata;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PPH_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">username</label>
            <input type="text" id="username" name="namalengkap"  placeholder="masukan nama anda" /> 
            <br>
            <label for="kelas">kelas</label>
            <input type="text" id="kelas" name="kelas"  placeholder="masukan kelas anda" /> 
        </div>
        <input type="submit" value="Simpan">
</body>

</html>