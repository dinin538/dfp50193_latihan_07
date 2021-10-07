<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php 
    #strlen()
    $tajuk = '<h1>Hello World</h1>';
    $isi = 'You are great ';
    echo $tajuk . $isi;
    $jumlah = strlen($tajuk) + strlen($isi);
    echo "<p>Bilangan huruf = $jumlah</p>";


    #strstr() 
    $nama = "Dini Nabilah Binti Halim";
    $cari = strstr($nama, 'Dini');
    echo "<p>$cari</p>";

    $noMatric = "18DDT19F1110";
    $bilangan = strstr($noMatric, 'F');
    echo "<p>Bilangan: $bilangan</p>";

    #strpos()
    $noMatric = "18DDT19F1110";
    $lokasi = strpos($noMatric, 'T');
    echo "<p>No.Matric: $noMatric<br>Lokasi (T): $lokasi</p>";


    #ssubstr()
    $kod = substr($noMatric, 2, 3);
    echo "<p>$kod</p>";

    # strpos() & substr()
    $lokasi = strpos($noMatric, 'F') + 1;
    $bilangan = substr($noMatric,$lokasi);
    echo "<p>Bilangan: $bilangan</p>";

    
    ?>
    <h2><a href="string_array.php">String & Array</a></h2>
</body>
</html>