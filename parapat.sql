-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 02:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parapat`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `nama_hotel`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'NIAGARA HOTEL', 'Hotel Niagara menyediakan layanan akomodasi terbaik untuk setiap wisatawan yang berkunjung ke Danau Toba. Hotel bintang 4 di Parapat ini memberikan suasana penginapan yang mewah dan nyaman dengan harga terjangkau. Di tempat ini para tamu bisa memperoleh kamar dengan harga sekitar Rp 500.000 an per malam. Meski memiliki tarif yang murah meriah, pelayanan serta fasilitas yang di sediakan Niagara Hotel Parapat tetap terjaga. Para Staff hotel memberikan pelayanan yang ramah dan murah senyum. Ditambah lagi dengan suasana alami yang ditawarkan oleh hotel ini membuat para wisatawan semakin betah. Para wisatawan juga bisa bersantai di gazebo sembari menyaksikan pemandangan Danau Toba. Lokasi Niagara Hotel di perbukitan memberikan pemandangan berbeda dibandingkan hotel yang berada di tepi danau. Selain itu, wisata bermalam di sini juga bisa merasakan suasana tenang, jauh dari keramaian kota.                                                                                                                                                                                                                    ', 'Rp 599.000', 'gam6', NULL, NULL),
(2, 'VIEW HOTEL', 'Lokasi hotel ini sangat baik, berada tepat di Parapat. Dari pelabuhan Ajibata hotel ini hanya berjarak 0, 83 Km. Selain letaknya yang strategis, view hotel juga dekat dengan Terminal Sosor Saba Parapat berjarak sekitar 0,78 Km.Bagi Anda yang menginginkan kualitas pelayanan yang oke dengan harga yang ramah di kantong, Parapat View Hotel adalah pilihan yang tepat.Karena meski murah, akomodasi ini menyediakan fasilitas memadai dan pelayanan yang sangat terjaga mutunya.\r\n Terdapat kolam renang untuk bersantai sendiri maupun bersama keluarga. Terdapat restoran dengan menu yang lezat. Dan WiFi tersedia di seluruh area publik properti sehingga mudah diakses oleh siapa pun.', 'RP 643.000', 'gam7', NULL, NULL),
(3, 'INNA HOTEL', 'Menginap di Inna hotel tidak hanya memberikan kemudahan untuk mengeksplorasi destinasi petualangan Anda, tetapi juga menawarkan kenyamanan bagi istirahat Anda. Jika Anda memiliki agenda kegiatan yang membutuhkan ruangan besar, maka Inna hotel adalah pilihan yang tepat.Hotel ini memiliki ruang pertemuan yang luas dan dilengkapi dengan berbagai fasilitas penunjang. Hotel ini adalah pilihan yang tepat bagi Anda dan pasangan yang ingin memiliki liburan romantis. Dengan pengalaman penuh kasih di penginapan.\r\n WiFi tersedia di seluruh area publik properti untuk membantu anda tetap terhubung dengan keluarga dan teman.', 'RP 1.334.475', 'gam4', NULL, NULL),
(4, 'OYO 90331', 'Lokasi hotel sangat strategis karena hanya berjarak 7,34 Km dengan Bandar Udara Sibisa (SIW). Dari pelabuhan Ajibata hotel ini hanya berjarak sekitar 0,21 Km. Terdapat beberapa tempat menarik di sekitarnya. WiFi juga tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga.\r\n Hotel OYO adalah pilihan terbaik untuk penginapan nyaman dan tidak menguras saku.', 'RP 105.000', 'gam9', NULL, NULL),
(5, 'COTTAGE PARAPAT', 'Pelayanan memuaskan serta fasilitas memadai akan membuat Anda nyaman berada di Danau Toba International Cottage Parapat. Tersedia kolam renang untuk Anda bersantai sendiri maupun bersama teman atau keluarga. Manjakan diri Anda dengan menikmati fasilitas spa yang memberikan harga dan kualitas pelayanan yang terbaik. Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain.\r\n Jangan ragu menghubungi resepsionis, kami siap untuk melayani Anda. Terdapat restauran yang menyajikan menu lezat ala Danau Toba International Cottage Parapat khusus untuk Anda.  WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.Dengan fasilitas yang memadai Danau Toba International Cottage Parapat ini dapat menjadi pilihan tepat untuk menginap.', 'RP 335.300', 'gam8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_06_22_233032_create_tickets_table', 2),
(7, '2021_06_23_192125_create_hotels_table', 3),
(8, '2021_06_23_223930_create_wisatas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` int(11) NOT NULL,
  `tgl_checkin` timestamp NULL DEFAULT NULL,
  `tgl_checkout` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `nama`, `hotel`, `hari`, `tgl_checkin`, `tgl_checkout`) VALUES
(1, 'reff', 'Niagara Hotel', 3, '2021-06-17 23:59:42', '2021-06-20 23:59:42'),
(2, 'Joviann', 'View Hotel', 2, '2021-06-01 00:12:04', '2021-06-03 00:12:04'),
(3, 'jukap', 'View Hotel', 2, '2021-06-01 00:12:04', '2021-06-03 00:12:04'),
(4, 'reff', 'Inna Hotel', 4, '2021-05-12 00:20:49', '2021-05-16 00:20:49'),
(5, 'hans', 'OYO 90331 Shanda', 3, '2021-06-20 00:20:49', '2021-06-23 00:20:49'),
(6, 'Fitri andini', 'Cottage Parapat ', 4, '2021-06-04 00:20:49', '2021-06-08 00:20:49'),
(7, 'reff', 'Niagara Hotel', 4, '2021-06-05 00:20:49', '2021-06-09 00:20:49'),
(8, 'Joviann', 'View Hotel', 6, '2021-06-10 00:20:49', '2021-06-16 00:20:49'),
(9, 'hans', 'Cottage Parapat', 1, '2021-06-03 00:20:49', '2021-06-04 00:20:49'),
(10, 'jukap', 'Niagara Hotel', 2, '2021-06-02 00:20:49', '2021-06-04 00:20:49'),
(11, 'Fitri andini', 'Niagara Hotel', 7, '2021-06-04 00:20:49', '2021-06-11 00:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'manusia', 'manusia@gmail.com', NULL, 2, '$2y$10$9iCr3o2Z6eLVPFgjPf1cpuCcyC8PiSNVDSeJPGoOLBeevK2F1DzoS', NULL, '2021-06-20 08:00:25', '2021-06-20 08:00:25'),
(4, 'admin', 'admin@admin.com', NULL, 1, '$2y$10$soJ1Fy50bsUzCMHjvDSmW.s7BliVTI5oTZ9C/Zo1UyBDJp/D8E/Ra', NULL, '2021-06-21 03:18:10', '2021-06-21 03:18:10'),
(5, 'pengguna', 'user@user.com', NULL, 2, '$2y$10$QDmkKn701szMSK4vt7vKQO.8EbUMJeRFbD2I4ChtZYysqtFpQ/JqW', NULL, '2021-06-21 03:21:52', '2021-06-21 03:21:52'),
(6, 'pengunjung', 'pengunjung@gmail.com', NULL, 2, '$2y$10$LihUhsXcaK0KmVXSd4RkteeOWbV.eEHosUmL9oiBJDlGAux8vUsPi', NULL, '2021-06-21 04:50:19', '2021-06-21 04:50:19'),
(7, 'hans', 'hans@gmail.com', NULL, 2, '$2y$10$wP0TdhLmIpnKTIbYj5bF5eJ6RJDqAtf8bZNToorOtvLiniOCWWKzG', NULL, '2021-06-21 07:52:21', '2021-06-21 07:52:21'),
(8, 'reff', 'reff@tes.com', NULL, 2, '$2y$10$C0IFZ4e7l8IQj52j3RdeCuzAHm7UG3MdQUBZpI5cltaacknbeRpfi', NULL, '2021-06-22 00:58:32', '2021-06-22 00:58:32'),
(9, 'jukap', 'jukap@test.com', NULL, 2, '$2y$10$lb2CZDDWtrWwSmFddNP17eWDGkW37EUBOpnW0o2vR0mhKabLoARdW', NULL, '2021-06-22 01:08:16', '2021-06-22 01:08:16'),
(28, 'Joviann', 'jovian@gmail.com', NULL, 2, '$2y$10$MCjlvLiPDUxsBlMhiUs1Q.pRW.rDVt24wgkKng4WoPL5gmEldxMGG', NULL, '2021-06-22 06:49:54', '2021-06-22 06:49:54'),
(29, 'Fitri andini', 'fitri@tes.com', NULL, 2, '$2y$10$nNR8Mebi83jAjVjh.ixnZOFmLWUM5BPFsSBShnGGHwizeQZ3xuS3u', NULL, '2021-06-22 08:39:09', '2021-06-22 08:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `wisatas`
--

CREATE TABLE `wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama_wisata`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'PUNCAK PARAPAT', 'Kawasan ini merupakan titik keberangkatan untuk berkunjung ke Danau Toba. Di sini pengunjung dapat menikmati pemandangan Danau Toba dan Pulau Samosir dari ketinggian, dikelilingi oleh pohon yang rindang dan asri. Setelah menikmati pemandangan pengunjung juga dapat menyebrang ke Pulau Samosir dan mengunjungi beberapa tempat wisata menarik, seperti air terjun di Simanindo serta pemandian air panas di Kota Pangururan.', 'page3_img2', NULL, NULL),
(2, 'BATU GANTUNG', 'Batu Gantung ini merupakan asal mula nama Kota Parapat diambil. Dahulu kala ada cerita atau mitos yang berkembang, yakni Parapat diambil dari kata merapatlah.\r\nTempat ini juga cukup populer di kalangan wisatawan. Lokasinya yang berada di tebing dan masih berada di kawasan Danau Toba membuat wisatawan harus menggunakan kapal untuk mengunjunginya.', 'page3_img1', NULL, NULL),
(3, 'PELABUHAN AJIBATA', 'Pelabuhan Ajibata (Danau Toba) terletak di Prapat, Sumatra Utara.\r\n                                    Pelabuhan ini mengantarkan penumpang dengan Kapal Ferry dan Kapal Wisata untuk menuju ke Pelabuhan Tomok, Samosir.\r\n                                    Sepanjang perjalanan akan di kelilingi di danau toba yang begitu luas dengan pemandangan bukit barisan yang begitu indah', 'page3_img3', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
