<?php 

// Buat Fungsi
function hitungUmur($thn_lahir) {
    // Code Fungsi
    $thn_sekarang = 2023;
    // Hitung Umur
    $umur = $thn_sekarang - $thn_lahir;
    // Tampilan Umur
    return $umur;
}

// panggil fungsi
echo "Umur saya adalah " . hitungUmur(2002);

?>