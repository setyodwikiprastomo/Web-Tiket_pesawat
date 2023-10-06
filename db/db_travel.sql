-- TUGAS PRAKTIK ASASEMENT JUNIOR WEB DEVELOPER
-- https://www.phpmyadmin.net/
-- Host: localhost
-- Waktu pembuatan: 05 Agu 2022 pada 11.30


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesawat`
--

CREATE TABLE `tb_pesawat` (
  `id` int(11) NOT NULL,
  `kelasPenumpang` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `hargaTiket` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bus`
/*data dumping adalah proses melakukan “dump” atau mengeluarkan data dari database ke text file.
Tujuannya adalah untuk proses copy data (misal dari database bagian development ke database bagian production)*/
--

INSERT INTO `tb_pesawat` (`id`, `kelasBangku`, `keterangan`, `hargaTiket`, `path`) VALUES
(1, 'ekonomi', 'Fasilitas ekonomi : AC', '100000', 'assets/img/ekonomi.jpg'),
(2, 'bisnis', 'Fasilitas bisnis : AC, WC, Ceminal', '150000', 'assets/img/bisnis.jpg'),
(3, 'eksekutif', 'Fasilitas eksekutif : AC, WC, Cemilan, Makan', '200000', 'assets/img/eksekutif.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
/*Struktur database,kita perlu data yang benar supaya data yang dihasilkan tidak salah atau tertinggal. 
Data yang sudah terkumpul berikutnya dibuat menjadi sistem basis data yang didalamnya ada beberapa bagian*/
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `kelasBangku` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlahPenumpang` varchar(255) NOT NULL,
  `jumlahPenumpangLansia` varchar(255) NOT NULL,
  `hargaTiket` varchar(255) NOT NULL,
  `totalHarga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama`, `nik`, `hp`, `kelasBangku`, `tanggal`, `jumlahPenumpang`, `jumlahPenumpangLansia`, `hargaTiket`, `totalHarga`) VALUES
(1, 'Setyo Dwiki Prastomo', '2110631250064221', '085959648624', 'ekonomi', '2022-07-08', '1', '2', '100000');
(2, 'Setyo Dwiki Prastomo', '2110631250064221', '085959648624', 'bisnis', '2022-07-08', '1', '2', '150000');
(3, 'Setyo Dwiki Prastomo', '2110631250064221', '085959648624', 'eksekutif', '2022-07-08', '1', '2', '200000');

--
-- Indeks for dumped table
--

--
-- Indeks untuk tabel `tb_bus`
--
ALTER TABLE `tb_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bus`
--
ALTER TABLE `tb_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
