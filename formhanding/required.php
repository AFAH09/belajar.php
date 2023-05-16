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

    // back to null
    $namalengkap = "";
    $kelas = '';
    // message error required
    $namalengkapError = '';
    $kelasError= '';

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST['namalengkap'])){
                $namalengkapError = "Nama lengkapn tidak boleh kosong, harus diisikan";
            } else {
                $namalengkap = dataType($_POST ['namalengkap']);
            }
            if (empty($_POST['kelas'])){
                $kelasError = "Nama lengkapn tidak boleh kosong, harus diisikan";
            } else {
                $kelas = dataType($_POST ['kelas']);
            }
        }
         function dataType($datakelas)
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
            <span style="color:red font-size:10px"> <?php echo $namalengkapError; ?> </span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">kelas</label>
            <input type="number" id="kelas" name="kelas"  placeholder="masukan kelas anda" /> 
            <span style="color:red font-size:10px"> <?php echo $kelasError; ?> </span>
        </div>
        <button type="submit">simpan</button>
        <!-- <input type="submit" value="simpan"> -->
</form>

<?php
echo "<br>";
echo "nama lengkap saya" . $namalengkap;
echo "<br>";
echo "kelas saya " . $kelas;
?>
</html>