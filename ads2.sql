-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2020 at 01:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads2`
--

-- --------------------------------------------------------

--
-- Table structure for table `asess`
--

CREATE TABLE `asess` (
  `id_user_main` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asess`
--

INSERT INTO `asess` (`id_user_main`) VALUES
(2),
(3),
(20202020);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(300) NOT NULL,
  `banyak_produk` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `img_link` varchar(500) NOT NULL,
  `kategory` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_produk`, `banyak_produk`, `deskripsi`, `harga`, `img_link`, `kategory`) VALUES
(25, 'a', 20, 'a b c d e f g ', 20, 'WhatsApp_Image_2020-10-25_at_14_25_16.jpeg', ',1,0,0,0'),
(26, 'b', 12, 'a b c d e f g ', 30, 'WhatsApp_Image_2020-10-25_at_14_25_161.jpeg', ',0,0,3,0'),
(27, 'c', 12, 'a b c d e f g ', 20, 'WhatsApp_Image_2020-10-25_at_14_25_162.jpeg', ',1,2,3,4'),
(40, 'Tanaman 1', 1, 'a b c d e f g h i j ', 1223, 'IMG-20201006-WA00101.jpg', ',1,0,0,7,0,0'),
(41, 'Tanaman 2', 123, 'a b c d e f g h i j ', 123, 'IMG-20201006-WA0006.jpg', ',1,0,6,7,0,0'),
(42, 'Tanaman 1', 123, 'a b c d e f g h i j ', 123, 'IMG-20201006-WA00102.jpg', ',1,3,6,7,8,9');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `item` varchar(300) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `item`, `id_user`, `quantity`) VALUES
(128, '25', 20202020, 3),
(129, '26', 20202020, 2),
(130, '27', 20202020, 1),
(131, '40', 2, 1),
(132, '27', 3, 1),
(133, '26', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `nama_db` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE `has` (
  `id` int(11) NOT NULL,
  `nama_db` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `has`
--

INSERT INTO `has` (`id`, `nama_db`) VALUES
(1, 'asess'),
(2, 'barang'),
(3, 'chart'),
(4, 'user_c'),
(5, 'user'),
(6, 'user_access_menu'),
(7, 'user_menu'),
(8, 'user_role'),
(9, 'user_sub_menu'),
(10, 'user_token'),
(11, 'view_kategori');

-- --------------------------------------------------------

--
-- Table structure for table `text-assis`
--

CREATE TABLE `text-assis` (
  `id` int(11) NOT NULL,
  `text_alig` text NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL,
  `nama komponen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text-assis`
--

INSERT INTO `text-assis` (`id`, `text_alig`, `link`, `img`, `nama komponen`) VALUES
(1, 'Menjual berbagai jenis tanaman hias, tanaman lindung, tanaman buah, tanaman obat dll.', '', '', 'text foot 1 last'),
(2, 's1.jpeg|s2.jpeg|s3.jpeg', 's1.jpeg|s2.jpeg|s3.jpeg', 's1.jpeg|s2.jpeg|s3.jpeg', 'foto slider'),
(3, 'Jl. Bojong Kaler Rt.01/04 Kel.Bojongkerta Kec.Bogor Selatan - Bogor 16139', '', '', 'text foot 2 alamat'),
(4, '0896 7355 4066', '', '', 'text foot 3 nowa'),
(5, 'lazada|shopie', 'https://id-test-11.slatic.net/p/00e58800ee8d1721987edcfb7e5717c7.png|https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Shopee_logo.svg/1200px-Shopee_logo.svg.png', 'https://id-test-11.slatic.net/p/00e58800ee8d1721987edcfb7e5717c7.png|https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Shopee_logo.svg/1200px-Shopee_logo.svg.png', 'komponen');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `trak` varchar(255) NOT NULL,
  `nama pembeli` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no telp` varchar(13) NOT NULL,
  `pesan` varchar(300) NOT NULL,
  `produk` varchar(300) NOT NULL,
  `tgl` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `terima` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `setsesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `setsesion`) VALUES
(1, 'AGUSTINUS', 'admin@admin.com', '1.jpg', '$2y$10$GM8bg6vgrkg2jmi7kdTyeu5YhifuY8REuR5Cm2kMFEFnrmGnioRCa', 1, 1, 1599788311, 20202020);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 100),
(8, 1, 2),
(10, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'barang dagangan'),
(4, 'Database_track'),
(5, 'home base'),
(100, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 100, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 100, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 3, 'list barang', 'dagang/rone', 'fas fa-fw fa-folder-open', 1),
(10, 3, 'input new barang', 'dagang/cone', 'fas fa-fw fa-folder-open', 1),
(11, 3, 'track', 'dagang/rtwo', 'fas fa-fw fa-folder-open', 1),
(12, 1, 'database acces', 'admin/has', 'fas fa-fw fa-code', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `view_artikel`
--

CREATE TABLE `view_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `head` varchar(255) NOT NULL,
  `isi_head` varchar(3000) NOT NULL,
  `tgl` date NOT NULL,
  `penulis` varchar(1000) NOT NULL,
  `sh_1` varchar(255) NOT NULL,
  `isi_s1` varchar(1000) NOT NULL,
  `sh_2` varchar(255) NOT NULL,
  `isi_s2` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_artikel`
--

INSERT INTO `view_artikel` (`id`, `judul`, `head`, `isi_head`, `tgl`, `penulis`, `sh_1`, `isi_s1`, `sh_2`, `isi_s2`) VALUES
(1, 'a', 'a', 'a', '0000-00-00', '1as', 'sdsd', 'dsd', 'dsd', 'dsdsd'),
(2, 'sdsds', 'sdsds', 'dsdsd', '2020-11-10', 'dsdsd', 'sadasfsdasdsadvsxdvscdfsdsfvcdfbvdsfcas', 'dascdgfsdxsbdfsvffdscasvcsadsvdgvaf', 'cdsdafdcsdvadgfsfdsdfadsvfcdf', 'ssvfadgasedhgsafdrdgeretfgr');

-- --------------------------------------------------------

--
-- Table structure for table `view_galeri`
--

CREATE TABLE `view_galeri` (
  `id` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `view_kategori`
--

CREATE TABLE `view_kategori` (
  `id` int(11) NOT NULL,
  `value` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_kategori`
--

INSERT INTO `view_kategori` (`id`, `value`) VALUES
(1, 'tanaman hias'),
(2, 'tanaman buah'),
(3, 'tanaman lindung'),
(4, 'tanaman herbal'),
(6, 'asd'),
(7, 'asd'),
(8, 'asd'),
(9, 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asess`
--
ALTER TABLE `asess`
  ADD PRIMARY KEY (`id_user_main`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text-assis`
--
ALTER TABLE `text-assis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_artikel`
--
ALTER TABLE `view_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_kategori`
--
ALTER TABLE `view_kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asess`
--
ALTER TABLE `asess`
  MODIFY `id_user_main` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20202021;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `has`
--
ALTER TABLE `has`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `view_artikel`
--
ALTER TABLE `view_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `view_kategori`
--
ALTER TABLE `view_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
