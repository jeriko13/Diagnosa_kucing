-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2022 pada 16.59
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnosa_kucing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$nLFyJgZxEjATMz87qgrITuHpM9HOGbtvFTa3LEdx5JMBt8u9y5wLG'),
(2, 'putri', '$2a$12$m7YBzG4KY7.B8rX5gJVTcuzixHa8Co49lTOQvxR9oWDjg3Vn1hH5G');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(3) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `gejala`) VALUES
(1, 'G01', 'Apakah Kucing Tidak Mau Makan?'),
(2, 'G02', 'Apakah Bulu Kucing Rontok?'),
(3, 'G03', 'Apakah Kucing Menderita Keropeng?\n'),
(4, 'G04', 'Apakah Kucing Mengalami Penebalan Kulit Telinga, Kaki, dan Hidung?'),
(5, 'G05', 'Apakah Kucing Mengalami Luka?'),
(6, 'G06', 'Apakah Kucing Sering Garuk- Garuk?'),
(7, 'G07', 'Apakah Kucing Mengalami Ruam Kulit Melingkar?'),
(8, 'G08', 'Apakah Bulu Terlihat Kusam?'),
(9, 'G09', 'Apakah Kucing Mengeluarkan Leleran Cairan Dari Telinga'),
(10, 'G10', 'Apakah Kucing Terlihat Lemah/Lesu?'),
(11, 'G11', 'Apakah Kucing Muntah?'),
(12, 'G12', 'Apakah Kucing Sering Menggoyangkan Kepala?'),
(13, 'G13', ' Apakah Kucing Mengeluarkan Kotoran Telinga Berwarna Coklat Tua?'),
(14, 'G14', 'Apakah Telinga Kucing Berbau?'),
(15, 'G15', 'Apakah Kotoran Lembek?'),
(16, 'G16', 'Apakah Kotoran Bercampur Lendir?'),
(17, 'G17', 'Apakah Kotoran Berbau?'),
(18, 'G18', 'Apakah Kotoran Bercampur Darah?'),
(19, 'G19', 'Apakah Terdapat Cacing Ada Di Kotoran?'),
(20, 'G20', 'Apakah Gusi Terlihat Tidak Sehat?'),
(21, 'G21', 'Apakah Bulu Patah?'),
(22, 'G22', 'Apakah Terlihat Parasit Di Sekitar Punggung?'),
(23, 'G23', 'Apakah Kucing Gelisah?'),
(24, 'G24', 'Apakah Kucing Menderita Anemia?'),
(25, 'G25', 'Apakah Kucing Sering Bersin?'),
(26, 'G26', 'Apakah Kotoran Kucing Banyak?'),
(27, 'G27', 'Apakah Kucing Flu?'),
(28, 'G28', 'Apakah Kucing Batuk?'),
(29, 'G29', 'Apakah Kucing Kesulitan Bernafas?'),
(30, 'G30', 'Apakah Hidung Berwarna Merah?'),
(31, 'G31', 'Apakah Mata Bengkak/Merah/Berair?'),
(32, 'G32', 'Apakah Kucing Menderita Radang Paru-Paru?'),
(33, 'G33', 'Apakah Kucing Bolak-Balik ke Litter Cat ?'),
(34, 'G34', 'Apakah Urin Bercampur Darah?'),
(35, 'G35', 'Apakah Kucing Terlihat Kesakitan?'),
(36, 'G36', 'Apakah Kucing Susah Kencing?'),
(37, 'G37', 'Apakah Kucing Demam?'),
(38, 'G38', 'Apakah Kotoran Mata Menumpuk?'),
(39, 'G39', 'Apakah Kucing Sesak Nafas?'),
(40, 'G40', 'Apakah Kucing Sariawan?'),
(41, 'G41', 'Apakah Kucing Menderita Selesma?'),
(42, 'G42', 'Apakah Kucing Mengalami Hipersalivasi?'),
(43, 'G43', 'Apakah Kucing Menderita Sinus?'),
(44, 'G44', 'Apakah Terjadi Kerusakan Selaput Lendir Mata?\r\n'),
(45, 'G45', 'Apakah Kucing Mengalami Diare?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(1, 'Anggora'),
(2, 'Persia'),
(3, 'Himalayan'),
(7, 'Jeri R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `namakucing`
--

CREATE TABLE `namakucing` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `namakucing`
--

INSERT INTO `namakucing` (`id`, `nama`, `jenis_id`) VALUES
(1, 'Andin', 1),
(2, 'Anton', 1),
(3, 'Putri', 2),
(4, 'Alex', 2),
(5, 'Ciko', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `kode_penyakit` varchar(3) NOT NULL,
  `penyakit` varchar(1000) NOT NULL,
  `solusi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `penyakit`, `solusi`) VALUES
(1, 'P01', 'Scabies', 'Hindarkan kucing dengan hewan lain untuk mencegah penularan, gunakan sampo khusus antitungau. Jaga kebersihan dengan membersihkan juga seluruh barang yang kerap bersentuhan dengan kucing, seperti tempat tidur, kalung, mainan, dan mangkok makanannya.\nSegera konsultasikan dengan dokter.'),
(2, 'P02', 'Jamur (Dermatophytosis)', 'Jaga kebersihan kandang, dan lingkungannya. Gunakan sampo anti jamur untuk kucing. Dapat juga menggunakan krim atau salep anti jamur. Agar semakin optimal bisa digunakan bersama obat anti jamur yang bisa diberikan secara oral oleh kucing. Segera hubungi dokter untuk pengunaan krim/salep dan obat oral.'),
(3, 'P03', 'Tungau Telinga(Ear Mite)', 'Isolasi kucing anda dengan hewan lain agar tidak terjadi penularan. Bersihkan tumpukan kotoran dengan membilas telinga dengan sangat lembut. Gunakan kapas yang ditetesi dengan baby oil untuk membersihkan telinga dan sisa-sisa kotoran. Lebih baik lagi menggunakan obat pembersih telinga khusus kucing, yang kemudian diteteskan ke dalam lubang telinga kucing. Segera hubungi dokter untuk saran obat yang tepat.'),
(4, 'P04', 'Colibacillosis', 'Berikan antibiotik seperti diantaranya tetracycline, neomycin dan streptomycin. Selain pemberian antibiotik atau sulfonamide, obat-obatan penunjang lainnya, sebaiknya diberikan juga infus dengan NaCl ﬁsiologis.\nSegera hubungi dokter terdekat.\n'),
(5, 'P05', 'Cacingan', 'Hentikan kucing dari berburu dan memakan hewan kecil yang menjadi penyebab cacingan. Jaga kebersihan dengan membersihkan kotak kotoran, karpet dan tempat tidur kucing untuk mencegah terulangnya infeksi. Kotoran kucing harus dibuang secepatnya. Berikan obat cacing untuk kucing seperti: Combantrin (pfizer), Vermox, Drontal Cat (bayer), Drontal Plus (bayer)\nSegera konsultasikan dengan dokter.\n'),
(6, 'P06', 'Kutu Bulu', 'Gunakan sisir serit kucing, Mandikan dengan sampo kutu, Buat semprotan kutu dari bahan-bahan alami seperti lavender dan teh chamomile. Berikan obat tetes anti kutu: Fipronil, Imidakloprid, Selamctin, Fluralaner. Berikan obat minum antikutu, Berikan obat kutu suntik. Konsultasikan dengan dokter untuk obat yang tepat.\n'),
(7, 'P07', 'Chlamydiosis /Chlamydia', 'Menjaga kebersihan kandang dan tempat kucing beraktifitas, lakukan vaksinasi untuk mengurangi keparahan ketika terjadi infeksi Chlamidya. Pemilik juga perlu mencuci tangan setelah membersihkan kotoran mata dan lendir dari kucing yang terinfeksi untuk mencegah penularan ke kucing lainnya. '),
(8, 'P08', 'Urolithiasis', 'Terapi yang diberikan adalah terapi cairan, terapi injeksi antibiotik oksitetrasiklin (SC), injeksi asam tolfenamat (SC), injeksi diuretik furosemid (IV), penambahan obat herbal kejibeling per oral, dan pembilasan kantung kemih menggunakan bantuan kateter.'),
(9, 'P09', 'Feline Calicivirus', 'Menjaga cairan tubuh dengan terapo cairan(infus), lakukan humidity  airways dengan menggunakan nebulizer. Dapat diberikan antibiotic spectrum luas (doxyxyxline, chloramphenicol)\nSegera konsultasikan dengan dokter.\nMenjaga cairan tubuh dengan terapo cairan(infus), lakukan humidity  airways dengan menggunakan nebulizer. Dapat diberikan antibiotic spectrum luas (doxyxyxline, chloramphenicol)\nSegeMenjaga cairan tubuh dengan terapo cairan(infus), lakukan humidity  airways dengan menggunakan nebulizer. Dapat diberikan antibiotic spectrum luas (doxyxyxline, chloramphenicol)\nSegera konsultasikan dengan dokter.\nra konsultasikan dengan dokter.\n'),
(10, 'P10', 'Feline Panleukopenia', 'Isolasi ketat dari kucing lain diperlukan untuk mencegah penyebaran virus.\nPerawatan berfokus untuk mencegah dehidrasi, pemberian nutrisi dan pencegahan infeksi sekunder. Meskipun tidak membunuh virus, berikan antibiotik.\nSegera konsultasikan dengan dokter.\n'),
(11, 'P11', 'Radang tenggorokan ( feline viral Rhinotracheitis)', 'Berikan Makanan Bernutrisi dan Air Minum yang Cukup, bersihkan Mata, Tubuh, dan Hidung Kucing, Hindari Memandikan Kucing, Biarkan Kucing Mendapatkan Cukup Istirahat Terakhir Jemur Kucing secara berkala.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi`
--

CREATE TABLE `relasi` (
  `id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `relasi`
--

INSERT INTO `relasi` (`id`, `penyakit_id`, `gejala_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 1, 3),
(4, 1, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 3, 10),
(11, 3, 11),
(12, 6, 6),
(13, 6, 7),
(14, 6, 8),
(15, 8, 9),
(16, 8, 10),
(17, 7, 9),
(18, 7, 10),
(19, 8, 11),
(20, 9, 9),
(21, 9, 10),
(22, 9, 11),
(23, 9, 12),
(24, 10, 13),
(25, 11, 13),
(50, 11, 14),
(51, 12, 13),
(52, 12, 14),
(53, 12, 15),
(54, 13, 16),
(55, 14, 16),
(56, 14, 17),
(57, 15, 18),
(58, 16, 18),
(59, 16, 19),
(60, 17, 20),
(61, 18, 20),
(62, 18, 21),
(63, 19, 20),
(64, 19, 21),
(65, 19, 23),
(66, 20, 20),
(67, 20, 21),
(68, 20, 22),
(69, 20, 23),
(76, 32, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `parent` varchar(3) DEFAULT NULL,
  `ya` varchar(3) DEFAULT NULL,
  `tidak` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`id`, `gejala_id`, `parent`, `ya`, `tidak`) VALUES
(1, 1, NULL, 'G02', 'G02'),
(2, 2, 'G01', 'G03', 'G05'),
(3, 3, 'G03', 'G04', 'G06'),
(4, 4, 'G04', 'G05', 'G07'),
(5, 5, 'G05', 'G06', 'G08'),
(6, 6, 'G06', 'P02', 'P02'),
(7, 7, 'G07', 'G04', 'G15'),
(8, 8, 'G08', 'G06', 'G16'),
(9, 9, 'G09', 'G09', 'G17'),
(10, 10, 'G10', 'G10', 'P04'),
(11, 11, 'G11', 'G11', 'G08'),
(12, 12, 'G12', 'G12', 'G10'),
(13, 13, 'G13', 'G13', 'G15'),
(14, 14, 'G14', 'G14', 'G16'),
(15, 15, 'G11', 'P03', 'G17'),
(16, 16, NULL, 'G05', 'G20'),
(17, 17, 'G12', 'G06', 'P05'),
(18, 18, NULL, 'G10', 'G25'),
(19, 19, 'G13', 'G21', 'G26'),
(20, 20, NULL, 'G22', 'G27'),
(21, 21, 'G14', 'G23', 'G28'),
(22, 22, 'G15', 'G24', 'G29'),
(23, 23, NULL, 'P06', 'G30'),
(24, 24, 'G16', 'G10', 'G31'),
(25, 25, 'G17', 'G11', 'G32'),
(26, 26, NULL, 'G33', 'P07'),
(27, 27, 'G18', 'G34', 'G05'),
(28, 28, 'G19', 'G35', 'G27'),
(29, 29, 'G20', 'G36', 'G37'),
(30, 30, NULL, 'P08', 'G38'),
(31, 31, 'G21', 'G10', 'G39'),
(32, 32, 'G22', 'G11', 'G40'),
(33, 33, 'G23', 'G37', 'P09'),
(34, 34, NULL, 'P10', 'G27'),
(35, 35, 'G25', NULL, 'G28'),
(36, 36, 'G26', NULL, 'G37'),
(38, 38, 'G27', NULL, 'G41'),
(39, 39, 'G28', NULL, 'G42'),
(40, 40, 'G29', NULL, 'G43'),
(41, 41, 'G30', NULL, 'G44'),
(43, 43, 'G31', NULL, 'P11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `namakucing` varchar(50) NOT NULL,
  `penyakit_kode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `jenis`, `namakucing`, `penyakit_kode`) VALUES
(1, 'Jeriko', 'Jeriko@gmail.com', 'Anggora', 'Ciko', 'P08'),
(2, 'Jeri Riswanto', 'jeriko@gmail.com', 'Persia', 'Putri', 'P03'),
(3, 'Jeri ko ', 'jeriko@cekpedia.com', 'Anggora', 'Anton', 'P03'),
(4, 'PUTRI', 'putri@gmail.com', 'Anggora', 'Alex', 'P02'),
(5, 'Putri Endah Cahyani', 'PutriEndahCahyani@gmail.com', 'Anggora', 'Ciko', 'P02'),
(6, 'Jeri Riswanto', 'Jeririswanto@gmail.com', 'Anggora', 'Anton', 'P01'),
(7, 'Jeriko', 'jeriko@cekpedia.com', 'Persia', 'Anton', 'P03'),
(8, 'Jeri Riswanto', 'jeremyrizky13@gmail.com', 'Anggora', 'Andin', 'P03'),
(9, 'Jeri R', 'jeririswanto13@gmail.com', 'Anggora', 'Ciko', 'P05'),
(10, 'Jeri R', 'Jeririswanto@gmail.com', 'Anggora', 'Anton', 'P06'),
(11, 'Jeri R', 'jeriko@cekpedia.com', 'Persia', 'Andin', 'P04'),
(12, 'antonius sigarlaki', 'antoniussigarlaki@gmail.com', 'Anggora', 'Anton', 'P03'),
(13, 'Jeri Riswanto13', 'jeri.yabuki13@gmail.com', 'Anggora', 'Andin', 'P01'),
(41, 'mputtttt', 'putri@gmail.com', 'Anggora', 'Putri', 'P01'),
(42, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Ciko', 'P01'),
(43, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P06'),
(44, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Ciko', 'P05'),
(45, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Ciko', ''),
(46, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(47, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Ciko', ''),
(48, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', ''),
(49, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(50, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Ciko', 'P02'),
(51, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Persia', 'Ciko', 'P01'),
(52, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Himalayan', 'Ciko', 'P01'),
(53, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P02'),
(54, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P08'),
(55, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(56, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(57, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(58, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(59, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Persia', 'Andin', ''),
(60, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(61, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(62, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(63, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', ''),
(64, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(65, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P10'),
(66, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(67, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(68, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(69, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P04'),
(70, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(71, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(72, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(73, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(74, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', ''),
(75, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P02'),
(76, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(77, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Himalayan', 'Anton', 'P01'),
(78, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(79, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P02'),
(80, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(81, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P02'),
(82, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P02'),
(83, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P02'),
(84, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Anton', 'P02'),
(85, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(86, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Himalayan', 'Ciko', 'P02'),
(87, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(88, 'rama', 'fifahani03', 'Himalayan', 'Anton', ''),
(89, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(90, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(91, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P02'),
(92, 'Hani', 'fifahani03@gmail.com', 'Anggora', 'Ciko', 'P01'),
(93, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Persia', 'Ciko', 'P04'),
(94, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Persia', 'Ciko', 'P04'),
(95, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Himalayan', 'Ciko', 'P04'),
(96, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P01'),
(97, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Ciko', ''),
(98, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Ciko', 'P11'),
(99, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Persia', 'Ciko', 'P01'),
(100, 'ANDREA KUSUMASTUTI', 'andreaksmstti@gmail.com', 'Anggora', 'Andin', 'P04'),
(101, 'Jeri R', 'jeriko@cekpedia.com', 'Anggora', 'Andin', 'P02'),
(102, 'Jeri R', 'wendysaputra1999@gmail.com', 'Persia', 'Anton', 'P05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `namakucing`
--
ALTER TABLE `namakucing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `namakucing`
--
ALTER TABLE `namakucing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=819;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
