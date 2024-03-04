-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: styled_by_bella
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Summer','2024-02-14 23:33:12','2024-02-14 23:33:12'),(2,'Fall','2024-02-14 23:33:12','2024-02-14 23:33:12'),(3,'Winter','2024-02-14 23:33:12','2024-02-14 23:33:12'),(4,'Spring','2024-02-14 23:33:12','2024-02-14 23:33:12');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2014_10_12_000000_create_users_table',1),(8,'2014_10_12_100000_create_password_reset_tokens_table',1),(9,'2019_08_19_000000_create_failed_jobs_table',1),(10,'2019_12_14_000001_create_personal_access_tokens_table',1),(11,'2024_02_13_083323_create_categories_table',1),(12,'2024_02_13_120332_create_products_table',1),(13,'2024_02_20_181652_create_orders_table',2),(14,'2024_02_20_184113_create_order_items_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`),
  CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,2,550.00,'2024-02-27 00:30:47','2024-02-27 00:30:47'),(2,2,2500.00,'2024-02-27 00:33:57','2024-02-27 00:33:57'),(3,2,500.00,'2024-02-27 01:35:07','2024-02-27 01:35:07'),(4,2,1000.00,'2024-02-27 01:35:48','2024-02-27 01:35:48'),(5,2,1000.00,'2024-02-27 01:38:44','2024-02-27 01:38:44'),(6,2,2000.00,'2024-03-01 00:21:22','2024-03-01 00:21:22'),(7,2,2270.00,'2024-03-01 00:30:57','2024-03-01 00:30:57'),(8,4,2850.00,'2024-03-01 00:45:22','2024-03-01 00:45:22'),(9,2,3070.00,'2024-03-03 17:27:51','2024-03-03 17:27:51');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Long Blue Shirt, White Short, Brown Sandals','20240214234836_blueshirtwhiteshort.jpg','m',500.00,1,'2024-02-14 23:48:36','2024-02-14 23:48:36'),(2,'Red and Green Flowers skirt, Black Top, Black shoes, Sunglasses','20240214235353_flowerskirtblacktop.jpg','m',800.00,1,'2024-02-14 23:53:53','2024-02-14 23:53:53'),(3,'Yellow top, White Flowered Skirt, Yellow Shoes','20240215001600_yellowtopflowerskirt.jpg','s',850.00,1,'2024-02-15 00:16:00','2024-02-15 00:16:00'),(4,'Blue Top, Cream Skirt, Blue shoes, Blue Clutch and Sunglasses','20240215002313_bluetopblueshoes.jpg','m',950.00,1,'2024-02-15 00:23:13','2024-02-15 00:23:13'),(6,'White Top, Brown Skirt, Brown Hat','20240215002839_whitetopbrownskirt.jpg','xs',700.00,1,'2024-02-15 00:28:39','2024-02-15 00:28:39'),(7,'White Suit, Lime Top, White Heels, White Handbag','20240215002952_whiteskirtgreentop.jpg','xs',1000.00,1,'2024-02-15 00:29:52','2024-02-15 00:29:52'),(8,'Black dress, white Coat, Black Shoes, White Bag','20240219161823_blackandwhite.jpg','m',1000.00,3,'2024-02-19 16:18:23','2024-02-19 16:18:23'),(9,'Black skirt, Black heels, Lacy Black and Beige Top','20240219162030_blackonblackonblack.jpg','m',1000.00,4,'2024-02-19 16:20:30','2024-02-19 16:20:30'),(10,'Blue Coat, White dress, White Pants, Blue Boots, Blue bag','20240219162310_bluecoatwhitesuit.jpg','l',2500.00,3,'2024-02-19 16:23:10','2024-02-19 16:23:10'),(11,'Grey Sweater, Black Pants, Checked Coat, Brown Bag','20240220145525_checkedcoat.jpg','xs',1500.00,3,'2024-02-19 16:41:52','2024-02-20 14:55:25'),(12,'Green Jacket, Green Pull-neck, Black Pants, Green Bag, Boots','20240219164331_greensuit.jpg','xs',2500.00,3,'2024-02-19 16:43:31','2024-02-19 16:43:31'),(13,'Pink Coat, Pink Sweater, Pink Pants, Pink Boots, Pink Bag','20240219164459_pinksuit.jpg','xs',2700.00,3,'2024-02-19 16:44:59','2024-02-19 16:44:59'),(14,'Red Coat, Black and White Dress,Black Boots, Red Bag','20240219164733_redblackandwhite.jpg','xs',3200.00,3,'2024-02-19 16:47:33','2024-02-19 16:47:33'),(15,'Brown Jacket, white Top, White Pants, Brown Boots and Bag','20240219164918_whitesuitbrownjacket.jpg','m',4800.00,4,'2024-02-19 16:49:18','2024-02-19 16:49:18'),(16,'Brown Long Coat, White Top, Black Pants, Black Boots','20240219165154_blackpantswhitepullneck.jpg','l',850.00,2,'2024-02-19 16:51:54','2024-02-19 16:51:54'),(17,'Black and Gold Dress, Black Heels, Gold Clutch','20240219205118_blackongold.jpg','s',800.00,4,'2024-02-19 20:51:18','2024-02-19 20:51:18'),(18,'Black Pants, Lacy Beige Top, Beige Heels, Beige Clutch','20240219205319_blackpantsgoldebtop.jpg','m',950.00,4,'2024-02-19 20:53:19','2024-02-19 20:53:19'),(19,'Blue Suit, White Coat, White Sneakers, White Bag, Brown Hat','20240219205519_blueandwhite.jpg','l',780.00,4,'2024-02-19 20:55:19','2024-02-19 20:55:19'),(20,'White, Red Tops, Green patterned Skirt, White Bag, Heels','20240219205700_greenskirtredseethrutop.jpg','xs',670.00,4,'2024-02-19 20:57:00','2024-02-19 20:57:00'),(21,'White Shorts, White Lacy Top, Lime Coat, White Bag, White Sneakers','20240219205855_limecoatwhitetop.jpg','xs',590.00,4,'2024-02-19 20:58:55','2024-02-19 20:58:55'),(22,'Black Skirt, Patterned Top, Beige Heels, Beige Bag','20240219210011_navyblueskirtbluetopbrownshoes.jpg','xs',520.00,4,'2024-02-19 21:00:11','2024-02-19 21:00:11'),(23,'Pink Coat, white Top, Blue Jeans Short, White Sneakers','20240219211151_pinkcoatblueshorts.jpg','xs',550.00,4,'2024-02-19 21:11:51','2024-02-19 21:11:51'),(24,'Pink Dress, White Bag, White Sneakers, Pink Hat','20240219211307_pinkdress.jpg','xs',500.00,4,'2024-02-19 21:13:07','2024-02-19 21:13:07'),(25,'Checkered Pink Suit, Pink Top, White Sneakers, Pink Hat','20240219211622_pinktopbeigesuit.jpg','xs',680.00,4,'2024-02-19 21:16:23','2024-02-19 21:16:23'),(26,'Yellow Skirt, Black Top, Black Heels, Flowered Bag','20240219212605_yellowskirtblacktopflowerbag.jpg','xs',470.00,4,'2024-02-19 21:26:05','2024-02-19 21:26:05'),(27,'Blue Jean Coat, White Dress, White and Brown Boots, Brown Hat','20240219223901_bluejeancoatwhitedress.jpg','l',450.00,2,'2024-02-19 22:39:01','2024-02-19 22:39:01'),(28,'Black Coat, Black Top, Blue Jeans, Black Shoes, White Bag','20240219224045_bluejeansblacktopblackcoat.jpg','xs',568.00,2,'2024-02-19 22:40:45','2024-02-19 22:40:45'),(29,'Maroon Top, Blue jeans, Checkered Shirt, Black Boots, Black Bag','20240219225039_maroontopbluejeanscheckedshirt.jpg','xs',870.00,2,'2024-02-19 22:50:39','2024-02-19 22:50:39'),(30,'Pink Jumper, White Top, White Jeans, Pink Shoes, Pink Bag','20240219225203_pinkjumperwhitejeans.jpg','xs',600.00,2,'2024-02-19 22:52:03','2024-02-19 22:52:03'),(31,'Pink Sweater, White Crop Top, Blue Jeans, Pink Hat, Pink Shoes','20240219225318_pinksweaterbluejeans.jpg','xs',700.00,2,'2024-02-19 22:53:18','2024-02-19 22:53:18');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sophia','sophiaterryyu@gmail.com',NULL,'$2y$12$ZK23yUqPHcM9JSKuu6f.yez2OwM0xBB.NJPjKJ3pgbI6xlsKDGfz2',NULL,'2024-02-14 23:51:00','2024-02-14 23:51:00'),(2,'Bella','bellathecat3474@gmail.com',NULL,'$2y$12$CEgPm8cEamhc47UV/x7nquMwEVxb1HpTr59kkLKridh5kMwsSAC3y',NULL,'2024-02-26 20:17:57','2024-02-26 20:17:57'),(3,'Luna','lunathecat3474@gmail.com',NULL,'$2y$12$rTKyoifdcllhEDyuKvW/s.aMq5KpZoN9CS7QROFpUhFtYmbC8m6NW',NULL,'2024-02-26 20:28:29','2024-02-26 20:28:29'),(4,'Juliet Holman','vamomix@mailinator.com',NULL,'$2y$12$0zxJBFtZGv4oIFwYi8G/4u3e.kUvtZJdJ6KL/U74JYeaSqhWI6SHi',NULL,'2024-03-01 00:44:30','2024-03-01 00:44:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-03 20:10:00
