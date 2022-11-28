-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 05:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi_buku`
--

CREATE TABLE `koleksi_buku` (
  `id_buku` int(3) NOT NULL,
  `judul_buku` text NOT NULL,
  `deskripsi` text NOT NULL,
  `image` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koleksi_buku`
--

INSERT INTO `koleksi_buku` (`id_buku`, `judul_buku`, `deskripsi`, `image`, `link`) VALUES
(1, 'Belajar Sistem Kontrol Soal & Pembahasan', 'Buku ini terdiri dari 5 bab, dimana secara garis besar membahas tentang konsep dan istilah yang ada pada sistem kontrol, Transformasi Laplace dan invers Transformasi Laplace, penyelesaian dan cara mencari fungsi alih sistem, kriteria performansi sistem, respon sistem, serta pengaruh pemberian kontroler terhadap respon sistem.', 'https://drive.google.com/file/d/1-nT4a7Xr7eZynykGu7XX1N5LiS52iJ62/view?usp=share_link', 'https://drive.google.com/file/d/1mLrobG3y8MH0SQJ3BEo19R0IVH0PSMq3/view?usp=share_link'),
(2, 'Dasar Teknik Kontrol', 'Sebuah sistem kontrol selalu terdiri minimal dari sebuah komponen yang diatur (Plant). Komponen ini sering pula dikenal sebagai proses sistem atau ringkasnya dinamakan PROSES.', 'https://drive.google.com/file/d/1otuocPed2fwCxk9OZixqXiCLC9-LNZzQ/view?usp=share_link', 'https://drive.google.com/file/d/1j0a0kVHgPja_QKBUEIAGJxqElws6eOHv/view?usp=share_link'),
(3, 'Langkah Mudah Belajar Struktur Data Menggunakan C/C++', 'Buku ini ditujukan untuk mahasiswa Ilmu Komputer, Teknik Informatika, Sistem Informasi, Manajemen Informatika, atau Teknik Industri tahun awal yang sedang mempelajari pemrograman. Isi buku ini meliputi pengenalan seluk beluk data dan struktur data dalam pemrograman disertai beberapa contoh kasus untuk menambah pemahaman. Implementasi konsep yang dibahas di buku ini menggunakan bahasa C/C++. ', 'https://drive.google.com/file/d/1-_QfkrZboRZmxbCcd3EAJ3vs5RCQgSnl/view?usp=share_link', 'https://drive.google.com/file/d/15MHYoF-hk_QybnIdYfJxm1mBWRMleO-S/view?usp=share_link'),
(4, 'Pemrosesan Citra Digital dengan MATLAB', 'Buku ini dapat dipakai sebagai panduan praktikum pemrosesan/pengolahan citra bagi mahasiswa sarjana dan pascasarjana. Namun, buku ini juga dapat dipakai sebagai panduan praktis bagi pembelajar independen yang ingin mengenal dan menguasai pemrograman MATLAB untuk citra digital.', 'https://drive.google.com/file/d/1tiYe2yDjnPsEx8WfJ6JWhFvkXTUbplSr/view?usp=share_link', 'https://drive.google.com/file/d/1TAHSroS4ER2ahulX-bwJ8aV_r5HMDehm/view?usp=share_link'),
(5, 'Pengantar Pemrograman Kotlin', 'Kotlin adalah bahasa pemrograman alternatif untuk pengembangan aplikasi Android dan aplikasi natives. Oleh karena itu, tidak peduli apakah Anda sudah pernah membuat aplikasi atau belum, Kotlin ini wajib dipelajari sebab akan sangat populer beberapa tahun ke depan.', 'https://drive.google.com/file/d/1g23OrBGB3vb4lTe5YEf8xG3ae2oUc1Na/view?usp=share_link', 'https://drive.google.com/file/d/1X1xy99h6rIgwP0MZ6MvMAM4aZhOnQwil/view?usp=share_link'),
(6, 'Simulasi Jaringan Komputer dengan Cisco Packet Tracer', 'Simulasi dengan Cisco Packet Tracer sangat efektif untuk media pembelajaran sebelum mengimplementasikannya di lapangan. Anda juga akan belajar tentang dasar-dasar jaringan, mulai dari mengenal perangkat jaringan, menghitung alamat IPv4 & IPv6, jenis-jenis topologi, standar OSI layer, dan sebagainya.', 'https://drive.google.com/file/d/1WeH9lqVB9VqYvi63DZphLcihA53gNg5Z/view?usp=share_link', 'https://drive.google.com/file/d/1BUdE4d1WFKGHUGJerxFt7mcB11SmRPYD/view?usp=share_link');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi_buku`
--
ALTER TABLE `koleksi_buku`
  ADD PRIMARY KEY (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
