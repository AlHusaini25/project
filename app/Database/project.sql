-- MySQL dump 10.13  Distrib 8.4.3, for Win64 (x86_64)
--
-- Host: localhost    Database: proci14
-- ------------------------------------------------------
-- Server version	8.4.3

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2025-12-29-170612','CreateProjectTable','default','App',1767028902,1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_project` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `gambar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,'Web Kopi','web-kopi','webgewh.JPG','Website bisnis pribadi yang dibangun menggunakan HTML\r\n dan CSS untuk menampilkan halaman membeli kopi .',NULL,NULL),(2,'Web Portofolio','web-portofolio','webport.JPG','Website portofolio pribadi yang dibangun menggunakan HTML\r\n dan Bootstrap untuk menampilkan karya dan keahlian saya.',NULL,NULL),(83,'Id saepe et accusantium quos.','amet-optio-odio-saepe','default.png','Ea soluta modi temporibus laboriosam suscipit ab. Recusandae tenetur et aut id quis assumenda. Incidunt ducimus impedit rerum et excepturi tempore.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(84,'Voluptatem quia explicabo.','nemo-officiis-voluptatum-asperiores','default.png','Maxime sunt quae et voluptatem. Voluptates ad quidem optio et asperiores commodi.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(85,'Non quasi at temporibus.','quo-excepturi-eum','default.png','Voluptatem rem aliquid velit pariatur mollitia incidunt. Dolores molestiae optio similique omnis.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(86,'Ut modi perferendis.','fugit-labore-fuga-repudiandae','default.png','Impedit sapiente magnam suscipit maiores aut sint. Corrupti aliquid rerum porro officia. Eos nesciunt quis sequi possimus. Illum blanditiis velit ut dolor. Ipsam iure non fugit iste quia.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(87,'Consequatur ad mollitia.','quia-omnis-eveniet-rerum-illo','default.png','Laboriosam earum sit dolores est. Molestiae porro ad perferendis reiciendis repudiandae quod consequuntur. In qui omnis quaerat autem.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(88,'Repellendus est fugit quia.','at-adipisci-dolorem','default.png','Eveniet tempore quod fugit commodi quod fugiat. Saepe officiis cupiditate dolor doloremque ea. Sed molestias harum rerum ipsa architecto necessitatibus possimus. Maiores corrupti error qui corrupti nesciunt.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(89,'Qui quam hic.','et-qui-sed','default.png','Id commodi qui laborum molestiae possimus veniam placeat. Et qui natus delectus sunt.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(91,'At quia et impedit.','temporibus-quibusdam','default.png','Illo reprehenderit non sed error. Dicta nemo soluta est eveniet deleniti qui velit. Nulla quas quaerat et qui et. Dolorem architecto doloremque explicabo est.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(92,'Dolor labore.','cupiditate-et-autem','default.png','Nulla ex ad aut. Non et qui saepe perferendis velit tempora corrupti dolorum. Tenetur quis quia et et quo aut. Quis in voluptatum et assumenda sed et. Dolores dolor sit quis id error qui aperiam.','2025-12-29 18:12:32','2025-12-29 18:12:32'),(93,'Quaerat vero deleniti mollitia.','aliquam-quisquam-omnis','default.png','Quasi sed non fuga explicabo et exercitationem reiciendis. Aut itaque adipisci quam at qui qui explicabo sapiente. Sed autem necessitatibus ad aut consequuntur tempora.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(94,'Quia nisi est.','possimus-dolorem-quia-qui','default.png','Repudiandae ea consequuntur atque ducimus. Non temporibus ducimus voluptatum. Est dolor est esse tempore. Est alias consequatur reprehenderit.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(95,'Officia repellat sit.','aspernatur-fuga-ex','default.png','Quo accusamus aspernatur ipsam et consequatur modi minima. Natus inventore labore illum harum. Consectetur ex dolorem dolorem magni recusandae aliquam.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(96,'Soluta in voluptatum doloremque.','est-et','default.png','Accusamus in nisi hic qui ut. Eum voluptatum perferendis qui rerum sit esse est. Nihil nesciunt explicabo perspiciatis animi vel et suscipit.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(97,'Dolorem aut necessitatibus labore.','illo-voluptas-qui','default.png','Nam omnis a quaerat asperiores sint qui. Natus laudantium debitis ad nesciunt. Quae quis aliquid eveniet unde et non aut. Exercitationem aut nihil aliquid amet ut omnis ut.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(98,'Est suscipit aut ratione.','sed-cumque-esse','default.png','In totam enim quo inventore. Laudantium cum quo et repellat dolor impedit ut nesciunt. Dolores eaque dicta natus error mollitia harum rerum. Aliquid ratione qui tempora quam inventore nemo.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(99,'Quisquam omnis eos incidunt.','nisi-porro-laudantium','default.png','Ab sint sunt est voluptatum labore. Qui qui dolorem libero eligendi itaque esse. Soluta repellendus fugit laboriosam natus soluta ab quos.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(100,'Tempore architecto vitae aliquid.','dolores-voluptas-culpa','default.png','Dolore minus perspiciatis vel aut animi est. Veniam magnam in asperiores. Fugit et earum est natus aut illo sed.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(101,'Quidem itaque laudantium id.','sit-amet','default.png','Nemo expedita perspiciatis sunt odio ut unde. Vel molestiae occaecati blanditiis quia et occaecati. In mollitia ad quisquam.','2025-12-29 18:40:41','2025-12-29 18:40:41'),(102,'Et minima id quia.','aut-consequuntur-sed-voluptatem','default.png','Vero aperiam est consequuntur. Ipsum id praesentium ea. Ullam sit ut accusamus perspiciatis autem eius fugit.','2025-12-29 18:40:41','2025-12-29 18:40:41');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-30  1:49:45
