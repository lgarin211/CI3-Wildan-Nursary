-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Jan 2021 pada 16.08
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
(4),
(5),
(6),
(7),
(8),
(9),
(10),
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
  `quantity` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chart`
--

INSERT INTO `chart` (`id`, `item`, `id_user`, `quantity`, `harga`) VALUES
(136, '3763667569', 4, 2, 150000),
(137, '4363575947', 4, 2, 1000000000),
(138, '3763667569', 5, 1, 1500000000),
(139, '4363575947', 20202020, 1, 1000000000),
(140, '3763667569', 20202020, 5, 1500000000),
(141, '6860566567', 20202020, 1, 2000000000),
(149, '3763667569', 7, 3, 1500000000),
(150, '4363575947', 7, 2, 1000000000),
(151, '6860566567', 7, 1, 2000000000),
(152, '4363575947', 8, 4, 1000000000),
(153, '6860566567', 8, 2, 2000000000),
(154, '4363575947', 9, 7, 1000000000),
(156, '3273782267', 10, 2, 500000000),
(157, '8005807148', 10, 1, 450000000);

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
(2, 's1.jpeg|s2.jpeg|s3.jpeg', '', 's1.jpeg|s2.jpeg|s3.jpeg', 'foto slider'),
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
(11, 1, 104),
(13, 1, 105),
(15, 1, 100);

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
(100, 'Menu'),
(104, 'Artikel Manager'),
(105, 'Seting');

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
(12, 1, 'database acces', 'admin/has', 'fas fa-fw fa-code', 1),
(13, 104, 'Wp-config', 'Wp-config', 'fas fa-fw fa-user', 1),
(14, 104, 'Wp-Write', 'Wp-Write', 'fas fa-fw fa-user', 1),
(15, 1, 'API Shopie Control', 'API-Shopie-Control', 'fas fa-fw fa-user', 1),
(16, 105, 'config Website', 'Setting', 'fas fa-fw fa-user', 1);

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
(1, '{\"show_disclaimer\":false,\"query_rewrite\":{},\"adjust\":{},\"version\":\"9b8a3639aed8dd8a09c8d23660c0f602\",\"algorithm\":\"eyJzZWFyY2giOiI3LmEuMjIxQCIsImFkcyI6Im9nWUEifQ==\",\"need_next_search\":true,\"total_count\":5,\"error\":null,\"total_ads_count\":0,\"disclaimer_infos\":[],\"nomore\":true,\"price_adjust\":{},\"json_data\":\"\",\"suggestion_algorithm\":0,\"items\":[{\"itemid\":3763667569,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"faf523962cef68da1ad35ef7aa86f416\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"faf523962cef68da1ad35ef7aa86f416\",\"4a6b415e3d343b60f24d93e6ee16b79d\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":0,\"display_name\":null,\"catid\":46,\"voucher_info\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":1500000000,\"liked_count\":1,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":50,\"status\":1,\"price_max\":1500000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":1500000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":0,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"json_data\":\"\",\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Tanaman rosemary / Pohon rosemary\",\"distance\":null,\"adsid\":null,\"ctime\":1605691453,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"},{\"itemid\":6860566567,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"6fdbe730382e0249d4a66f85e007f2d5\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"6fdbe730382e0249d4a66f85e007f2d5\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":0,\"display_name\":null,\"catid\":46,\"voucher_info\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":2000000000,\"liked_count\":1,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":10,\"status\":1,\"price_max\":2000000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":2000000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":131072,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"json_data\":\"\",\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Aglonema lipstik-Siam Aurora\",\"distance\":null,\"adsid\":null,\"ctime\":1604303737,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"},{\"itemid\":4363575947,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"bbe983d13941e212930e1c5f52fca014\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"bbe983d13941e212930e1c5f52fca014\",\"237d0c8dcec2ca91de116182c2c54d41\",\"b161835880b1c9714b28b251b3cb3cd0\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":0,\"display_name\":null,\"catid\":46,\"voucher_info\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":1000000000,\"liked_count\":1,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":50,\"status\":1,\"price_max\":1000000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":1000000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":0,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"json_data\":\"\",\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Bibit stroberi/strawberry\",\"distance\":null,\"adsid\":null,\"ctime\":1605691122,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"},{\"itemid\":8005807148,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"c704738890cd3dda61b77e695690d459\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"c704738890cd3dda61b77e695690d459\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":1,\"display_name\":null,\"catid\":46,\"voucher_info\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":450000000,\"liked_count\":0,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":500,\"status\":1,\"price_max\":450000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":450000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":0,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"json_data\":\"\",\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Netpot hidroponik hitam ukuran 5cm isi 10pcs\",\"distance\":null,\"adsid\":null,\"ctime\":1609065747,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"},{\"itemid\":3273782267,\"welcome_package_info\":null,\"liked\":false,\"recommendation_info\":null,\"bundle_deal_info\":null,\"price_max_before_discount\":-1,\"tracking_info\":{\"multi_search_tracking\":[0],\"viral_spu_tracking\":null,\"business_tracking\":null},\"image\":\"9aa75120dbcc93b7c7574cc360c4fd25\",\"recommendation_algorithm\":null,\"is_cc_installment_payment_eligible\":false,\"shopid\":331253719,\"can_use_wholesale\":false,\"group_buy_info\":null,\"reference_item_id\":\"\",\"currency\":\"IDR\",\"raw_discount\":0,\"show_free_shipping\":false,\"video_info_list\":[],\"ads_keyword\":null,\"collection_id\":null,\"images\":[\"9aa75120dbcc93b7c7574cc360c4fd25\",\"267515cbeceef3cd6eaf38609f600528\",\"4bc4528dbce076d97e00256cf80dc4e6\"],\"is_preferred_plus_seller\":false,\"price_before_discount\":0,\"is_category_failed\":false,\"show_discount\":0,\"cmt_count\":0,\"view_count\":1,\"display_name\":null,\"catid\":46,\"voucher_info\":null,\"upcoming_flash_sale\":null,\"is_official_shop\":false,\"brand\":\"Tidak Ada Merek\",\"price_min\":500000000,\"liked_count\":0,\"can_use_bundle_deal\":false,\"show_official_shop_label\":false,\"coin_earn_label\":null,\"price_min_before_discount\":-1,\"cb_option\":0,\"sold\":0,\"deduction_info\":null,\"stock\":200,\"status\":1,\"price_max\":500000000,\"add_on_deal_info\":null,\"is_group_buy_item\":null,\"flash_sale\":null,\"price\":500000000,\"shop_location\":\"KOTA BOGOR\",\"item_rating\":{\"rating_star\":0.0,\"rating_count\":[0,0,0,0,0,0],\"rcount_with_image\":0,\"rcount_with_context\":0},\"show_official_shop_label_in_title\":false,\"tier_variations\":[{\"images\":[],\"properties\":[],\"type\":0,\"name\":\"\",\"options\":[\"\"]}],\"is_adult\":false,\"discount\":null,\"flag\":0,\"is_non_cc_installment_payment_eligible\":false,\"has_lowest_price_guarantee\":false,\"json_data\":\"\",\"has_group_buy_stock\":null,\"match_type\":null,\"preview_info\":null,\"welcome_package_type\":0,\"exclusive_price_info\":null,\"name\":\"Bibit Tanaman Kelor/pohon kelor\",\"distance\":null,\"adsid\":null,\"ctime\":1609916623,\"wholesale_tier_list\":[],\"show_shopee_verified_label\":false,\"campaignid\":null,\"show_official_shop_label_in_normal_position\":null,\"item_status\":\"normal\",\"shopee_verified\":false,\"hidden_price_display\":null,\"size_chart\":null,\"item_type\":0,\"shipping_icon_type\":null,\"campaign_stock\":null,\"label_ids\":[1000031],\"service_by_shopee_flag\":0,\"badge_icon_type\":0,\"historical_sold\":0,\"transparent_background_image\":\"\"}],\"reserved_keyword\":\"\",\"hint_keywords\":[]}', 331253719, 'wildan_nursery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `v2_call_required`
--

CREATE TABLE `v2_call_required` (
  `id` int(11) NOT NULL,
  `Dock` text NOT NULL,
  `Value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `v2_call_required`
--

INSERT INTO `v2_call_required` (`id`, `Dock`, `Value`) VALUES
(1, 'Alamat', 'Jl. Bojong Kaler Rt.01/04 Kel.Bojongkerta Kec.Bogor Selatan - Bogor 16139'),
(2, 'No_HP', '081221723861'),
(3, 'email', 'lagustinus211@gmail.com'),
(4, 'Shopie_id', '331253719'),
(5, 'link_shopie', 'wildan_nursery'),
(7, 'B_Shopie', '#'),
(8, 'B_Lazada', '#'),
(9, 'B_Tokopedia', '#'),
(10, 'text-foot', 'Menjual berbagai jenis tanaman hias, tanaman lindung, tanaman buah, tanaman obat dll .................. ............................ ..................... ...............'),
(11, 'link_foto_slider', 'https://cf.shopee.co.id/file/c704738890cd3dda61b77e695690d459|https://media-assets-ggwp.s3.ap-southeast-1.amazonaws.com/2020/01/jutsu-naruto-320x180.jpg|https://cdn-2.tstatic.net/kaltim/foto/bank/images/naruto-07070.jpg|http://192.168.43.238/CODE/ws/assets/img/produk/s1.jpeg|http://192.168.43.238/CODE/ws/assets/img/produk/s2.jpeg|http://localhost/CODE/ws/assets/img/produk/bg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `V2_kategori`
--

CREATE TABLE `V2_kategori` (
  `id` int(10) NOT NULL,
  `json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`json`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `V2_kategori`
--

INSERT INTO `V2_kategori` (`id`, `json`) VALUES
(9639, '{\r\n    \"show_disclaimer\": false,\r\n    \"query_rewrite\": {},\r\n    \"adjust\": {},\r\n    \"version\": \"96cea7a28b3dfca4a50f07034f8766a6\",\r\n    \"algorithm\": \"eyJzZWFyY2giOiI3LmEuMjA5QFNVVldYWmEwTE1kMSIsImFkcyI\",\r\n    \"need_next_search\": false,\r\n    \"total_count\": 1,\r\n    \"error\": null,\r\n    \"total_ads_count\": 0,\r\n    \"disclaimer_infos\": [],\r\n    \"nomore\": true,\r\n    \"price_adjust\": {},\r\n    \"json_data\": \"\",\r\n    \"suggestion_algorithm\": 0,\r\n    \"items\": [\r\n        {\r\n            \"itemid\": 8005807148,\r\n            \"welcome_package_info\": null,\r\n            \"liked\": false,\r\n            \"recommendation_info\": null,\r\n            \"bundle_deal_info\": null,\r\n            \"price_max_before_discount\": -2,\r\n            \"tracking_info\": {\r\n                \"multi_search_tracking\": [\r\n                    0\r\n                ],\r\n                \"viral_spu_tracking\": null,\r\n                \"business_tracking\": null\r\n            },\r\n            \"image\": \"c704738890cd3dda61b77e69569\",\r\n            \"recommendation_algorithm\": null,\r\n            \"is_cc_installment_payment_eligible\": true,\r\n            \"shopid\": 331253719,\r\n            \"can_use_wholesale\": true,\r\n            \"group_buy_info\": null,\r\n            \"reference_item_id\": \"\",\r\n            \"currency\": \"IDR\",\r\n            \"raw_discount\": 0,\r\n            \"show_free_shipping\": false,\r\n            \"video_info_list\": [],\r\n            \"ads_keyword\": null,\r\n            \"collection_id\": null,\r\n            \"images\": [\r\n                \"c704738890cd3dda61b77e69569\"\r\n            ],\r\n            \"is_preferred_plus_seller\": false,\r\n            \"price_before_discount\": 0,\r\n            \"is_category_failed\": false,\r\n            \"show_discount\": 0,\r\n            \"cmt_count\": 0,\r\n            \"view_count\": 1,\r\n            \"display_name\": null,\r\n            \"catid\": 82,\r\n            \"voucher_info\": null,\r\n            \"upcoming_flash_sale\": null,\r\n            \"is_official_shop\": false,\r\n            \"brand\": \"Tidak Ada \",\r\n            \"price_min\": 875927015,\r\n            \"liked_count\": 0,\r\n            \"can_use_bundle_deal\": true,\r\n            \"show_official_shop_label\": true,\r\n            \"coin_earn_label\": null,\r\n            \"price_min_before_discount\": -2,\r\n            \"cb_option\": 0,\r\n            \"sold\": 0,\r\n            \"deduction_info\": null,\r\n            \"stock\": 548,\r\n            \"status\": 1,\r\n            \"price_max\": 542733353,\r\n            \"add_on_deal_info\": null,\r\n            \"is_group_buy_item\": null,\r\n            \"flash_sale\": null,\r\n            \"price\": 716718273,\r\n            \"shop_location\": \"KOTA \",\r\n            \"item_rating\": {\r\n                \"rating_star\": 0,\r\n                \"rating_count\": [\r\n                    0,\r\n                    0,\r\n                    0,\r\n                    0,\r\n                    0,\r\n                    0\r\n                ],\r\n                \"rcount_with_image\": 0,\r\n                \"rcount_with_context\": 0\r\n            },\r\n            \"show_official_shop_label_in_title\": true,\r\n            \"tier_variations\": [\r\n                {\r\n                    \"images\": [],\r\n                    \"properties\": [],\r\n                    \"type\": 0,\r\n                    \"name\": \"\",\r\n                    \"options\": [\r\n                        \"\"\r\n                    ]\r\n                }\r\n            ],\r\n            \"is_adult\": false,\r\n            \"discount\": null,\r\n            \"flag\": 0,\r\n            \"is_non_cc_installment_payment_eligible\": false,\r\n            \"has_lowest_price_guarantee\": false,\r\n            \"json_data\": null,\r\n            \"has_group_buy_stock\": null,\r\n            \"match_type\": null,\r\n            \"preview_info\": null,\r\n            \"welcome_package_type\": 0,\r\n            \"exclusive_price_info\": null,\r\n            \"name\": \"Netpot hidroponik hitam ukuran 5cm isi \",\r\n            \"distance\": null,\r\n            \"adsid\": null,\r\n            \"ctime\": 2349072862,\r\n            \"wholesale_tier_list\": [],\r\n            \"show_shopee_verified_label\": false,\r\n            \"campaignid\": null,\r\n            \"show_official_shop_label_in_normal_position\": null,\r\n            \"item_status\": \"n\",\r\n            \"shopee_verified\": true,\r\n            \"hidden_price_display\": null,\r\n            \"size_chart\": null,\r\n            \"item_type\": 0,\r\n            \"shipping_icon_type\": null,\r\n            \"campaign_stock\": null,\r\n            \"label_ids\": [],\r\n            \"service_by_shopee_flag\": 0,\r\n            \"badge_icon_type\": 0,\r\n            \"historical_sold\": 0,\r\n            \"transparent_background_image\": \"\"\r\n        }\r\n    ],\r\n    \"reserved_keyword\": \"\",\r\n    \"hint_keywords\": []\r\n}');

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
(2, 'tanaman buah'),
(3, 'tanaman lindung'),
(4, 'tanaman herbal');

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
-- Indeks untuk tabel `v2_call_required`
--
ALTER TABLE `v2_call_required`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `V2_kategori`
--
ALTER TABLE `V2_kategori`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT untuk tabel `v2_call_required`
--
ALTER TABLE `v2_call_required`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `V2_kategori`
--
ALTER TABLE `V2_kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9640;

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
