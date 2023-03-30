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
    $artikel = [
    [
        "judul" => "belajar php & mysql untuk pemula",
        "penulis" => "saya sendiri"
    ],
    [
        "judul" => "tutorial php dari nol hingga mahir",
        "penulis" => "nadhia tifani"
    ],
    [
        "judul" => "membuat aplikasi web dengan php",
        "penulis" => "nadhia tifani"
    ]
    
    ];

    //menampilkan array
    foreach ($artikel as $post) {
        echo "<h2>".$post["judul"]."</h2>";
        echo "<p>".$post["penulis"]."</p>";
        echo "<hr>";
    }
    
    ?>
</body>
</html>