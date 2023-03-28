<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form IT Club Register</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-md-8">
                <h1>
                    Form Registrasi IT Club Data Sience
                </h1>
                <hr>
                <form role="form" method="POST" action="form_itclubregistrasi.php">
                    <div class="form-group row">
                        <label for="NIM" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="NIM" name="NIM" placeholder="Masukan Nim Kamu" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card-o"></i>
                                    </div>
                                </div>
                                <input id="Nama" name="Nama" placeholder="Masukan Nama Kamu" type="text" required="required" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="JenisKelamin" id="JenisKelamin_0" type="radio" required="required" class="custom-control-input" value="Laki-Laki">
                                <label for="JenisKelamin_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="JenisKelamin" id="JenisKelamin_1" type="radio" required="required" class="custom-control-input" value="Perempuan">
                                <label for="JenisKelamin_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Study" class="col-4 col-form-label">Program Studi</label>
                        <div class="col-8">
                            <select id="Study" name="Study" class="custom-select">
                                <option value="Teknik Infromatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Bisnis Digital">Bisnis Digital</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Skill Web & Programming</label>
                        <div class="col-8">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                                <label for="Skill[]_0" class="custom-control-label">HTML</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                                <label for="Skill[]_1" class="custom-control-label">CSS</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_2" type="checkbox" class="custom-control-input" value="Javascript">
                                <label for="Skill[]_2" class="custom-control-label">Javascript</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                                <label for="Skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                                <label for="Skill[]_4" class="custom-control-label">PHP</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                                <label for="Skill[]_5" class="custom-control-label">Python</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                                <label for="Skill[]_6" class="custom-control-label">Java</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="City" class="col-4 col-form-label">Tempat Domisili</label>
                        <div class="col-8">
                            <select id="City" name="City" class="custom-select" required="required">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Depok">Depok</option>
                                <option value="Depok">Tangerang</option>
                                <option value="Depok">Bekasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-gg-circle"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
</body>
</html>
<?php
// Ambil data yang dinput user
if (isset($_POST["kirim"])) {
    // Variable Input Form
    $nim = $_POST["NIM"];
    $namalengkap = $_POST["Nama"];
    $jeniskelamin = $_POST["JenisKelamin"];
    $programstudi = $_POST["Study"];
    $skill = $_POST["skill"];
    $kota = $_POST["City"];
    $email = $_POST["email"];
};
$nilai = 0;
foreach ($skill as $Data) {
    switch ($Data) {
        case 'HTML':
            $nilai += 10;
            break;
        case 'CSS':
            $nilai += 10;
            break;
        case 'Javascript':
            $nilai += 20;
            break;
        case 'RWD Bootstrap':
            $nilai += 20;
            break;
        case 'PHP':
            $nilai += 30;
            break;
        case 'Python':
            $nilai += 30;
            break;
        case 'Java':
            $nilai += 50;
            break;
        default:
            break;
    };
};
// Function Keterangan Lulus atau Tidak
function predikat($nim, $namalengkap, $jeniskelamin, $programstudi, $kota, $email, $skill, $nilai)
{
    echo <<<Hasil
            <h4>Hasil Yang Dikirim</h4>
            <p>NIM : $nim</p>
            <p>Nama : $namalengkap</p>
            <p>Jenis Kelamin : $jeniskelamin</p>
            <p>Program Studi : $programstudi</p>
            <p>Domisili : $kota</p>
            <p>Email : $email</p>
            <p>Nilai : $nilai</p>
            Skill : 
            Hasil;
    foreach ($skill as $data) {
        echo $data . " ";
    };
    if ($nilai === 0) {
        echo "<br>";
        echo "<p>Predikat : Tidak Memadai</p>";
    } elseif ($nilai > 0 && $nilai <= 40) {
        echo "<p>Predikat : Kurang</p>";
    } elseif ($nilai > 40 && $nilai <= 60) {
        echo "<p>Predikat : Cukup</p>";
    } elseif ($nilai > 60 && $nilai <= 100) {
        echo "<p>Predikat : Baik</p>";
    } elseif ($nilai > 100 && $nilai <= 170) {
        echo "<p>Predikat : Sangat Baik</p>";
    };
};
predikat($nim, $namalengkap, $jeniskelamin, $programstudi, $kota, $email, $skill, $nilai);
?>