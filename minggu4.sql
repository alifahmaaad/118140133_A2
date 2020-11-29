-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2020 pada 06.11
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minggu4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `id`) VALUES
(9, 'Patch VALORANT 1.12', 'PEMBARUAN MODE KOMPETITIF\r\n\r\n    Lencana Pangkat Babak dinonaktifkan di dalam game selagi kami menyelidiki potensi masalah yang mengakibatkan gangguan performa di dalam game. Lencana Pangkat Babakmu akan tetap ditampilkan di lobi Kompetitif, pemuatan peta, dan layar akhir pertandingan.\r\n        Tim Kompetitif akan terus menyelidiki sistem demi merancang perbaikan menyeluruh dalam patch berikutnya.\r\n        Sampaikan apresiasi kepada Kevin.\r\n\r\nPEMBARUAN SISTEM GAME\r\n\r\nPengamat\r\n\r\n    Pengamat tak lagi mendengar suara ping\r\n    Penyempurnaan visibilitas sudut pandang dalam area yang cukup terang\r\n    Penambahan trik Modifikasi Status Game agar moderator bisa menyesuaikan berbagai aspek game (statistik pemain, uang, dll) dalam pengaturan turnamen\r\n    Penarikan kembali perubahan warna tim tetap dari patch 1.11\r\n        Hal ini menyebabkan kebingungan karena orang-orang mulai mengenal merah sebagai penyerang dan hijau sebagai pertahanan.\r\n        Terdapat bug yang menyebabkan elemen UI tertentu ditampilkan dengan warna yang tak salah\r\n        Kami berencana menghadirkan kembali fitur ini ke depannya setelah menyelesaikan penambahan dukungan untuk warna tim kustom.\r\n\r\nPEMBARUAN SOSIAL\r\n\r\n    Kami sudah merancang ulang pengalihan Buka/Tutup Kelompok untuk memudahkan pemain memahami apakah mereka berada dalam kelompok terbuka/tertutup\r\n    Pengamat kini ditampilkan sebagai \"dalam game\" di panel sosial\r\n    Pengamat kini bisa melihat dan mengetik di chat /all dalam game kustom\r\n\r\nPERFORMA PERMAINAN\r\n\r\n    Penambahan antarmuka pengguna baru untuk pengamat game kustom selama pemilihan karakter\r\n', 1),
(10, 'Patch VALORANT 1.11', 'Skye memasuki VALORANT dan akan bisa dimainkan di semua antrean.\r\n\r\n(Baru-baru ini, salah seorang dari kalian bertanya, \"kenapa namanya \'Skye\' jika dia tak bisa terbang?\" Jadi, katakan pada dirimu sendiri, \"Ini hanya game, santai saja.\")\r\n\r\nSemua Sentinel dan Inisiator kami mendapatkan penyesuaian pada peran dan kemampuan mereka, mulai dari First Strike. Baca baik-baik pemikiran kami di bawah ini. Pembaruan pada aturan ekonomi pertandingan kami (cara kredit didistribusikan setelah satu ronde) seharusnya mengubah pengambilan keputusan saat peluru atau persenjataanmu dipertaruhkan.\r\n\r\nApa ada yang menginginkan hal ini? Seperti inilah model tampilan Kidal.\r\nPatch_Notes_Highlights_1_11.jpg\r\nPEMBARUAN AGEN\r\nV_AGENTS_587x900_ALL_Skye_Banner.png\r\nSKYE bergabung ke dalam jajaran agen VALORANT!\r\n\r\n    Skye, seperti semua Agen baru mulai sekarang, akan bisa digunakan dalam kompetisi e-sport resmi (misalnya, First Strike) setelah berada dua minggu di antrean Kompetitif\r\n', 1),
(11, 'Pisang', 'Pisang adalah nama umum yang diberikan pada tumbuhan terna raksasa berdaun besar memanjang dari suku Musaceae. Beberapa jenisnya menghasilkan buah konsumsi yang dinamakan sama. Buah ini tersusun dalam tandan dengan kelompok-kelompok tersusun menjari yang disebut sisir', 2),
(12, 'Apel', 'Apel adalah jenis buah-buahan, atau buah yang dihasilkan dari pohon buah apel. Buah apel biasanya berwarna merah kulitnya jika masak dan, namun bisa juga kulitnya berwarna hijau atau kuning. Kulit buahnya agak lembek, daging buahnya keras. Buah ini memiliki beberapa biji di dalamnya', 2),
(13, 'Rendang', 'Rendang atau randang adalah masakan daging yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama menggunakan aneka rempah-rempah dan santan. Proses memasaknya memakan waktu berjam-jam hingga yang tinggal hanyalah potongan daging berwarna hitam pekat dan dedak. ', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `role` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role`) VALUES
(1, 'admin', 'admin', 'Admin', 1),
(2, 'User1', 'user1', 'user1', 2),
(3, 'user2', 'user2', 'user2', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
