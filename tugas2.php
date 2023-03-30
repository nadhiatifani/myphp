<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $barang = ["buku tulis", "penghapus", "spidol"];
    $a = 0;

    while ($a < count($barang)) 
    {
      echo $barang[$a]. "\n";
      $a++;    
    }
    ?>
</body>
</html>