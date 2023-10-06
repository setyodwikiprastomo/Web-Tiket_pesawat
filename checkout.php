<?php
require_once 'koneksi.php';

// Ambil Input Form
$nama             = $_POST["nama"];
$nik              = $_POST["nik"];
$hp               = $_POST["hp"];
$kelasBangku   = $_POST["kelasBangku"];
$tanggal          = $_POST["tanggal"];
$jumlahPenumpang  = $_POST["jumlahPenumpang"];
$jumlahPenumpanglansia  = $_POST["jumlahPenumpangLansia"];
$RuteKeberangkatan  = $_POST["RuteKeberangkatan"];
$RuteKedatangan  = $_POST["RuteKedatangan"];
$Maskapai  = $_POST["Maskapai"];


// untuk mengecek nilai yang di input di form
//var_dump($_POST);

$hargaTiket = 0;
if ($kelasBangku == "ekonomi")
  $hargaTiket = 200000;
else if ($kelasBangku == "bisnis")
  $hargaTiket = 350000;
else if ($kelasBangku == "eksekutif")
  $hargaTiket = 500000;

// Keberangkatan
if ($RuteKeberangkatan == "Soekarno Hatta(CGK)-Jakarta")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Husein Sastranegara (BDO)-Bandung")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Ngurah Rai (DPS)-Denpasar")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Halim Perdanakusuma (HLP)-Jakarta1")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Abdul Rachman Saleh (MLG)-Malang")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Jenderal Ahmad Yani (SRG)-Semarang")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Juanda (SUB)-Sidoarjo")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Adisucipto (JOG)-Yogyakarta")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Kualanamo (KNO)-Medan")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Supadio (PNK)-Palangkaraya")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Muhammad Kharuddin (SWQ)-Sumbawa")
    $HargaKeberangkatan = 10.000;
else if ($RuteKeberangkatan == "Frans Kaisiepo (BIK)-Biak")
    $HargaKeberangkatan = 10.000;
// Kedatangan
if ($RuteKedatangan == "Soekarno Hatta(CGK)-Jakarta")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Husein Sastranegara (BDO)-Bandung")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Ngurah Rai (DPS)-Denpasar")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Halim Perdanakusuma (HLP)-Jakarta1")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Abdul Rachman Saleh (MLG)-Malang")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Jenderal Ahmad Yani (SRG)-Semarang")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Juanda (SUB)-Sidoarjo")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Adisucipto (JOG)-Yogyakarta")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Kualanamo (KNO)-Medan")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Supadio (PNK)-Palangkaraya")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Muhammad Kharuddin (SWQ)-Sumbawa")
    $HargaKedatangan = 10.000;
else if ($RuteKedatangan == "Frans Kaisiepo (BIK)-Biak")
    $HargaKedatangan = 10.000;
// Hitung Total Harga
if ($jumlahPenumpanglansia == 0)
  $totalHarga = $hargaTiket * $jumlahPenumpang;
else if ($jumlahPenumpanglansia != 0)
  $totalHarga = $hargaTiket * $jumlahPenumpang * $jumlahPenumpanglansia;

if (isset($_POST['insert'])) {
  $table = "tb_pesanan";

  $nama             = $_POST["modal-nama"];
  $nik              = $_POST["modal-nik"];
  $hp               = $_POST["modal-hp"];
  $kelasBangku         = $_POST["modal-kelasBangku"];
  $tanggal         = $_POST["modal-tanggal"];
  $JadwalKeberangkatan          = $_POST["modal-JadwalKeberangkatan"];
  $jumlahPenumpang = $_POST["modal-jumlahPenumpang"];
  $jumlahPenumpanglansia = $_POST["modal-jumlahPenumpangLansia"];
  $hargaTiket       = $_POST["modal-hargaTiket"];
  $total            = $_POST["modal-total"];
  $diskon           = $_POST["modal-diskon"];
  $totalHarga       = $_POST["modal-totalHarga"];
  $RuteKeberangkatan       = $_POST["modal-RuteKeberangkatan"];
  $RuteKedatangan       = $_POST["modal-RuteKedatangan"];
  $Maskapai     = $_POST["modal-Maskapai"];
  $HargaKeberangkatan     = $_POST["modal-HargaKeberangkatan"];
  $HargaKedatangan     = $_POST["modal-HargaKedatangan"];



  // Insert Data
  $query  = "INSERT INTO `tb_pesanan` (`nama`, `nik`, `hp`, `kelasBangku`, `tanggal`, `jumlahPenumpang`, `jumlahPenumpanglansia`, `hargaTiket`, `total`, `diskon`, `totalHarga`,'RuteKeberangkatan','RuteKedatangan','Maskapai','HargaKeberangkatan','HargaKedatangan') VALUES ('$nama', '$nik', '$hp', '$kelasBangku', '$tanggal', '$jumlahPenumpang', '$jumlahPenumpanglansia', '$hargaTiket', '$total', '$diskon', '$totalHarga','$RuteKeberangkatan','$RuteKedatangan','$Maskapai','$HargaKeberangkatan','$HargaKedatangan') ";
  $result = $db->query($query);

  // BALIK KE HOME
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket Pesawat | Checkout</title>
  <!-- Boostrap5 CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
  <!-- End Boostrap5 CSS -->

</head>

<body>
  <!-- Form Checkout -->
  <form action="" method="post" accept-charset="utf-8" style="font-family: comic-sans-ms;" class="p-4 shadow p-3 mb-5 bg-body rounded border border-5 border-secondary position-absolute start-50 top-50 translate-middle">
    <h3 class="pb-3">Form Checkout</h3>
    <div class="mb-3 row">
      <label for="nama" class="col-sm-6 col-form-label">Nama Lengkap</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nama'] ?>" name="modal-nama" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="nik" class="col-sm-6 col-form-label">Nomor Identitas</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['nik'] ?>" name="modal-nik" minlength="16" maxlength="16" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="hp" class="col-sm-6 col-form-label">Nomor Telephone</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['hp'] ?>" name="modal-hp" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="kelasBangku" class="col-sm-6 col-form-label">Kelas Bangku</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['kelasBangku'] ?>" name="modal-kelasBangku" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="tanggal" class="col-sm-6 col-form-label">Jadwal Keberangkatan</label>
      <div class="col-sm-6">
        <input type="date" readonly class="form-control-plaintext" value="<?= $_POST['tanggal'] ?>" name="modal-tanggal" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="jumlahPenumpang" class="col-sm-6 col-form-label">Jumlah Penumpang</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['jumlahPenumpang'] ?>" name="modal-jumlahPenumpang" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="jumlahPenumpangLansia" class="col-sm-6 col-form-label">Jumlah Penumpang Lansia</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['jumlahPenumpangLansia'] ?>" name="modal-jumlahPenumpangLansia" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="RuteKeberangkatan" class="col-sm-6 col-form-label">Rute Keberangkatan</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['RuteKeberangkatan'] ?>" name="modal-RuteKeberangkatan" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="RuteKedatangan" class="col-sm-6 col-form-label">Rute Kedatangan</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['RuteKedatangan'] ?>" name="modal-RuteKedatangan" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="Maskapai" class="col-sm-6 col-form-label">Maskapai</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="<?= $_POST['Maskapai'] ?>" name="modal-Maskapai" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="hargaTiket" class="col-sm-6 col-form-label">Harga Tiket</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $hargaTiket ?>" name="modal-hargaTiket" value="">
      </div>
    </div>

    <div class="mb-3 row">
      <label for="totalHarga" class="col-sm-6 col-form-label">Total Bayar</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" value="Rp. <?= $totalHarga ?>" name="modal-totalHarga" value="">
      </div>
    </div>

    <div class="text-center">
      <a href="index.php" class="btn btn-dark">Cancel</a>
      <?php
        $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
      ?>
      <a href="index.php" type="submit" class="btn btn-dark" id="bayar" name="insert" onclick="berhasil()">Bayar</a>
    </div>
  </form>
  <!-- End Form Checkout -->
</body>

</html>
<!-- Alert tombol Bayar -->
<script>
  function berhasil() {
    alert("Teruntuk konsumen yang kami hormati. Terimakasih banyak atas pembelian Tiket Pesawat yang telah kamu lakukan. Satu pesanan Anda, berarti banyak bagi perkembangan bisnis kami. Selamat menikmati penerbangan safe flight :) ");
  }
</script>
<!-- End Alert tombol Bayar -->
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>