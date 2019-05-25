/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : gudang

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 25/05/2019 12:22:14
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` int(11) NOT NULL,
  `harga` int(30) NULL DEFAULT NULL,
  `jenis` int(11) NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES (1, 'Buku', 40, 5000, 1, NULL);
INSERT INTO `barang` VALUES (2, 'Minyak', 20, 15000, 2, NULL);
INSERT INTO `barang` VALUES (3, 'Tas Hicking 10L', 20, 70000, 6, NULL);
INSERT INTO `barang` VALUES (7, 'Boneka', 30, 15000, 2, NULL);
INSERT INTO `barang` VALUES (8, 'Baju', 40, 45000, 2, NULL);
INSERT INTO `barang` VALUES (9, 'Kipas Angin', 20, 80000, 1, NULL);
INSERT INTO `barang` VALUES (11, 'Beras Premium', 20, 15000, 10, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_05_23_090321_create_barang_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_jenis
-- ----------------------------
DROP TABLE IF EXISTS `tb_jenis`;
CREATE TABLE `tb_jenis`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_jenis
-- ----------------------------
INSERT INTO `tb_jenis` VALUES (1, 'Elektroniks');
INSERT INTO `tb_jenis` VALUES (2, 'Aksesoris');
INSERT INTO `tb_jenis` VALUES (3, 'Fashion');
INSERT INTO `tb_jenis` VALUES (6, 'Referensi');
INSERT INTO `tb_jenis` VALUES (8, 'Rumah Tangga');
INSERT INTO `tb_jenis` VALUES (10, 'Sembako');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (4, 'Galih Mahendra', 'mahendragalih26@yahoo.com', NULL, '$2y$10$YPaFuumZjXHuFRyEq5d/5.0EcALGMXXS/qS.7uHyfDa/Yx.7gkZG2', 'ltR31NelHwIrQ1Y8jw6YDFspf1DAA96HyTAwmBO4dcPQfYuJwlrqOrq4Q3yU', '2019-05-25 02:56:01', '2019-05-25 03:06:40');

SET FOREIGN_KEY_CHECKS = 1;
