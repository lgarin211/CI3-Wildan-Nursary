-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Des 2020 pada 09.15
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

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
-- Struktur dari tabel `asess`
--

CREATE TABLE `asess` (
  `id_user_main` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `asess`
--

INSERT INTO `asess` (`id_user_main`) VALUES
(2),
(3),
(20202020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
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
-- Struktur dari tabel `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `item` varchar(300) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chart`
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
-- Struktur dari tabel `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `nama_db` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `has`
--

CREATE TABLE `has` (
  `id` int(11) NOT NULL,
  `nama_db` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `has`
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
-- Struktur dari tabel `text-assis`
--

CREATE TABLE `text-assis` (
  `id` int(11) NOT NULL,
  `text_alig` text NOT NULL,
  `link` text NOT NULL,
  `img` text NOT NULL,
  `nama komponen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `text-assis`
--

INSERT INTO `text-assis` (`id`, `text_alig`, `link`, `img`, `nama komponen`) VALUES
(1, 'Menjual berbagai jenis tanaman hias, tanaman lindung, tanaman buah, tanaman obat dll.', '', '', 'text foot 1 last'),
(2, 's1.jpeg|s2.jpeg|s3.jpeg', 's1.jpeg|s2.jpeg|s3.jpeg', 's1.jpeg|s2.jpeg|s3.jpeg', 'foto slider'),
(3, 'Jl. Bojong Kaler Rt.01/04 Kel.Bojongkerta Kec.Bogor Selatan - Bogor 16139', '', '', 'text foot 2 alamat'),
(4, '0896 7355 4066', '', '', 'text foot 3 nowa'),
(5, 'lazada|shopie', 'https://id-test-11.slatic.net/p/00e58800ee8d1721987edcfb7e5717c7.png|https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Shopee_logo.svg/1200px-Shopee_logo.svg.png', 'https://id-test-11.slatic.net/p/00e58800ee8d1721987edcfb7e5717c7.png|https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Shopee_logo.svg/1200px-Shopee_logo.svg.png', 'komponen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `setsesion`) VALUES
(1, 'AGUSTINUS', 'admin@admin.com', '1.jpg', '$2y$10$GM8bg6vgrkg2jmi7kdTyeu5YhifuY8REuR5Cm2kMFEFnrmGnioRCa', 1, 1, 1599788311, 20202020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 100),
(8, 1, 2),
(10, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
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
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
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
-- Dumping data untuk tabel `user_sub_menu`
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
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `V2`
--

CREATE TABLE `V2` (
  `id` int(11) NOT NULL,
  `Json_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`Json_data`)),
  `ID_Shope` int(11) NOT NULL,
  `Link_Shopie` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `V2`
--

INSERT INTO `V2` (`id`, `Json_data`, `ID_Shope`, `Link_Shopie`) VALUES
(1, '{\"show_disclaimer\":false,\"query_rewrite\":{},\"adjust\":{},\"version\":\"10217e34977ac8105b934a2dbd97a468\",\"algorithm\":\"eyJzZWFyY2giOiI3LmEuMTg0QExNMSIsImFkcyI6IiJ9\",\"need_next_search\":true,\"total_count\":3,\"error\":null,\"total_ads_count\":0,\"disclaimer_infos\":[],\"nomore\":true,\"price_adjust\":{},\"json_data\":\"\",\"suggestion_algorithm\":0,\"items\":[{\"itemid\":6860566567,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"6fdbe730382e0249d4a66f85e007f2d5\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"6fdbe730382e0249d4a66f85e007f2d5\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":1,\"display_name\":null,\"catid\":46,\"json_data\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":2000000000,\"liked_count\":0,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":10,\"status\":1,\"price_max\":2000000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":2000000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":131072,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Aglonema lipstik-Siam Aurora\",\"distance\":null,\"adsid\":null,\"ctime\":1604303737,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"},{\"itemid\":4363575947,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"bbe983d13941e212930e1c5f52fca014\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"bbe983d13941e212930e1c5f52fca014\",\"237d0c8dcec2ca91de116182c2c54d41\",\"b161835880b1c9714b28b251b3cb3cd0\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":1,\"display_name\":null,\"catid\":46,\"json_data\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":1000000000,\"liked_count\":0,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":50,\"status\":1,\"price_max\":1000000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":1000000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":0,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Bibit stroberi/strawberry\",\"distance\":null,\"adsid\":null,\"ctime\":1605691122,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"},{\"itemid\":3763667569,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"6442af55860ee57f127697ebeeb852fa\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"6442af55860ee57f127697ebeeb852fa\",\"4a6b415e3d343b60f24d93e6ee16b79d\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":0,\"display_name\":null,\"catid\":46,\"json_data\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":1500000000,\"liked_count\":0,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":50,\"status\":1,\"price_max\":1500000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":1500000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":0,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Tanaman rosemary / Pohon rosemary\",\"distance\":null,\"adsid\":null,\"ctime\":1605691453,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"}],\"reserved_keyword\":\"\",\"hint_keywords\":[]}', 331253719, 'wildan_nursery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `view_artikel`
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
-- Dumping data untuk tabel `view_artikel`
--

INSERT INTO `view_artikel` (`id`, `judul`, `head`, `isi_head`, `tgl`, `penulis`, `sh_1`, `isi_s1`, `sh_2`, `isi_s2`) VALUES
(1, 'a', 'a', 'a', '0000-00-00', '1as', 'sdsd', 'dsd', 'dsd', 'dsdsd'),
(2, 'sdsds', 'sdsds', 'dsdsd', '2020-11-10', 'dsdsd', 'sadasfsdasdsadvsxdvscdfsdsfvcdfbvdsfcas', 'dascdgfsdxsbdfsvffdscasvcsadsvdgvaf', 'cdsdafdcsdvadgfsfdsdfadsvfcdf', 'ssvfadgasedhgsafdrdgeretfgr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `view_galeri`
--

CREATE TABLE `view_galeri` (
  `id` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `view_kategori`
--

CREATE TABLE `view_kategori` (
  `id` int(11) NOT NULL,
  `value` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `view_kategori`
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
-- Indeks untuk tabel `asess`
--
ALTER TABLE `asess`
  ADD PRIMARY KEY (`id_user_main`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `text-assis`
--
ALTER TABLE `text-assis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `V2`
--
ALTER TABLE `V2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `view_artikel`
--
ALTER TABLE `view_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `view_kategori`
--
ALTER TABLE `view_kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asess`
--
ALTER TABLE `asess`
  MODIFY `id_user_main` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20202021;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT untuk tabel `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `has`
--
ALTER TABLE `has`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `V2`
--
ALTER TABLE `V2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `view_artikel`
--
ALTER TABLE `view_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `view_kategori`
--
ALTER TABLE `view_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
