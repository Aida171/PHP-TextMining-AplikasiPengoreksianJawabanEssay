<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2>Home</h2>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
<div class="card" style="margin-top: 50px">
<div class="card-header" data-background-color="blue">
<h4 class="title">Biodata Pendaftar</h4>
<p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
</div>
<div class="card-content table-responsive">

<h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
<table class="table table-hover">
<?php 
include 'db_con.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$jarak = $_POST['jarak'];
$gaji = $_POST['gaji'];

mysqli_query($conn, "SELECT * FROM calon_siswa WHERE nisn= '$nisn'");




?>
    <tbody>
        <tr>
            <td><b>NISN</b></td>
            <td>: <?php echo $nisn; ?></td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tempat_lahir.", ".$tanggal_lahir;; ?>, <?php isset($_SESSION['tempat_lahir'])  ?  print($_SESSION['tanggal_lahir']) : "2009-01-01"; ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td>: <?php echo $alamat; ?></td>
        </tr>
        
        <tr>
            <td><b>Jarak Ke Sekolah</b></td>
            <td>: <?php echo $jarak; echo " KM";?></td>
        </tr>
    
        <tr>
            <td><b>Gaji Orang Tua</b></td>
            <td>: <?php echo $gaji; ?></td>
        </tr>
    </tbody>
</table>

    </tbody>
</table>


</body>
</html>