-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-24 15:43:50
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bark_bijou_product`
--

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT 0,
  `sales` int(11) DEFAULT 0,
  `status` enum('active','inactive') DEFAULT 'active',
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `product_name`, `vendor_id`, `category_id`, `price`, `stock`, `sales`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Organic Dog Food', 1, 1, 950.00, 200, 50, 'active', 'Premium organic dog food for all breeds.', '2025-02-24 07:14:31', '2025-02-24 07:37:49'),
(2, 'Grain-Free Dry Food', 1, 1, 1100.00, 150, 40, 'active', 'High-protein grain-free dog food.', '2025-02-24 07:14:31', '2025-02-24 07:37:57'),
(3, 'Chewy Beef Treats', 2, 2, 450.00, 250, 90, 'active', 'Delicious beef-flavored dog treats.', '2025-02-24 07:14:31', '2025-02-24 07:38:14'),
(4, 'Dental Care Sticks', 2, 2, 390.00, 300, 100, 'active', 'Dental chew sticks for healthy teeth.', '2025-02-24 07:14:31', '2025-02-24 07:38:17'),
(5, 'Chewable Bone Toy', 3, 3, 320.00, 300, 80, 'active', 'Durable chew toy for dogs.', '2025-02-24 07:14:31', '2025-02-24 07:38:27'),
(6, 'Interactive Puzzle Toy', 3, 3, 640.00, 120, 30, 'active', 'Puzzle toy to stimulate mental activity.', '2025-02-24 07:14:31', '2025-02-24 07:38:31'),
(7, 'Adjustable Dog Harness', 4, 4, 850.00, 100, 30, 'active', 'Comfortable and adjustable dog harness.', '2025-02-24 07:14:31', '2025-02-24 07:38:40'),
(8, 'Reflective Leash', 4, 4, 500.00, 200, 60, 'active', 'Reflective leash for night walks.', '2025-02-24 07:14:31', '2025-02-24 07:38:47'),
(9, 'Luxury Dog Bed', 5, 5, 2500.00, 80, 20, 'active', 'Soft and cozy dog bed.', '2025-02-24 07:14:31', '2025-02-24 07:38:49'),
(10, 'Orthopedic Memory Foam Bed', 5, 5, 3200.00, 50, 15, 'active', 'Supportive orthopedic dog bed.', '2025-02-24 07:14:31', '2025-02-24 07:38:59'),
(11, 'Anti-Flea Shampoo', 6, 6, 640.00, 150, 40, 'active', 'Anti-flea and tick dog shampoo.', '2025-02-24 07:14:31', '2025-02-24 07:39:04'),
(12, 'Hypoallergenic Conditioner', 6, 6, 700.00, 140, 35, 'active', 'Gentle conditioner for sensitive skin.', '2025-02-24 07:14:31', '2025-02-24 07:39:10'),
(13, 'Pet Car Seat', 7, 9, 1600.00, 90, 25, 'active', 'Comfortable car seat for dogs.', '2025-02-24 07:14:31', '2025-02-24 07:39:14'),
(14, 'Collapsible Travel Bowl', 7, 9, 320.00, 250, 120, 'active', 'Portable travel bowl for food and water.', '2025-02-24 07:14:31', '2025-02-24 07:39:16');

-- --------------------------------------------------------

--
-- 資料表結構 `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `category_name`) VALUES
(1, 'Dog Food'),
(2, 'Dog Treats'),
(3, 'Dog Toys'),
(4, 'Dog Accessories'),
(5, 'Dog Health & Care'),
(6, 'Dog Grooming'),
(7, 'Dog Training Equipment'),
(8, 'Dog Beds & Furniture'),
(9, 'Dog Travel & Carriers');

-- --------------------------------------------------------

--
-- 資料表結構 `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `product_reviews`
--

CREATE TABLE `product_reviews` (
  `review_id` int(11) NOT NULL,
  `star_rating` int(11) DEFAULT NULL CHECK (`star_rating` between 1 and 5),
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `review_content` text DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `product_stock`
--

CREATE TABLE `product_stock` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variant_combination` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product_stock`
--

INSERT INTO `product_stock` (`id`, `product_id`, `variant_combination`, `stock`) VALUES
(1, 1, 'Flavor: Beef', 100),
(2, 1, 'Flavor: Chicken', 80),
(3, 1, 'Flavor: Salmon', 60),
(4, 2, 'Flavor: Lamb', 90),
(5, 2, 'Flavor: Turkey', 70),
(6, 3, 'Flavor: Beef', 120),
(7, 3, 'Flavor: Duck', 95),
(8, 4, 'Flavor: Mint', 150),
(9, 4, 'Flavor: Carrot', 130),
(10, 5, 'Color: Red', 50),
(11, 5, 'Color: Blue', 40),
(12, 5, 'Color: Green', 30),
(13, 6, 'Color: Yellow', 70),
(14, 6, 'Color: Purple', 60),
(15, 7, 'Size: Small', 50),
(16, 7, 'Size: Medium', 40),
(17, 7, 'Size: Large', 30),
(18, 8, 'Material: Nylon', 90),
(19, 8, 'Material: Leather', 60),
(20, 9, 'Size: Medium + Cotton', 25),
(21, 9, 'Size: Large + Memory Foam', 15),
(22, 10, 'Size: Large + Memory Foam', 10),
(23, 11, 'Pack Size: 250ml', 80),
(24, 11, 'Pack Size: 500ml', 60),
(25, 12, 'Pack Size: 200ml', 70),
(26, 12, 'Pack Size: 400ml', 50),
(27, 13, 'Weight Capacity: 10kg', 30),
(28, 13, 'Weight Capacity: 20kg', 20),
(29, 14, 'Pack Size: Single Pack', 100),
(30, 14, 'Pack Size: Double Pack', 80);

-- --------------------------------------------------------

--
-- 資料表結構 `product_subcategories`
--

CREATE TABLE `product_subcategories` (
  `subcategory_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product_subcategories`
--

INSERT INTO `product_subcategories` (`subcategory_id`, `category_id`, `subcategory_name`) VALUES
(1, 1, 'Dry Dog Food'),
(2, 1, 'Wet Dog Food'),
(3, 1, 'Organic Dog Food'),
(4, 1, 'Grain-Free Dog Food'),
(5, 2, 'Chew Treats'),
(6, 2, 'Dental Treats'),
(7, 2, 'Training Treats'),
(8, 2, 'Natural Treats'),
(9, 3, 'Chew Toys'),
(10, 3, 'Interactive Toys'),
(11, 3, 'Squeaky Toys'),
(12, 3, 'Plush Toys'),
(13, 4, 'Leashes'),
(14, 4, 'Collars'),
(15, 4, 'Harnesses'),
(16, 4, 'ID Tags'),
(17, 5, 'Vitamins & Supplements'),
(18, 5, 'Dental Care'),
(19, 5, 'Hip & Joint Care'),
(20, 5, 'Digestive Health'),
(21, 6, 'Shampoo & Conditioners'),
(22, 6, 'Brushes & Combs'),
(23, 6, 'Nail Clippers'),
(24, 6, 'Ear & Eye Care'),
(25, 7, 'Training Pads'),
(26, 7, 'Clickers & Whistles'),
(27, 7, 'Training Collars'),
(28, 7, 'Agility Equipment'),
(29, 8, 'Orthopedic Beds'),
(30, 8, 'Heated Beds'),
(31, 8, 'Cushion Beds'),
(32, 8, 'Dog Sofas'),
(33, 9, 'Car Seats & Seat Belts'),
(34, 9, 'Pet Carriers'),
(35, 9, 'Travel Bowls'),
(36, 9, 'Backpacks & Slings');

-- --------------------------------------------------------

--
-- 資料表結構 `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `variant_value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `variant_id`, `variant_value`) VALUES
(1, 1, 3, 'Beef'),
(2, 1, 3, 'Chicken'),
(3, 1, 3, 'Salmon'),
(4, 2, 3, 'Lamb'),
(5, 2, 3, 'Turkey'),
(6, 3, 3, 'Beef'),
(7, 3, 3, 'Duck'),
(8, 4, 3, 'Mint'),
(9, 4, 3, 'Carrot'),
(10, 5, 2, 'Red'),
(11, 5, 2, 'Blue'),
(12, 5, 2, 'Green'),
(13, 6, 2, 'Yellow'),
(14, 6, 2, 'Purple'),
(15, 7, 1, 'Small'),
(16, 7, 1, 'Medium'),
(17, 7, 1, 'Large'),
(18, 8, 4, 'Nylon'),
(19, 8, 4, 'Leather'),
(20, 9, 1, 'Medium'),
(21, 9, 1, 'Large'),
(22, 9, 4, 'Cotton'),
(23, 9, 4, 'Memory Foam'),
(24, 10, 1, 'Large'),
(25, 10, 4, 'Memory Foam'),
(26, 11, 5, '250ml'),
(27, 11, 5, '500ml'),
(28, 12, 5, '200ml'),
(29, 12, 5, '400ml'),
(30, 13, 7, '10kg'),
(31, 13, 7, '20kg'),
(32, 14, 5, 'Single Pack'),
(33, 14, 5, 'Double Pack');

-- --------------------------------------------------------

--
-- 資料表結構 `variants`
--

CREATE TABLE `variants` (
  `variant_id` int(11) NOT NULL,
  `variant_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `variants`
--

INSERT INTO `variants` (`variant_id`, `variant_name`) VALUES
(1, 'Size'),
(2, 'Color'),
(3, 'Flavor'),
(4, 'Material'),
(5, 'Pack Size'),
(6, 'Breed Type'),
(7, 'Weight Capacity');

-- --------------------------------------------------------

--
-- 資料表結構 `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `created_at`) VALUES
(1, 'Pawfect Pet Supplies', '2024-01-10 02:00:00'),
(2, 'Bark & Bite Co.', '2024-01-15 04:30:00'),
(3, 'Furry Friends Essentials', '2024-01-20 06:45:00'),
(4, 'Happy Tails Distributors', '2024-01-25 01:20:00'),
(5, 'Canine Comfort Brands', '2024-02-01 08:10:00'),
(6, 'Woof Woof Toys', '2024-02-05 00:50:00'),
(7, 'Healthy Paws Nutrition', '2024-02-10 03:00:00'),
(8, 'Doggy Dream Beds', '2024-02-12 05:40:00'),
(9, 'Puppy Love Accessories', '2024-02-15 07:30:00'),
(10, 'Tail Waggers Training', '2024-02-18 09:25:00');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- 資料表索引 `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- 資料表索引 `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`);

--
-- 資料表索引 `product_stock`
--
ALTER TABLE `product_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- 資料表索引 `product_subcategories`
--
ALTER TABLE `product_subcategories`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`);

--
-- 資料表索引 `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `variant_id` (`variant_id`);

--
-- 資料表索引 `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`variant_id`);

--
-- 資料表索引 `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_stock`
--
ALTER TABLE `product_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_subcategories`
--
ALTER TABLE `product_subcategories`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `variants`
--
ALTER TABLE `variants`
  MODIFY `variant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- 資料表的限制式 `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- 資料表的限制式 `product_stock`
--
ALTER TABLE `product_stock`
  ADD CONSTRAINT `product_stock_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- 資料表的限制式 `product_subcategories`
--
ALTER TABLE `product_subcategories`
  ADD CONSTRAINT `product_subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`category_id`) ON DELETE CASCADE;

--
-- 資料表的限制式 `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_variants_ibfk_2` FOREIGN KEY (`variant_id`) REFERENCES `variants` (`variant_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
