<?php 

	$animals = ["Kucing", "Ayam", "Ikan", "Burung"];
	// Output: Kucing
    echo $animals[0]. "<br>";
	// Output: Burung
    echo $animals[3]. "<br>";
    
// Looping Array
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

echo "<br>";
// Buat Array Asosiatif
$mahasiswa = ["Nama"=>"Muhamad Fauzi","Umur"=>21, "Alamat"=>"Depok"];

echo $mahasiswa["Nama"]. "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>"; 
}
echo "<br>";

// Buat Array Multidimensi
$dosen = [
    ["Pak Rojul","WEB"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "SO"]
];

echo $dosen[0][1];
echo "<br>";

foreach ($dosen as $dsn){
    echo " Nama Dosen : ". $dsn[0];
    echo " - MatKul : " . $dsn[1];
    echo "<br>";
}

?>