<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<?php
// Buat Array asosiatif nilai
$nilai1 = ["id"=>1, "nim"=>"01101", "uts"=>80, "uas"=>84, "tugas"=>78];
$nilai2 = ["id"=>2, "nim"=>"01102", "uts"=>85, "uas"=>87, "tugas"=>80];
$nilai3 = ["id"=>3, "nim"=>"01103", "uts"=>90, "uas"=>89, "tugas"=>82];
$nilai4 = ["id"=>4, "nim"=>"01104", "uts"=>100, "uas"=>90, "tugas"=>84];

// Buat Array Multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
echo $kumpulan_nilai[0]["nim"];

//Buat Daftar Nilai Siswa Menggunakan Boostrap 4.6 Tables Dark
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">

                        <body>
                            <div class="container">
                                <h1 class="text-center"> Daftar Nilai Siswa </h1>
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">NO</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">UTS</th>
                                            <th scope="col">UAS</th>
                                            <th scope="col">TUGAS</th>
                                            <th scope="col">NILAI AKHIR</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($kumpulan_nilai as $nilai) : ?>

                                            <tr>
                                                <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                                                <td><?php echo $nilai["id"] ?></td>
                                                <td><?php echo $nilai["nim"] ?></td>
                                                <td><?php echo $nilai["uts"] ?></td>
                                                <td><?php echo $nilai["uas"] ?></td>
                                                <td><?php echo $nilai["tugas"] ?></td>
                                                <td><?= number_format($nilai_akhir, 2, ",", ".") ?></td>
                                            </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card -->
                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.php'
?>