<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
</head>
<body>
<?php
    $nama = "DINI NABILAH BINTI HALIM";
    echo $nama[3];
    echo $nama[0];
    echo $nama[1];
    echo $nama[0];
    ?>
    <hr>
    <?php

    $pelajar[0] = 'DINI';
    $pelajar [1] = 'NABILAH';
    $pelajar[2] = 'HALIM';

    for($x = 0; $x <3; $x++){
    echo $pelajar[$x]. ' ';
    }
    echo '<hr>';

    foreach ($pelajar as $pel) {
        echo $pel . ' ';
    }

    echo '<hr>';
    $pelajars = implode(' ',$pelajar);
    echo $pelajars;
    echo '<hr>';

    #explode
    $ptss = 'POLITEKNIK TUANKU SYED SIRAJUDDIN';
    $kata = explode(' ',$ptss);
    echo $kata[2];

    $senarai = 'Ali,Abu,Adi,Man,Din';
    echo "<Senarai asal : $senarai</p>";
    $ahli = explode(',',$senarai);
    echo '<pre>',print_r($ahli),'<pre>';
    ?>
    <ol>
        <?php
        foreach ($ahli as $knama) {
            echo "<li>$nama<//li>";
        }
        ?>
        </ol>
        <hr>

        <?php
        $citacita = 'Doktor';
        $hasil = strcmp($citacita,'Doctor');
        if($hasil == 0){
            echo 'Sama';
        }elseif ($hasil < 0){
            echo 'Kurang';
        } else {
            echo 'Lebih';
        }
        ?>
</body>
</html>