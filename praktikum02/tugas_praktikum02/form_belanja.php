<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <style>
    h1 {
      color: blue;
      font-family: 'Times New Roman';
      font-size: 45px;
      text-align: center;
      padding-top: 1em;
      padding-bottom: 0.5em;
    
    }
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f4f4f5;
    }
    .container1{
      background-color: antiquewhite;
      border: 2px solid white;
      border-radius: 1em;
      padding: 6px 6px 6px 6px;
    }
    .container2{
      background-color: white;
      border: 2px solid white;
      border-radius: 1em;
      padding: 6px 6px 6px 6px;
    }
    </style>
</head>
<body>
    <h1>FORM BELANJA</h1>
<div class="container">
<div class="row">
<div class="col-sm-8">
<form class="form-horizontal" method="POST" action="form_belanja.php">
<fieldset>

<!-- Membuat Nama Formulir -->

<div class="container1">
<legend>Data Pesanan Customer</legend>

<!-- Membuat Inputan Text -->

<div class="form-group">
    <label class="col-md-4 control-label" for="customer"><b>Nama Customer</b></label>  
    <div class="col-md-5">
        <input id="customer" name="customer" type="text" placeholder="" class="form-control input-md" required="">  
    </div>
</div>
<br/>

<!-- Membuat Etalase Produk -->

<div class="form-group">
    <label class="col-md-4 control-label" for="produk"><b>Pilih Produk</b></label>
    <div class="col-md-4"> 
        <label class="radio-inline" for="produk-0">
            <input type="radio" name="produk" id="produk-0" value="Yae Miko">
            Yae Miko Action Figure
        </label> 
        <label class="radio-inline" for="produk-1">
            <input type="radio" name="produk" id="produk-1" value="Raiden Shogun">
            Raiden Shogun Action Figure
        </label> 
        <label class="radio-inline" for="produk-2">
            <input type="radio" name="produk" id="produk-2" value="Kamisato Ayaka">
            Kamisato Ayaka Action Figure
        </label>
    </div>
</div>
<br/>

<!-- Membuat Form Jumlah -->

<div class="form-group">
    <label class="col-md-4 control-label" for="jumlah"><b>Jumlah</b></label>  
    <div class="col-md-4">
        <input id="jumlah" name="jumlah" type="text" placeholder="" class="form-control input-md" required="">
    </div>
</div>

<!-- Membuat Button -->

<div class="form-group">
    <label class="col-md-4 control-label" for="proses"></label>
    <div class="col-md-4">
        <button id="proses" name="proses" class="btn btn-success">Kirim</button>
    </div>
</div>
</fieldset>
</form>
</div>
    
<!-- Membuat Daftar Harga Action Figure -->

<div class="col-sm-4">
<div class="container2">
    <ul class="list-group">
        <li class="list-group-item active" aria-atomic="true">Daftar Harga Action Figure</li>
        <li class="list-group-item">Yae Miko : Rp. 2.400.000</li>
        <li class="list-group-item">Raiden Shogun : Rp. 2.500.000</li>
        <li class="list-group-item">Kamisato Ayaka : Rp. 3.000.000</li>
        <li class="list-group-item active" aria-atomic="true">Harga Promosi Dapat Berubah Setiap Saat</li>
    </ul>
</div>
</div>
</div>
</body>
    
<!-- Membuat Hasil Total Transaksi -->

<?php
    
$customer = $_POST ["customer"];
$produk = $_POST ["produk"];
$jumlah = $_POST ["jumlah"];

echo "<br/>Customer : {$customer}";
echo "<br/>Produk : {$produk}";
echo "<br/>Jumlah Pembelian : {$jumlah}";

function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
if ($produk == "yaemiko"){
    $total = 2400000 * $jumlah;
    echo '<br/>Total Belanja :'.rupiah($total);
}
elseif ($produk == "raidenshogun"){
    $total = 2500000 *$jumlah;
    echo '<br/>Total Belanja :'.rupiah($total);
}
else{
    $total = 3000000*$jumlah;
    echo '<br/>Total belanja :'.rupiah($total);
}
?>
</html>