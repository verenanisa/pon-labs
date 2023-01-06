-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 04:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pon_labs`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_publikasi` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul_berita`, `slug`, `excerpt`, `isi_berita`, `tanggal_publikasi`, `created_at`, `updated_at`) VALUES
(1, 'Relawan Vaksinasi Merdeka di Pondok Labu Terima Apresiasi Kapolsek Cilandak', 'relawan-vaksinasi-merdeka-di-pondok-labu-terima-apresiasi-kapolsek-cilandak', 'Para relawan Vaksinasi Merdeka di Pondok Labu, Jakarta Selatan, menerima penghargaan dari Polsek Cilandak', '<p>Para relawan Vaksinasi Merdeka di Pondok Labu, Jakarta Selatan, menerima penghargaan dari Polsek Cilandak. Kapolsek Cilandak Komisaris Polisi Agung Permana mengatakan para relawan ini berasal dari warga binaan yang selalu siap membantu tenaga kesehatan melayani vaksinasi Covid-19 di wilayah tersebut.</p><p>Kapolsek Cilandak memberikan apresiasi berupa sembako dan piagam kepada para relawan di sentra Vaksinasi Merdeka di Pondok Labu. \"Tidak seberapa, tapi mudah-mudahan berguna,\" kata Agung di Cilandak, Selasa, 17 Agustus 2021.</p><p>Menurut Agung, ada 12 relawan di sentra Vaksinasi Merdeka Pondok Labu yang merupakan warga binaan Polsek Cilandak. Mereka bertugas di bagian pendaftaran, administrasi dan observasi kesehatan.</p><p>Seorang relawan bernama Reni berterima kasih pada Polres Cilandak karena bisa terlibat dalam program Vaksinasi Merdeka. Reni adalah kader di RW 07 Pondok Labu. \"Atas nama kader RW 07, relawan dan seluruh warga RW 07, saya mengucapkan banyak terima kasih kepada Kapolda, Kapolres dan Kapolsek,” ujarnya.</p><p>Reni merasa senang masyarakat di RW 07 Pondok Labu dilibatkan dalam kegiatan Vaksinasi Merdeka. Dia berharap vaksinasi ini bisa membantu mewujudkan herd immunity atau kekebalan kelompok di Pondok Labu dan sekitarnya.</p>', NULL, '2022-06-19 23:48:57', '2022-06-19 23:48:57'),
(2, 'Ini Jalur Rawan Jambret dan Tips Aman Bersepeda Menurut B2W Indonesia', 'ini-jalur-rawan-jambret-dan-tips-aman-bersepeda-menurut-b2w-indonesia', 'Ketua Bike To Work Indonesia, Fahmi Saimima, menyayangkan terjadinya upaya penjambretan terhadap pesepeda di jembatan layang...', '<p>Ketua Bike To Work Indonesia, Fahmi Saimima, menyayangkan terjadinya upaya penjambretan terhadap pesepeda di jembatan layang Senayan beberapa hari lalu. Terlebih peristiwa tersebut berlangsung di tempat terbuka dan saat jam ramai dengan aktivitas masyarakat.</p><p>\"Ini menandakan jalan-jalan masih belum aman bagi pesepeda terkait kriminal,\" kata Fahmi saat dihubungi, Ahad, 6 Maret 2022.</p><p>Menyikapi upaya penjambretan itu, Fahmi menyarankan agar para pesepeda lebih berhati-hati saat menjalankan hobinya itu. \"Baik yang untuk sepeda buat transportasi, rekreasi, maupun olahraga. Semua mesti mawas diri tidak memancing peluang kejahatan,\" ucap dia.</p><p>Fahmi memberi sejumlah tips agar aman saat bersepeda. Ia menyarankan penampilan saat bersepeda jangan terlalu mencolok. “Barang-barang harus dijaga, terutama barang-barang penting seperti handphone dan dompet,” tuturnya.</p><p>“Yang penting juga jangan sendirian. Kalau pun sendirian pastikan jalur yang dilewati bukan jalur yang rawan,\" ucap dia menambahkan.</p><p>Mengenai jalur yang rawan, Fahmi menjelaskan bahwa jalur-jalur ini biasanya jalur lurus yang panjang. Biasanya pada jalur ini pesepeda yang sebelumnya bergerombol terpisah dari kelompoknya.</p><p>\"Biasanya ada di kawasan-kawasan selepas pesepeda ini nge-loop. Jalur-jalur ini biasanya merupakan jalur pulang pesepeda karena pulangnya pasti sendirian,\" papar Fahmi.</p><p>Fahmi menyebut beberapa jalur yang rawan dengan bagi pesepeda seperti Kebon Jeruk, Rawamangun, Pondok Labu, Kebayoran Lama, flover Senayan arah TVRI, dan lainnya. “Pesepeda harus hati-hati karena pada jam sibuk pun mereka berani menjambret,\" kata Fahmi.</p><p>B2W Indonesia, kata Fahmi, telah meminta pemerintah provinsi DKI Jakarta dan kepolisian agar menambah jumlah kamera pengawas di jalan untuk mengantisipasi terulangnya jambret atau begal yang mengincar pesepeda.</p><p>\"Tim advokasi kami sudah melakukan komunikasi ke Pemprov (Dishub) dan kepolisian utuk terus melakukan patroli rutin. Jikalau terbatas personel, maka mesti disiapkan CCTV lebih banyak di jalan yang mempunyai potensi,\" katanya.</p><p>Di samping itu, kata Fahmi, perwakilan dari B2W Indonesia bersama tim advokasi sedang melakukan komunikasi dengan jajaran pemerintah dan kepolisian untuk mengurangi kejahatan jalanan yang mengincar pesepeda.</p>', NULL, '2022-06-20 00:28:43', '2022-06-20 00:28:43'),
(3, 'Padamkan Kebakaran di Pondok Labu, Damkar Kerahkan Delapan Mobil', 'padamkan-kebakaran-di-pondok-labu-damkar-kerahkan-delapan-mobil', 'Suku Dinas Penanggulangan Kebakaran dan Penyelamatan (Gulkarmat) Jakarta Selatan mengerahkan delapan unit mobil...', '<p>Suku Dinas Penanggulangan Kebakaran dan Penyelamatan (Gulkarmat) Jakarta Selatan mengerahkan delapan unit mobil pemadam kebakaran untuk memadamkan api yang melumat sebuah warung makan di Pondok Labu, Jakarta Selatan.</p><p>\"Kami kerahkan 36 personel untuk menangani kebakaran warung makan,\" kata Perwira Piket Suku Dinas Gulkarmat Jakarta Selatan, Namun, saat dikonfirmasi di Jakarta, Rabu, 10 Maret 2021.</p><p>Kebakaran dilaporkan kepada petugas sekitar pukul 10.15 WIB, menghanguskan warung tongseng di Jalan DDN 2, di dekat Masjid Al Hikmah, Pondok Labu. Selama sekitar satu jam, petugas memadamkan si jago merah.</p><p>Warga sekitar sempat membantu memadamkan api dengan alat seadanya sembari menunggu petugas tiba untuk memadamkan api.</p><p>Belum diketahui penyebab kebakaran warung makan itu.</p><p>Tidak ada korban jiwa dalam kebakaran. Kerugian materi diperkirakan sekitar Rp 300 juta.</p>', NULL, '2022-06-20 00:31:55', '2022-06-20 00:31:55'),
(4, 'Do Your Magic: Before-After Perbaikan Sumur Resapan di Pondok Labu', 'do-your-magic-before-after-perbaikan-sumur-resapan-di-pondok-labu', 'Pembangunan sumur resapan di Pondok Labu, Jakarta Selatan (Jaksel), menjadi perhatian, khususnya di Jl Karang Tengah yang sempat diberi pot...', '<p>Pembangunan sumur resapan di Pondok Labu, Jakarta Selatan (Jaksel), menjadi perhatian, khususnya di Jl Karang Tengah yang sempat diberi pot. Kini, masalah proyek sumur resapan itu sudah tuntas.\r\ndetikcom mengunjungi Jl Karang Tengah, pada Senin (29/11/2021), saat itu terdapat pot berisi tanaman diletakkan di atas sumur resapan. Pot itu sudah terjatuh, tanah berserakan di sumur resapan.</p><p>Pot tersebut berada di atas sumur resapan yang amblas. Terlihat sisi sumur resapan yang turun.</p><p>Kemudian, sumur resapan pun dikerjakan di Jl Agraria, Pondok Labu. Pada Sabtu (4/11/2021), proses pengerjaan sedang berlangsung. Petugas sedang menggali tanah untuk membuat sumur resapan.</p><p>Kini, sumur resapan di dua jalan tersebut telah selesai dirapikan. Kondisi sumur resapan telah rapi dan dan tidak mengganggu pengguna jalan.</p><p>Bagaimana perbandingan sebelum dan setelah atau before-after pengerjaan proyek tersebut.</p>', NULL, NULL, NULL);

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
-- Table structure for table `informasis`
--

CREATE TABLE `informasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_pengumuman` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_publikasi` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasis`
--

INSERT INTO `informasis` (`id`, `judul_pengumuman`, `slug`, `excerpt`, `isi_pengumuman`, `tanggal_publikasi`, `created_at`, `updated_at`) VALUES
(1, 'Judul Pengumuman Pertama', 'judul-pengumuman-pertama', 'isi singkat pengumuman pertama. isi singkat pengumuman pertama.', 'isi pengumuman pertama. isi pengumuman pertama. isi pengumuman pertama. isi pengumuman pertama.', NULL, '2022-06-22 00:56:32', '2022-06-22 00:56:32');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_17_085038_create_posts_table', 1),
(6, '2022_06_19_060412_create_beritas_table', 1),
(7, '2022_06_22_055420_create_pengumuman_table', 2),
(8, '2022_06_22_072009_create_pengumumen_table', 3),
(9, '2022_06_22_072009_create_pengumuman_table', 4),
(10, '2022_06_22_072009_create_pengumumans_table', 5),
(11, '2022_06_22_074737_create_informasis_table', 6);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` int(10) UNSIGNED NOT NULL,
  `nama` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sandi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `nama_pengguna`, `sandi`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(4, 0, 'Tes1', 'Tes1', '$2y$10$gHhLv7xyZkYdkg6MpcdelejBZINDBR0H4zPJFwye4OIbq6WD7R.ci', '00000000000', '2022-06-20 14:40:24', '2022-06-20 14:40:24'),
(5, 1, 'Tes2', 'Tes2', '$2y$10$nKehBRY6ZOO6R/BwmXPWFeuzTzFETx2x22sR32MFS4ZVMd7tFDoX2', '00000000001', '2022-06-20 15:29:24', '2022-06-20 15:29:24'),
(6, 2, 'Tes3', 'Tes3', '$2y$10$ylelP9Gw6p0wYe2cKoSvFOiTcVel/WlgswJANUiHRPi9fGuTuWfw2', '00000000002', '2022-06-20 20:19:42', '2022-06-20 20:19:42'),
(7, 4, 'Tes4', 'Tes4', '$2y$10$fy2Am/yZclOVhaKMAW3GD.cEBjvDtCNfrQ9TtvkFPCrwtUBhrz3/S', '00000000004', '2022-06-21 12:16:20', '2022-06-21 12:16:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `informasis_slug_unique` (`slug`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`),
  ADD UNIQUE KEY `users_nama_pengguna_unique` (`nama_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
