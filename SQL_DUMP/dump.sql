/*
 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : vhreclame_vanilla_laravel

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 29/03/2023 16:38:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for abouts
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `abouts_section_id_foreign`(`section_id`) USING BTREE,
  CONSTRAINT `abouts_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES (1, '', '', 'navigation.jpg', 1, '0000-00-00 00:00:00', '2023-03-29 12:22:29');
INSERT INTO `abouts` VALUES (2, 'Dit is de main!', 'lorem ipsium dorlororo', 'main.jpg', 3, '0000-00-00 00:00:00', '2023-03-29 13:20:35');
INSERT INTO `abouts` VALUES (3, 'dit is card 1 lorem', 'dit is card 1 loremdit is card 1 loremdit is card 1 lorem', '', 4, '0000-00-00 00:00:00', '2023-03-29 12:18:59');
INSERT INTO `abouts` VALUES (4, 'dit is een card2', 'dit is een card31232323', '', 4, '0000-00-00 00:00:00', '2023-03-29 12:18:50');
INSERT INTO `abouts` VALUES (5, 'de laatste card', 'de laatste cardde laatste cardde laatste cardde laatste cardde laatste cardde laatste cardde laatste card', '', 5, '0000-00-00 00:00:00', '2023-03-29 12:19:13');

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `contacts_section_id_foreign`(`section_id`) USING BTREE,
  CONSTRAINT `contacts_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES (1, '', '', 'navigation.jpg', 1, '0000-00-00 00:00:00', '2023-03-29 12:22:52');
INSERT INTO `contacts` VALUES (2, '', 'VHRECLAME\r\ndit is wat extra text\r\nhartstikke tof', '', 3, '0000-00-00 00:00:00', '2023-03-29 12:23:08');
INSERT INTO `contacts` VALUES (3, 'email', 'vhreclame@test.nl', '', 5, '0000-00-00 00:00:00', '2023-03-29 11:31:28');
INSERT INTO `contacts` VALUES (4, 'telefoon', '0682004068 / 0682004068 / 0682004068', '', 5, '0000-00-00 00:00:00', '2023-03-29 12:23:21');
INSERT INTO `contacts` VALUES (5, 'mail', '4asd@', '', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `galleries_section_id_foreign`(`section_id`) USING BTREE,
  CONSTRAINT `galleries_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galleries
-- ----------------------------
INSERT INTO `galleries` VALUES (1, '', '', 'navigation.jpg', 1, '0000-00-00 00:00:00', '2023-03-29 14:36:54');

-- ----------------------------
-- Table structure for homes
-- ----------------------------
DROP TABLE IF EXISTS `homes`;
CREATE TABLE `homes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `header` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `homes_section_id_foreign`(`section_id`) USING BTREE,
  CONSTRAINT `homes_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of homes
-- ----------------------------
INSERT INTO `homes` VALUES (1, 'jup dat werkt ZEKER!', 'dit is een tekstje', 'header.jpg', 2, '0000-00-00 00:00:00', '2023-03-29 14:36:38');
INSERT INTO `homes` VALUES (2, 'watttt', 'LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM LOREM', '', 2, '0000-00-00 00:00:00', '2023-03-29 12:23:49');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of images
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (10, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (11, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (12, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (13, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (14, '2023_03_25_104827_create_images_table', 1);
INSERT INTO `migrations` VALUES (15, '2023_03_28_071336_create_sections_table', 1);
INSERT INTO `migrations` VALUES (16, '2023_03_28_071337_create_homes_table', 1);
INSERT INTO `migrations` VALUES (17, '2023_03_28_071340_create_abouts_table', 1);
INSERT INTO `migrations` VALUES (18, '2023_03_28_071353_create_contacts_table', 1);
INSERT INTO `migrations` VALUES (19, '2023_03_29_120621_create_galleries_table', 2);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `expires_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for sections
-- ----------------------------
DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sections
-- ----------------------------
INSERT INTO `sections` VALUES (1, 'navigation');
INSERT INTO `sections` VALUES (2, 'header');
INSERT INTO `sections` VALUES (3, 'main');
INSERT INTO `sections` VALUES (4, 'card');
INSERT INTO `sections` VALUES (5, 'info');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'test', 'test@test.nl', NULL, '$2y$10$Fmw9fXOuEegNyDXGZVQiFudSG/eUJ/O8RlpyRrv.uH31jRhMGSVNO', NULL, '2023-03-29 11:13:02', '2023-03-29 11:13:02');

SET FOREIGN_KEY_CHECKS = 1;
