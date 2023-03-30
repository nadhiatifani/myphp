<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nasgor Cuy</title>
</head>

<body>
    <!-- membuat form -->
    <form method="post">
        <div>
            <label>Nasi Goreng Ori</label>
            <input type="text" name="ori" value="10000" readonly>
        </div>
        <br>
        <div>
            <label>Nasi Goreng Spesial</label>
            <input type="text" name="spesial" value="15000" readonly>
        </div>
        <br>
        <!-- inputan untuk memasukan jumlah uang -->
        <div>
            <label for="">Masukkan Uang</label>
            <input type="number" name="uang" required>
        </div>
        <br>
        <button type="submit">Bayar</button>
    </form>

    <?php
    // variable untuk menyimpan harga nasi goreng
    $ori = 10000;
    $spe = 15000;

    //untuk mendapatkan nilai dari input uang
    $uang = @$_POST['uang'];

    //jika nilai input uang ada makan akan dijalankan
    if (isset($_POST['uang'])) {

        //jika uang lebih kecil dari harga nasgor spesial dan uang lebih dari sama dengan 10000
        //ps:jika uang dibawah 10000 tidak dijalankan
        if ($uang < $spe and $uang >= 10000) {

            echo '<hr>';
            echo "Anda telah membeli nasi goreng Ori<br>";
            //untuk mendapatkan kembalian
            //jumlah uang - harga nasgor Ori
            $kembali = $uang - $ori;
            echo "Kembalian Anda " . $kembali;
            //jika uang lebih besar atau sama dengan harga nasgor spesial
        } elseif ($uang >= $spe) {

            echo '<hr>';
            echo "Anda telah membeli nasi goreng Spesial<br>";
            //untuk mendapatkan kembalian
            //jumlah uang - harga nasgor spesial
            $kembali = $uang - $spe;
            echo "Kembalian Anda " . $kembali;

            //jika uang dibawah harga nasigoreng ori / dibawah 10000
        } elseif ($uang < $ori) {
            echo '<hr>';
            echo "Uang anda tidak mencukupi untuk melakukan pembelian<br>";
        }
    }
    ?>

</body>

</html>