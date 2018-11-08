-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2017 pada 02.35
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u194943051_dbhos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `nama`, `password`) VALUES
('admin', 'udin', 'admin'),
('teknisi', 'garox', 'teknisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bacaan`
--

CREATE TABLE IF NOT EXISTS `bacaan` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bacaan`
--

INSERT INTO `bacaan` (`id`, `judul`, `isi`) VALUES
(1, 'Apa itu "Ring of Fire"', 'Kepulauan Indonesia secara geografis  terletak pada pertemuan empat lempeng tektonik,   yakni lempeng Benua Asia, Benua Australia, lempeng Samudra Hindia dan Samudra Pasifik. Pada bagian selatan dan timur Indonesia terdapat sabuk vulkanik (volcanic arc) yang memanjang dari Pulau Sumatera – Jawa – Nusa Tenggara dan Sulawesi. Kondisi ini menyebabkan Indonesia memiliki potensi yang tinggi terhadap bencana seperti letusan gunung berapi, gempa bumi, tsunami, banjir, dan tanah longsor.\r\n<br>\r\nTerletak dalam jalur “ring of fire”, Indonesia memiliki jumlah gunung berapi paling banyak di dunia.  Di Indonesia tercatat memiliki 130  gunung berapi yang merupakan  10% dari jumlah keseluruhan dunia. Dari 130 gunung berapi tersebut, 17 di antaranya masih aktif. Cincin Api Pasifik atau Lingkaran Api Pasifik merupakan daerah yang sering mengalami gempa bumi dan letusan gunung berapi yang mengelilingi cekungan Samudra Pasifik. Dengan cakupan wilayah sepanjang 40.000 km daerah ini berbentuk tapal kuda. Lingkaran Api ini terdiri atas 452 gunung berapi dimana sekitar 75% menjadi rumah bagi gunung berapi dan tidak aktif. Sekitar 90% dari gempa bumi yang terjadi dan 81% dari gempa bumi terbesar terjadi di sepanjang Cincin Api ini. Daerah gempa berikutnya (5–6% dari seluruh gempa dan 17% dari gempa terbesar) adalah sabuk Alpide yang membentang dari Jawa ke Sumatra, Himalaya, Mediterania hingga ke Atlantika .'),
(2, 'Tips Siaga Gempa', 'Kebanyakan gempa bumi berasal dari kerak bumi yang tidak jauh dari bawah tanah. Kadang gempa juga bisa terjadi sangat jauh dibawah permukaan bumi.\r\nTanda-tanda terjadinya gempa:\r\n<br>\r\nDI DALAM BANGUNAN<br>\r\nSemua benda yang tergantung bergoyang dan berjatuhan, misalnya : lampu gantung, pigura, jam dinding, lukisan dan lai-lain. Semua benda yang berdiri atau terletak diatas meja bergeser dan berjatuhan, misalnya : TV, radio, jam, alat makan, kompor dll.\r\n<br><br>\r\nDI LUAR BANGUNAN<br>\r\nPohon, tiang listrik dan lampu jalan, jembatan serta gedung bergetar, bahkan jika terjadi getaran sangat kuat akan mengakibatkan tumbang dan roboh. Retakan/rekahan akan terlihat jelas pada permukaan tanah, dinding bangunan, dan jembatan.\r\n<br><br>\r\nSAAT TERJADI GEMPA<br>\r\nBILA BERADA DI DALAM BANGUNAN\r\n<br>\r\nBila memungkinkan, segera cari jalan keluar yang aman\r\nBersembunyi dibawah meja, untuk menghindari reruntuhan\r\nHindari berada di dekat lemari, lemari es dan benda-benda yang mungkin bisa rubuh\r\nJangan berlari keluar dengan tergesa-gesa/panic<br><br>\r\nBILA BERADA DI LUAR BANGUNAN<br>\r\n\r\nHindari bangunan tinggi, jembatan, tiang listrik, papan reklame\r\nJangan mendekati pohon-pohon yang tinggi\r\nCari tempat terbuka, atau tanah lapang<br><br>\r\nSETELAH TERJADI GEMPA<br>\r\n\r\nJangan segera masuk ke bangunan setelah terjadi gempa, karena kemungkinan akan terjadi gempa susulan\r\nSegera berikan pertolongan pertama terhadap korban gempa\r\nCari informasi lebih lanjut dari pihak yang berwenang tentang gempa yang terjadi\r\nGempa Bumi Dapat Diikuti Tsunami Apabila :\r\n<br>\r\nGetaran dirasakan sangat kuat.\r\nMenimbulkan kerusakan hebat.<br><br>\r\nAir laut surut secara drastic dan selang beberapa menit muncul suara gemuruh dari arah laut.'),
(3, 'Macam-Macam Gempa Bumi', 'Gempabumi yang merupakan fenomena alam yang bersifat merusak dan menimbulkan bencana dapat digolongkan menjadi empat jenis, yaitu:<br>\r\n\r\na. Gempabumi Vulkanik ( Gunung Api )\r\n<br>\r\nSeperti yang telah dijelaskan sebelumnya, bahwasanya gempabumi ini terjadi akibat adanya aktivitas magma yang biasa terjadi sebelum gunung  api meletus. Apabila keaktifannya semakin tinggi maka akanmenyebabkan timbulnya ledakan yang juga akan menimbulkan terjadinya gempabumi. Gempabumi tersebut hanya terasa di sekitar gunung api tersebut.\r\n<br><br>\r\nb. Gempabumi Tektonik\r\n<br>\r\nGempabumi ini disebabkan oleh adanya aktivitas tektonik, yaitu pergeseran lempeng lempeng tektonik secara mendadak yang mempunyai kekuatan dari yang sangat kecil hingga yang sangat besar.Gempabumi ini banyak menimbulkan kerusakan atau bencana alam di bumi, getaran gempabumi yang kuat mampu menjalar keseluruh bagian bumi.\r\n<br><br>\r\nc. Gempabumi Runtuhan\r\n<br>\r\nGempabumi ini biasanya terjadi pada daerah kapur ataupun pada daerah pertambangan, gempabumi ini jarang terjadi dan bersifat lokal.\r\n<br><br>\r\nd. Gempabumi Buatan\r\n<br>\r\nGempabumi buatan adalah gempabumi yang disebabkan oleh aktivitas dari manusia, seperti peledakan dinamit, nuklir atau palu yang dipukulkan ke permukaan bumi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lokasi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `skalar` float NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `waktu`, `lokasi`, `skalar`, `status`) VALUES
(5, '2017-11-22 13:44:09', '4', 1.05767, 'Aman'),
(12, '2017-12-09 00:44:56', '6', 6.57515, 'Bahaya'),
(3, '2017-11-11 09:23:14', '4', 5.50136, 'Bahaya'),
(7, '2017-11-22 15:49:19', '3', 3.33972, 'Siaga'),
(13, '2017-12-09 00:47:20', '1', 6.5316, 'Bahaya'),
(9, '2017-11-24 07:10:55', '5', 3.87618, 'Siaga'),
(10, '2017-11-24 07:13:22', '2', 5.505, ''),
(14, '2017-12-09 00:47:38', '2', 4.97849, 'Siaga'),
(15, '2017-12-09 00:48:00', '3', 7.49528, 'Bahaya'),
(16, '2017-12-09 08:57:03', '1', 6.36984, 'Bahaya'),
(17, '2017-12-09 08:57:18', '2', 4.75336, 'Siaga'),
(18, '2017-12-09 08:57:35', '3', 6.90641, 'Bahaya'),
(19, '2017-12-09 08:57:51', '4', 4.0685, 'Siaga'),
(20, '2017-12-09 08:58:07', '5', 2.41147, 'Siaga'),
(21, '2017-12-09 08:58:20', '6', 5.27412, 'Bahaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE IF NOT EXISTS `log` (
`id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `user`, `time`) VALUES
(1, 'admin', '2017-12-09 08:00:51'),
(2, 'teknisi', '2017-12-09 08:00:51'),
(3, 'teknisi', '2017-12-09 08:01:11'),
(4, 'admin', '2017-12-09 08:01:11'),
(5, 'admin', '2017-12-09 10:39:31'),
(6, 'admin', '2017-12-09 10:40:18'),
(7, 'teknisi', '2017-12-09 10:41:13'),
(8, 'admin', '2017-12-09 16:03:45'),
(9, 'admin', '2017-12-09 19:05:37'),
(10, 'admin', '2017-12-09 19:18:57'),
(11, 'admin', '2017-12-09 19:46:45'),
(12, 'admin', '2017-12-09 19:50:30'),
(13, 'admin', '2017-12-09 19:54:09'),
(14, 'admin', '2017-12-09 19:56:28'),
(15, 'admin', '2017-12-09 19:56:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `lokasi`) VALUES
(1, 'Jawa Barat'),
(2, 'Sumatra Utara'),
(3, 'Jawa Tengah'),
(4, 'Jawa Timur'),
(5, 'Sumatra Barat'),
(6, 'Sulawesi Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_stat` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_stat`, `status`) VALUES
(1, 'Aman'),
(2, 'Siaga'),
(3, 'Bahaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bacaan`
--
ALTER TABLE `bacaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id_stat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bacaan`
--
ALTER TABLE `bacaan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
