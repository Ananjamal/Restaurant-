-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 02:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `total` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `device_id`, `item_id`, `item_name`, `quantity`, `price`, `image`, `total`, `created_at`, `updated_at`) VALUES
(21, 1, NULL, 17, 'Caka', 1, 10.00, 'public/menus/muj1hy86JtHCegum2QNyimQo5DiqSrVAIV5Zp7gl.jpg', 10.00, '2024-06-01 06:46:18', '2024-06-01 06:46:18'),
(22, 1, NULL, 15, 'CHOCOLATE FUDGECAKE', 1, 4.50, 'public/menus/2HgBOUfpKBRz1PLJt8xF68EYcGm9rlAYt3rsXSCS.jpg', 4.50, '2024-06-01 06:46:19', '2024-06-01 06:46:19'),
(23, 1, NULL, 16, 'CHICKEN TIKKA MASALA', 1, 9.50, 'public/menus/smdRzO1J1pwaztea1c9bjC8rwc3t1REm83OWh63S.jpg', 9.50, '2024-06-01 06:46:20', '2024-06-01 06:46:20'),
(24, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 9, 'GARLIC BREAD', 1, 8.50, 'public/menus/ScRRWxtwMkxWjSlOcpbBY51QVg9IQb9yYk80TsL6.jpg', 8.50, '2024-06-01 14:04:38', '2024-06-01 14:04:38'),
(25, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 10, 'MIXED SALAD', 1, 25.00, 'public/menus/Sr7gzlZ4Y2kakgx3ZD01iw5YDbavHL8Q903ToyyL.jpg', 25.00, '2024-06-01 14:04:46', '2024-06-01 14:04:46'),
(26, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 11, 'BBQ CHICKEN WINGS', 1, 10.00, 'public/menus/ZQRDxRaSyJACT7yfscTr9gz4c2W7dSdk6LuchI0m.jpg', 10.00, '2024-06-01 14:05:05', '2024-06-01 14:05:05'),
(27, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 12, 'MEAT FEAST PIZZA', 1, 5.00, 'public/menus/J3Pe8L2KfypYdEKjDQIgjVTc0WDw3ePLG8E5tbG8.jpg', 5.00, '2024-06-01 14:05:11', '2024-06-01 14:05:11'),
(28, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 18, 'Champagne', 1, 40.00, 'public/menus/ipV1WuUEbQPp3vDCbAFiWoBtU1UZG98cvwH3KUbT.jpg', 40.00, '2024-06-01 14:05:27', '2024-06-01 14:05:27'),
(29, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 16, 'CHICKEN TIKKA MASALA', 1, 9.50, 'public/menus/smdRzO1J1pwaztea1c9bjC8rwc3t1REm83OWh63S.jpg', 9.50, '2024-06-01 14:05:32', '2024-06-01 14:05:32'),
(30, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 15, 'CHOCOLATE FUDGECAKE', 1, 4.50, 'public/menus/2HgBOUfpKBRz1PLJt8xF68EYcGm9rlAYt3rsXSCS.jpg', 4.50, '2024-06-01 14:05:34', '2024-06-01 14:05:34'),
(31, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 17, 'Caka', 1, 10.00, 'public/menus/muj1hy86JtHCegum2QNyimQo5DiqSrVAIV5Zp7gl.jpg', 10.00, '2024-06-01 14:05:37', '2024-06-01 14:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'STARTERS', '\n                    STARTERS\n', 'public/categories/ghe8m0JiuWJJJqdUAYkAp1s9ndDan7zIOpNnwv1L.jpg', '2024-05-23 04:58:03', '2024-05-23 04:58:03'),
(2, 'MAIN DISHES', 'MAIN DISHES\nMAIN DISHES\n', 'public/categories/4Gayp2PblMW6AODWSldaf0Vhc5nqOWSg26EcGIz9.jpg', '2024-05-23 04:58:13', '2024-05-23 04:58:13'),
(3, 'DESERTS', 'DESERTS\nDESERTS\nDESERTS\n', 'public/categories/xsZ2FYuawCcMtGDJicLQ1VgbvqNChnA8ikbgn6YV.jpg', '2024-05-23 04:58:24', '2024-05-23 04:58:24'),
(4, 'DRINKS', 'DRINKS\nDRINKS\n', 'public/categories/pXoOKB9PSqvpbN8EpbQnSvq22ZO1MZNt2nVBBjsd.png', '2024-05-23 04:58:34', '2024-05-23 04:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `specialization`, `bio`, `image`, `created_at`, `updated_at`) VALUES
(4, 'John Doggett', 'Italian cuisine', 'Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.', 'public/chefs/HNsmJzXQdWe6u4w6WeuUb1e5efn35XQ823qvBaQS.jpg', '2024-05-31 07:42:46', '2024-05-31 07:42:46'),
(5, 'Jeffrey Spender', 'Japanese sushi', 'Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.\n\n', 'public/chefs/Er6PnH0BKJFrJ5uKwPNKyc7ukruT79f1lZ5i8UQE.jpg', '2024-05-31 07:50:03', '2024-05-31 07:50:03'),
(6, 'Monica Reyes', 'Japanese sushi', 'Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.\n\n', 'public/chefs/j9WWT3Mmh9IUfmKrNxyAxzp6K4cQEYNL2EfC6PEe.jpg', '2024-05-31 07:50:22', '2024-05-31 07:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'cycyhagura@mailinator.com', 'Provident non beata', '2024-06-01 06:04:36', '2024-06-01 06:04:36'),
(2, 'jyxatefu@mailinator.com', 'Et optio explicabo', '2024-06-01 06:04:40', '2024-06-01 06:04:40'),
(3, 'mesoxiqera@mailinator.com', 'Quis eius illum acc', '2024-06-01 06:04:59', '2024-06-01 06:04:59'),
(4, 'buhuwi@mailinator.com', 'Ipsa perferendis qu', '2024-06-01 06:10:58', '2024-06-01 06:10:58'),
(5, 'aya@gmail.com', '`=qwekjask=fadljsdkfj', '2024-06-01 14:08:01', '2024-06-01 14:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount_amount` decimal(8,2) NOT NULL,
  `valid_from` timestamp NULL DEFAULT NULL,
  `valid_until` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount_amount`, `valid_from`, `valid_until`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'compo300', 300.00, '2024-05-22 21:00:00', '2024-05-17 21:00:00', 1, '2024-05-23 05:01:56', '2024-05-23 05:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `device_id`, `item_id`, `created_at`, `updated_at`) VALUES
(4, 1, NULL, 16, '2024-06-01 06:45:57', '2024-06-01 06:45:57'),
(5, 1, NULL, 15, '2024-06-01 06:45:59', '2024-06-01 06:45:59'),
(7, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 12, '2024-06-01 14:05:14', '2024-06-01 14:05:14'),
(8, NULL, 'L1NVZ496ceuluC2l4otSHRbk3m7Oyzwd2TPXuYz9', 13, '2024-06-01 14:05:17', '2024-06-01 14:05:17'),
(9, 4, NULL, 9, '2024-06-01 14:09:03', '2024-06-01 14:09:03'),
(10, 4, NULL, 11, '2024-06-01 14:09:04', '2024-06-01 14:09:04'),
(11, 4, NULL, 10, '2024-06-01 14:09:07', '2024-06-01 14:09:07'),
(12, 4, NULL, 18, '2024-06-01 14:09:13', '2024-06-01 14:09:13'),
(13, 4, NULL, 20, '2024-06-01 14:09:15', '2024-06-01 14:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Pizza', 'very Tasty', 'public/galleries/KNcZd73sPoH1Dl62LMgU1gEoOgBRtrGuuHkFUPWp.jpg', '2024-05-31 14:46:39', '2024-05-31 14:46:39'),
(5, 'gallery02', 'very Tasty', 'public/galleries/ZKQbRFG9YvNeBZLHGj7jVmaREqd80Yoes2WRKiJm.jpg', '2024-05-31 14:47:29', '2024-05-31 14:47:29'),
(6, 'gallery03', 'very Tasty', 'public/galleries/FXUWiKYzzQke0ovB0bDC9aZRDXZ74jExWucUcpTU.jpg', '2024-05-31 14:47:50', '2024-05-31 14:47:50'),
(7, 'gallery04', 'very Tasty', 'public/galleries/rDXnWbnyqM3FgOhfysbebU95uCKGpIex4AOEAVl6.jpg', '2024-05-31 14:48:05', '2024-05-31 14:48:05'),
(8, 'gallery05', 'very Tasty', 'public/galleries/HIM2uNTkhy6HBmoVMpu4UtbjUmFAoZv2LoOqNxAo.jpg', '2024-05-31 14:48:20', '2024-05-31 14:48:20'),
(9, 'gallery06', 'very Tasty', 'public/galleries/dAXJKYTUxoUYCKnETyXZClRWrM4nLGo6umSzB7nl.jpg', '2024-05-31 14:48:45', '2024-05-31 14:48:45'),
(10, 'gallery07', 'very Tasty', 'public/galleries/PUDwEveHWOrviDsMjN41rJ0jmbYxlFawU4bNmUsY.jpg', '2024-05-31 14:49:33', '2024-05-31 14:49:33'),
(11, 'gallery08', 'very Tasty', 'public/galleries/mmT7RARBMSdgdCFwfOvlcRKRggJL1MC1cUy3g6O3.jpg', '2024-05-31 14:49:48', '2024-05-31 14:49:48'),
(12, 'gallery09', 'very Tasty', 'public/galleries/FKjc2PeeL9Si7xr2LefeTasA0gkwRLqs12lSGTqR.jpg', '2024-05-31 14:50:09', '2024-05-31 14:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `name`, `image`, `description`, `price`, `availability`, `created_at`, `updated_at`) VALUES
(9, 1, 'GARLIC BREAD', 'public/menus/ScRRWxtwMkxWjSlOcpbBY51QVg9IQb9yYk80TsL6.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 8.50, 1, '2024-06-01 06:21:30', '2024-06-01 06:21:30'),
(10, 1, 'MIXED SALAD', 'public/menus/Sr7gzlZ4Y2kakgx3ZD01iw5YDbavHL8Q903ToyyL.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 25.00, 1, '2024-06-01 06:22:19', '2024-06-01 06:22:19'),
(11, 1, 'BBQ CHICKEN WINGS', 'public/menus/ZQRDxRaSyJACT7yfscTr9gz4c2W7dSdk6LuchI0m.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 10.00, 1, '2024-06-01 06:22:54', '2024-06-01 06:22:54'),
(12, 2, 'MEAT FEAST PIZZA', 'public/menus/J3Pe8L2KfypYdEKjDQIgjVTc0WDw3ePLG8E5tbG8.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 5.00, 1, '2024-06-01 06:23:30', '2024-06-01 06:23:30'),
(13, 2, 'CHICKEN TIKKA MASALA', 'public/menus/Gy7TavkknxxSdO6F5nAYvUoakJKoIVpja9JKmpmJ.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 15.00, 1, '2024-06-01 06:24:31', '2024-06-01 06:24:31'),
(14, 2, 'SPICY MEATBALLS', 'public/menus/aLZkFE0x3dZXsyPPdQfYpql8LBytoUYkkSmGrR95.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 6.50, 1, '2024-06-01 06:25:18', '2024-06-01 06:25:18'),
(15, 3, 'CHOCOLATE FUDGECAKE', 'public/menus/2HgBOUfpKBRz1PLJt8xF68EYcGm9rlAYt3rsXSCS.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 4.50, 1, '2024-06-01 06:26:16', '2024-06-01 06:26:16'),
(16, 3, 'CHICKEN TIKKA MASALA', 'public/menus/smdRzO1J1pwaztea1c9bjC8rwc3t1REm83OWh63S.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 9.50, 1, '2024-06-01 06:26:46', '2024-06-01 06:26:46'),
(17, 3, 'Caka', 'public/menus/muj1hy86JtHCegum2QNyimQo5DiqSrVAIV5Zp7gl.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 10.00, 1, '2024-06-01 06:27:51', '2024-06-01 06:45:33'),
(18, 4, 'Champagne', 'public/menus/ipV1WuUEbQPp3vDCbAFiWoBtU1UZG98cvwH3KUbT.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 40.00, 1, '2024-06-01 06:40:26', '2024-06-01 06:40:26'),
(19, 4, 'BELISARIO ROLDAN', 'public/menus/FAzYYk3XU6vvKkRxkWMBHFVmgIovtQw9VHN2dIBW.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 20.00, 1, '2024-06-01 06:42:08', '2024-06-01 06:42:08'),
(20, 4, 'Soda', 'public/menus/t3utRIo6m5XnWTUxUsava4L7IyBpATe0and1hSf0.jpg', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis eleifend dapibus.\n', 8.00, 1, '2024-06-01 06:42:46', '2024-06-01 06:42:46'),
(21, 4, 'chocko', 'public/menus/tps1X3UhAh3RFq1ktMoScZBuXUtpdk9cl6Sz61sc.jpg', 'very testy', 50.00, 1, '2024-06-01 14:12:41', '2024-06-01 14:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2024_05_03_095944_create_permission_tables', 1),
(6, '2024_05_04_095258_create_categories_table', 1),
(7, '2024_05_15_095043_create_orders_table', 1),
(8, '2024_05_15_095059_create_menus_table', 1),
(9, '2024_05_15_095104_create_order_items_table', 1),
(10, '2024_05_15_095340_create_tables_table', 1),
(11, '2024_05_15_095345_create_reservations_table', 1),
(12, '2024_05_15_095414_create_reviews_table', 1),
(13, '2024_05_15_095434_create_contacts_table', 1),
(14, '2024_05_19_174034_create_carts_table', 1),
(15, '2024_05_21_061153_create_coupons_table', 1),
(16, '2024_05_21_064931_create_favorites_table', 1),
(17, '2024_05_21_170203_create_user_addresses_table', 1),
(18, '2024_05_21_175722_create_prices_table', 1),
(19, '2024_05_15_095343_create_reservations_table', 2),
(20, '2024_05_31_095228_create_chefs_table', 3),
(21, '2024_05_31_171340_create_gallery_table', 4),
(22, '2024_05_31_173350_create_galleries_table', 5),
(23, '2024_06_01_085302_create_contacts_table', 6),
(24, '2024_06_01_090416_create_contacts_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `type`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 190.00, NULL, 'directCheck', 'pending', '2024-05-23 05:02:12', '2024-05-23 05:02:12'),
(2, 1, 190.00, NULL, 'directCheck', 'delivered', '2024-05-23 05:02:41', '2024-05-23 06:43:59'),
(3, 1, 1034.00, NULL, 'directCheck', 'delivered', '2024-05-23 05:13:57', '2024-05-23 06:53:40'),
(4, 1, 710.00, NULL, 'directCheck', 'delivered', '2024-05-23 05:15:54', '2024-05-23 06:53:45'),
(5, 1, 38.00, NULL, 'directCheck', 'delivered', '2024-05-23 05:16:50', '2024-05-23 06:54:06'),
(6, 1, 274.00, NULL, 'creditCard', 'delivered', '2024-05-23 05:20:27', '2024-05-23 06:53:51'),
(7, 1, 58.00, NULL, 'directCheck', 'delivered', '2024-05-23 05:20:43', '2024-05-23 06:54:03'),
(8, 1, 40.00, NULL, 'creditCard', 'delivered', '2024-05-23 05:26:40', '2024-05-23 06:53:58'),
(9, 2, 100.00, NULL, 'creditCard', 'cancelled', '2024-05-23 07:03:08', '2024-05-23 07:09:05'),
(10, 1, 58.00, NULL, 'directCheck', 'pending', '2024-05-27 04:57:53', '2024-05-27 04:57:53'),
(11, 4, 134.00, NULL, 'paypal', 'pending', '2024-06-01 14:10:48', '2024-06-01 14:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `menu_id`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(18, 11, 9, 3, 25.50, '2024-06-01 14:10:48', '2024-06-01 14:10:48'),
(19, 11, 10, 4, 100.00, '2024-06-01 14:10:48', '2024-06-01 14:10:48'),
(20, 11, 11, 5, 50.00, '2024-06-01 14:10:48', '2024-06-01 14:10:48'),
(21, 11, 16, 3, 28.50, '2024-06-01 14:10:48', '2024-06-01 14:10:48'),
(22, 11, 19, 3, 60.00, '2024-06-01 14:10:48', '2024-06-01 14:10:48'),
(23, 11, 18, 4, 160.00, '2024-06-01 14:10:48', '2024-06-01 14:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `sub_total` int(11) NOT NULL,
  `shipping` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `user_id`, `device_id`, `sub_total`, `shipping`, `discount`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 24, 10, 0, 34, '2024-05-23 05:01:29', '2024-06-01 06:46:31'),
(2, 2, NULL, 390, 10, 300, 100, '2024-05-23 07:02:42', '2024-05-23 07:03:03'),
(3, 4, NULL, 424, 10, 300, 134, '2024-06-01 14:08:53', '2024-06-01 14:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `num_guests` int(11) NOT NULL,
  `occasion` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'confirmed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `table_id`, `name`, `email`, `phone`, `reservation_date`, `reservation_time`, `num_guests`, `occasion`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 8, 'Quod expedita occaec', 'qarinore@mailinator.com', '78', '1989-01-25', '20:23:00', 2, 'Wedding', 'cancelled', '2024-05-26 15:46:43', '2024-05-31 04:20:43'),
(4, 2, 9, 'Eos non quam quo ea ', 'kygata@mailinator.com', '19', '1983-03-18', '19:22:00', 3, 'Personal', 'confirmed', '2024-05-28 14:10:30', '2024-05-28 14:10:30'),
(5, 1, 9, 'Enim iure optio vol', 'piloj@mailinator.com', '63', '1998-07-11', '18:15:00', 6, 'Birthday', 'cancelled', '2024-05-28 14:53:51', '2024-05-31 04:20:52'),
(6, 1, 7, 'Consectetur obcaeca', 'byfy@mailinator.com', '3532354', '1995-03-19', '16:58:00', 4, 'Personal', 'cancelled', '2024-05-28 14:55:43', '2024-05-31 04:21:01'),
(7, 1, 7, 'Nisi consectetur pra', 'soryfab@mailinator.com', '9', '2013-04-28', '14:21:00', 10, 'Personal', 'cancelled', '2024-05-28 14:55:49', '2024-05-31 04:21:50'),
(8, 1, 9, 'Et veritatis nostrum', 'hezoty@mailinator.com', '52', '2023-12-01', '14:01:00', 2, 'Wedding', 'confirmed', '2024-05-28 14:56:06', '2024-05-28 14:56:06'),
(9, 3, 7, 'heba', 'heba@gmail.com', '05952766534', '2024-06-07', '18:35:00', 4, 'Personal', 'confirmed', '2024-05-31 04:32:00', '2024-05-31 04:32:00'),
(10, 1, 9, 'Sed voluptatum et de', 'pifoqe@mailinator.com', '10', '1988-03-28', '10:31:00', 1, 'Alias ut eum quos do', 'confirmed', '2024-05-31 05:45:56', '2024-05-31 05:45:56'),
(11, 1, 9, 'anan', 'anan@gmail.com', '0592766534', '2024-06-01', '10:00:00', 4, 'Personal', 'cancelled', '2024-05-31 06:12:06', '2024-05-31 06:13:47'),
(12, 1, 9, 'sameh', 'sameh@gmail.com', '05955955', '2024-06-01', '22:00:00', 4, 'Personal', 'cancelled', '2024-05-31 06:12:49', '2024-05-31 06:13:24'),
(13, 4, 9, 'aya', 'aya@gmail.com', '059854384', '2024-06-02', '10:00:00', 4, 'Personal', 'cancelled', '2024-06-01 14:07:27', '2024-06-01 14:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-05-23 04:57:14', '2024-05-23 04:57:14'),
(2, 'user', 'web', '2024-05-23 04:57:14', '2024-05-23 04:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `capacity`, `status`, `created_at`, `updated_at`) VALUES
(7, 4, 1, '2024-05-26 14:06:05', '2024-05-26 14:06:05'),
(8, 1, 1, '2024-05-26 14:06:08', '2024-05-26 14:06:08'),
(9, 4, 1, '2024-05-26 14:06:12', '2024-05-26 14:06:12'),
(10, 2, 1, '2024-05-31 04:33:34', '2024-05-31 04:33:34'),
(11, 2, 1, '2024-05-31 04:33:41', '2024-05-31 04:33:41'),
(12, 5, 1, '2024-06-01 14:13:16', '2024-06-01 14:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2024-05-23 04:57:14', '$2y$10$ZJgX.a1YzKZWYfF3GCrnIeVUFLCmSwcHolH0M1Q2yvQFBhgbvdc1q', NULL, '2024-05-23 04:57:14', '2024-05-23 04:57:14'),
(2, 'anoon', 'anoon@gmail.com', NULL, '$2y$10$D287GMo6wexN0SBT1/UQpudKZl.cMd2zqykM7tSiNmnH6amHxoZxa', NULL, '2024-05-23 07:02:31', '2024-05-23 07:02:31'),
(3, 'heba', 'heba@gmail.com', NULL, '$2y$10$vCLG8wot3rY7uahEbNq/KudvLpK.giVtxHwXbDhFV0l3EkANkRZj6', NULL, '2024-05-31 04:31:06', '2024-05-31 04:31:06'),
(4, 'aya', 'aya@gmail.com', NULL, '$2y$10$hzSaesxwpbV69hrmVQeyC.OjGOL/.R90RDs3momQPI6rbO23ObsdW', NULL, '2024-06-01 14:06:25', '2024-06-01 14:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `order_id`, `first_name`, `last_name`, `phone`, `address`, `city`, `state`, `zip_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Hakeem', 'Cortez', '+1 (741) 233-7495', 'Elit Nam voluptate ', 'Ullam ea deserunt et', 'Choose...', 60195, 'Palestine', '2024-05-23 05:02:41', '2024-05-23 05:02:41'),
(2, 1, 3, 'Clarke', 'Kent', '+1 (505) 547-6378', 'Dolor quidem minima ', 'Commodo animi moles', 'Choose...', 69191, 'Palestine', '2024-05-23 05:13:57', '2024-05-23 05:13:57'),
(3, 1, 4, 'Samuel', 'Middleton', '+1 (791) 135-8334', 'Sed at neque optio ', 'Aut saepe quidem ali', 'West Bank', 55235, 'Choose...', '2024-05-23 05:15:54', '2024-05-23 05:15:54'),
(4, 1, 5, 'Keely', 'Lang', '+1 (522) 426-2404', 'Culpa sit tempora ', 'Repudiandae sunt asp', 'Jerusalem', 78739, 'Choose...', '2024-05-23 05:16:50', '2024-05-23 05:16:50'),
(5, 1, 6, 'Ignacia', 'Hayes', '+1 (439) 688-9689', 'Molestias recusandae', 'Vero voluptatum quib', 'Gaza', 61624, 'Palestine', '2024-05-23 05:20:27', '2024-05-23 05:20:27'),
(6, 1, 7, 'Zeus', 'Griffin', '+1 (327) 635-5888', 'Voluptate accusantiu', 'Magnam ea quia id re', 'West Bank', 17419, 'Palestine', '2024-05-23 05:20:43', '2024-05-23 05:20:43'),
(7, 1, 8, 'Martin', 'Bray', '+1 (843) 595-4647', 'Numquam illum non v', 'Et ipsam omnis susci', 'Gaza', 93510, 'Palestine', '2024-05-23 05:26:40', '2024-05-23 05:26:40'),
(8, 2, 9, 'Veda', 'Calderon', '+1 (488) 783-7812', 'Voluptatibus et qui ', 'Quis officia aut vel', 'Choose...', 80692, 'Palestine', '2024-05-23 07:03:08', '2024-05-23 07:03:08'),
(9, 1, 10, 'Josiah', 'Gould', '+1 (643) 271-3455', 'Laboriosam et moles', 'Sit aut esse ut aut', 'Ramallah', 10683, 'Palestine', '2024-05-27 04:57:53', '2024-05-27 04:57:53'),
(10, 4, 11, 'Colleen', 'Gates', '+1 (388) 999-3949', 'Et ipsum voluptatibu', 'Nesciunt et rerum a', 'Bethlehem', 50832, 'Choose...', '2024-06-01 14:10:48', '2024-06-01 14:10:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_item_id_foreign` (`item_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`),
  ADD KEY `favorites_item_id_foreign` (`item_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_user_id_foreign` (`user_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_table_id_foreign` (`table_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`),
  ADD KEY `user_addresses_order_id_foreign` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`),
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
