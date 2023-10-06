<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket Pesawat | Beli Tiket</title>
  <!-- Boostrap5 CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/carousel.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- End Boostrap5 CSS -->
</head>

<body>
  <!-- Form Tiket -->
  <form action="checkout.php" style="font-family: comic-sans-bold;" class="p-4 shadow p-3 mb-5 bg-body rounded border border-5 border-secondary position-absolute start-50 top-50 translate-middle" method="post">
    <h3 class="pb-3">Form Pemesanan</h3>

    <!-- Kolom Input -->
    <div class="mb-3 row">
      <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" id="nama" required name="nama">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nik" class="col-sm-4 col-form-label">Nomor Identitas</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" id="nik" minlength="16" required name="nik">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="hp" class="col-sm-4 col-form-label">Nomor Telephone</label>
      <div class="col-sm-6">
        <input type="text" class="form-control border border-dark border-1" id="hp" name="hp" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="RuteKeberangkatan" class="col-sm-4 col-form-label">Rute Keberangkatan</label>
      <div class="col-sm-6">
        <select name="RuteKeberangkatan" id="RutePesawat" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option selected>Pilih</option>
          <option value="Soekarno Hatta(CGK)-Jakarta">Soekarno Hatta(CGK)-Jakarta</option>
          <option value="Husein Sastranegara (BDO)-Bandung">Husein Sastranegara (BDO)-Bandung</option>
          <option value="Ngurah Rai (DPS)-Denpasar">Ngurah Rai (DPS)-Denpasar</option>
          <option value="Halim Perdanakusuma (HLP)-Jakarta1">Halim Perdanakusuma (HLP)-Jakarta1</option>
          <option value="Abdul Rachman Saleh (MLG)-Malang">Abdul Rachman Saleh (MLG)-Malang</option>
          <option value="Jenderal Ahmad Yani (SRG)-Semarang">Jenderal Ahmad Yani (SRG)-Semarang</option>
          <option value="Juanda (SUB)-Sidoarjo">Juanda (SUB)-Sidoarjo</option>
          <option value="Adisucipto (JOG)-Yogyakarta">Adisucipto (JOG)-Yogyakarta</option>
          <option value="Kualanamo (KNO)-Medan">Kualanamo (KNO)-Medan</option>
          <option value="Supadio (PNK)-Palangkaraya">Supadio (PNK)-Palangkaraya</option>
          <option value="Muhammad Kharuddin (SWQ)-Sumbawa">Muhammad Kharuddin (SWQ)-Sumbawa</option>
          <option value="Frans Kaisiepo (BIK)-Biak">Frans Kaisiepo (BIK)-Biak</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="RuteKedatangan" class="col-sm-4 col-form-label">Rute Kedatangan</label>
      <div class="col-sm-6">
        <select name="RuteKedatangan" id="RutePesawat" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option selected>Pilih</option>
          <option value="Soekarno Hatta(CGK)-Jakarta">Soekarno Hatta(CGK)-Jakarta</option>
          <option value="Husein Sastranegara (BDO)-Bandung">Husein Sastranegara (BDO)-Bandung</option>
          <option value="Ngurah Rai (DPS)-Denpasar">Ngurah Rai (DPS)-Denpasar</option>
          <option value="Halim Perdanakusuma (HLP)-Jakarta1">Halim Perdanakusuma (HLP)-Jakarta1</option>
          <option value="Abdul Rachman Saleh (MLG)-Malang">Abdul Rachman Saleh (MLG)-Malang</option>
          <option value="Jenderal Ahmad Yani (SRG)-Semarang">Jenderal Ahmad Yani (SRG)-Semarang</option>
          <option value="Juanda (SUB)-Sidoarjo">Juanda (SUB)-Sidoarjo</option>
          <option value="Adisucipto (JOG)-Yogyakarta">Adisucipto (JOG)-Yogyakarta</option>
          <option value="Kualanamo (KNO)-Medan">Kualanamo (KNO)-Medan</option>
          <option value="Supadio (PNK)-Palangkaraya">Supadio (PNK)-Palangkaraya</option>
          <option value="Muhammad Kharuddin (SWQ)-Sumbawa">Muhammad Kharuddin (SWQ)-Sumbawa</option>
          <option value="Frans Kaisiepo (BIK)-Biak">Frans Kaisiepo (BIK)-Biak</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="Maskapai" class="col-sm-4 col-form-label">Maskapai</label>
      <div class="col-sm-6">
        <select name="Maskapai" id="Maskapai" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option selected>Pilih</option>
          <option value="Garuda Indonesia">Garuda Indonesia</option>
          
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="kelasBangku" class="col-sm-4 col-form-label">kelas Bangku</label>
      <div class="col-sm-6">
        <select name="kelasBangku" id="kelasPesawat" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option selected>Pilih</option>
          <option value="ekonomi">Ekonomi</option>
          <option value="bisnis">Bisnis</option>
          <option value="eksekutif">Eksekutif</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="tanggal" class="col-sm-4 col-form-label">Jadwal Keberangkatan</label>
      <div class="col-sm-6">
        <input type="date" class="form-control border border-dark border-1" name="tanggal" id="tanggal" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="jumlahPenumpang" class="col-sm-4 col-form-label">Jumlah Penumpang</label>
      <div class="col-sm-6">
        <select name="jumlahPenumpang" id="jumlahPenumpang" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option value="" selected>Pilih</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
  <label for="jumlahPenumpangLansia" class="col-sm-4 col-form-label">Jumlah Penumpang Lansia</label> 
        <div class="col-sm-6">
        <select name="jumlahPenumpangLansia" id="jumlahPenumpangLansia" class="form-select border border-dark border-1" aria-label="Default select example" required>
          <option value="" selected>Pilih</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
    <!-- End Kolom Input -->

    <!-- Harga Total -->
    <div class="mb-3 row">
      <label for="totalHarga" class="col-sm-4 col-form-label">Total Bayar</label>
      <div class="col-sm-6">
        <input type="text" readonly class="form-control-plaintext" id="totalHarga" value="">
      </div>
    </div>
    </div>
    <!-- End Harga Total -->

    <!-- Checklist -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="persetujuan" required="">
      <label class="form-check-label col-sm-10" for="persetujuan">
        Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan
      </label>
    </div>
    <!-- End Checklist -->

    <!-- Button -->
    <div class="text-center mt-3">
      <button id="hitung" type="submit" class="btn btn-dark">Hitung total bayar</button>
      <button class="btn btn-dark col-sm-2">Pesan Tiket</button>
      <a href="index.php" class="btn btn-dark col-sm-2">Cancel</a>
    </div>
    <!-- End Button -->
  </form>
  <!-- End Form Tiket -->

  <!-- Boostrap5 JS -->
  <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- End Boostrap5 JS -->

  <script>
    document.getElementById("hitung").onclick = function() {
      hitungTotalHarga()
    };

    function formatHarga(hargaTiket,HargaKedatangan,HargaKeberangkatan) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0,
      }).format(harga);
    }

    function hitungTotalHarga() {

      // Ambil Data Dari Input
      nama = document.getElementById("nama").value;
      nik = document.getElementById("nik").value;
      hp = document.getElementById("hp").value;
      kelasBangku = document.getElementById("kelasBangku").value;
      JadwalKeberangkatan = document.getElementById("JadwalKeberangkatan").value;
      jumlahPenumpang = document.getElementById("jumlahPenumpang").value;
      jumlahPenumpangLansia = document.getElementById("jumlahPenumpangLansia").value;
      RuteKeberangkatan = document.getElementById("RuteKeberangkatan").value;
      RuteKedatangan = document.getElementById("RuteKedatangan").value;
      Maskapai = document.getElementById("Maskapai").value;
      

      

      // Harga Tiket
      $hargaTiket = 0;
      if ($kelasBangku == "ekonomi")
       $hargaTiket = 200000;
      else if ($kelasBangku == "bisnis")
       $hargaTiket = 350000;
      else if ($kelasBangku == "eksekutif")
        $hargaTiket = 500000;

      // Harga tiket Kedatangan
      $HargaKedatangan = 0;
      if ($RuteKedatangan == "Soekarno Hatta(CGK)-Jakarta")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Husein Sastranegara (BDO)-Bandung")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Ngurah Rai (DPS)-Denpasar")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Halim Perdanakusuma (HLP)-Jakarta1")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Abdul Rachman Saleh (MLG)-Malang")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Jenderal Ahmad Yani (SRG)-Semarang")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Juanda (SUB)-Sidoarjo")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Adisucipto (JOG)-Yogyakarta")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Kualanamo (KNO)-Medan")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Supadio (PNK)-Palangkaraya")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Muhammad Kharuddin (SWQ)-Sumbawa")
      $HargaKedatangan = 10000;
      else if ($RuteKedatangan == "Frans Kaisiepo (BIK)-Biak")
      $HargaKedatangan = 10000;
      
      // Harga tiket Keberangkatan
      $HargaKeberangkatan = 0;
      if ($RuteKeberangkatan == "Soekarno Hatta(CGK)-Jakarta")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Husein Sastranegara (BDO)-Bandung")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Ngurah Rai (DPS)-Denpasar")
      $HargaKeberangkatan = 10000;
      else if ($RuteKedatangan == "Halim Perdanakusuma (HLP)-Jakarta1")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Abdul Rachman Saleh (MLG)-Malang")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Jenderal Ahmad Yani (SRG)-Semarang")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Juanda (SUB)-Sidoarjo")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Adisucipto (JOG)-Yogyakarta")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Kualanamo (KNO)-Medan")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Supadio (PNK)-Palangkaraya")
      $HargaKeberangkatan = 10000;
      else if ($RuteKeberangkatan == "Muhammad Kharuddin (SWQ)-Sumbawa")
      $HargaKedatangan = 10000;
      else if ($RuteKeberangkatan == "Frans Kaisiepo (BIK)-Biak")
      $HargaKeberangkatan = 10000;


      // Hitung Total Harga
      totalHarga = hargaTiket * jumlahPengunjung * HargaKeberangkatan * HargaKedatangan;

      document.getElementById("totalHarga").value = formatHarga(totalHarga);
    }
  </script>
</body>

</html>