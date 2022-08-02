/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : splash_work

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 06/07/2022 20:43:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (1, 'Super', 'Admin', '123456789', 'admin@splashworks.com', NULL, '$2y$10$XKYr0qsP3pASTQdy1lpXz.wIqxPp.WdWz893FpTZbiSRaZe1Kxpta', NULL, 1, '2022-07-01 16:11:30', '2022-07-04 13:55:34');
INSERT INTO `admins` VALUES (2, 'Alfonso12', 'Booth', '+1 (791) 777-6772', 'wyfir@mailinator.com', NULL, NULL, NULL, 1, '2022-07-01 17:23:26', '2022-07-04 13:54:46');
INSERT INTO `admins` VALUES (3, 'Mechelle', 'Davis', '+1 (582) 141-8723', 'damejypu@mailinator.com', NULL, NULL, NULL, 1, '2022-07-04 13:49:40', '2022-07-04 13:49:40');
INSERT INTO `admins` VALUES (4, 'Karly', 'Jensen', '+1 (799) 423-4531', 'juzoku@mailinator.com', NULL, NULL, NULL, 0, '2022-07-04 13:54:36', '2022-07-04 13:54:36');

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `media` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `is_active` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES (1, 'blog 1', 'blog-1', '', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'media-file-1656694077.jpg', 'blog-1', 'blog-1', 'blog-1', '1', '2022-07-01 16:47:57', '2022-07-01 16:47:57');
INSERT INTO `blogs` VALUES (2, 'blog 10', 'blog-10', '', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'media-file-1656941359.jpg', 'blog-1blog-12', 'blog-1blog-10', 'blog-1blog-10', '1', '2022-07-01 16:48:01', '2022-07-04 13:29:19');
INSERT INTO `blogs` VALUES (3, 'blog-2', 'blog-2', '', NULL, 'media-file-1656695858.jpg', 'Dignissimos Nam nihil mollit sint rem qui corporis commodo', 'Adipisicing nemo culpa ex reiciendis et illo reprehenderit illum deserunt quia', 'Voluptate dolore ut pariatur Mollitia veniam optio non', '1', '2022-07-01 17:17:38', '2022-07-01 17:17:38');
INSERT INTO `blogs` VALUES (4, 'Quo quam obcaecati ut reprehenderit nisi occaecat sit ipsum voluptatum a', 'Eos est nobis aliqua Earum', '', '<p><strong>What is Lorem Ipsum?</strong></p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p><strong>Why do we use it?</strong></p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Where does it come from?</strong></p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p><strong>Where can I get some?</strong></p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>&nbsp;</p>', 'no-image.jpg', 'Sed accusamus ut aute placeat quidem dolore', 'Eveniet do omnis mollitia minima reprehenderit harum mollitia fugiat omnis recusandae', 'Doloremque nulla sunt et odit in voluptas pariatur Animi id nisi sit tenetur ipsum accusamus consectetur', '1', '2022-07-04 12:32:28', '2022-07-04 12:32:28');

-- ----------------------------
-- Table structure for careers
-- ----------------------------
DROP TABLE IF EXISTS `careers`;
CREATE TABLE `careers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of careers
-- ----------------------------
INSERT INTO `careers` VALUES (1, 'job title1', 'job-title1', '<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Work Sans&quot;; font-weight: 600; line-height: 1.4; color: rgb(0, 0, 0); font-size: 22px;\">Description:</h3>\r\n\r\n<p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem; font-family: Montserrat; font-size: 14px; line-height: 1.4; color: rgb(0, 0, 0);\">Do you love to learn new things? Do you like to teach others how to do them too? SplashWorks is hiring a learning consultant to teach new users how to use our software.</p>\r\n\r\n<div class=\"description-li\" style=\"box-sizing: inherit; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Work Sans&quot;; padding: 30px 0px;\">\r\n<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 600; line-height: 1.4; font-size: 22px;\">Responsibilities and Qualifications:</h3>\r\n\r\n<ul style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem;\">\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Utilize technologies to enhance technical training.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Coifirdinate resources to develop materials for technical training.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Document training to ensure compliance.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Proficiently performs assignments having the knowledge, skills, abilities, and experience needed to carry out all aspects of the job</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Exercises independent judgement and decision-making in planning, organizing, and conducting work assignments.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">May receive instructions and guidance on unusual or complex problems and knows when to get others involved.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Effectively utilizes the proper resources to develop solutions and devise new approaches to problems encountered in work assignments</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Identifies and eliminates unnecessary work and non-value-added activities</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Perform other duties as requested or assigned.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Train new and existing users on the software platform</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"description-sec\" style=\"box-sizing: inherit; color: rgb(41, 43, 44); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Work Sans&quot;; font-weight: 600; line-height: 1.4; color: rgb(0, 0, 0); font-size: 22px;\">FULL-TIME BENEFITS:</h3>\r\n\r\n<ul style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem;\">\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Medical/Dental</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Generous Paid Time Off</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Flexible Work Schedule</li>\r\n</ul>\r\n</div>', 'location1', '1', 'job-title1', 'job-title1', 'job-title1', '2022-07-01 16:21:23', '2022-07-04 16:03:48');
INSERT INTO `careers` VALUES (2, 'job title1', 'job-title1', '<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Work Sans&quot;; font-weight: 600; line-height: 1.4; color: rgb(0, 0, 0); font-size: 22px;\">Description:</h3>\r\n\r\n<p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem; font-family: Montserrat; font-size: 14px; line-height: 1.4; color: rgb(0, 0, 0);\">Do you love to learn new things? Do you like to teach others how to do them too? SplashWorks is hiring a learning consultant to teach new users how to use our software.</p>\r\n\r\n<div class=\"description-li\" style=\"box-sizing: inherit; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Work Sans&quot;; padding: 30px 0px;\">\r\n<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 600; line-height: 1.4; font-size: 22px;\">Responsibilities and Qualifications:</h3>\r\n\r\n<ul style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem;\">\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Utilize technologies to enhance technical training.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Coifirdinate resources to develop materials for technical training.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Document training to ensure compliance.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Proficiently performs assignments having the knowledge, skills, abilities, and experience needed to carry out all aspects of the job</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Exercises independent judgement and decision-making in planning, organizing, and conducting work assignments.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">May receive instructions and guidance on unusual or complex problems and knows when to get others involved.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Effectively utilizes the proper resources to develop solutions and devise new approaches to problems encountered in work assignments</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Identifies and eliminates unnecessary work and non-value-added activities</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Perform other duties as requested or assigned.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Train new and existing users on the software platform</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"description-sec\" style=\"box-sizing: inherit; color: rgb(41, 43, 44); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Work Sans&quot;; font-weight: 600; line-height: 1.4; color: rgb(0, 0, 0); font-size: 22px;\">FULL-TIME BENEFITS:</h3>\r\n\r\n<ul style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem;\">\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Medical/Dental</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Generous Paid Time Off</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Flexible Work Schedule</li>\r\n</ul>\r\n</div>', 'location1', '1', 'job-title1', 'job-title1', 'job-title1', '2022-07-01 16:21:27', '2022-07-04 16:03:55');
INSERT INTO `careers` VALUES (3, 'job title', 'job-title', '<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Work Sans&quot;; font-weight: 600; line-height: 1.4; color: rgb(0, 0, 0); font-size: 22px;\">Description:</h3>\r\n\r\n<p style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem; font-family: Montserrat; font-size: 14px; line-height: 1.4; color: rgb(0, 0, 0);\">Do you love to learn new things? Do you like to teach others how to do them too? SplashWorks is hiring a learning consultant to teach new users how to use our software.</p>\r\n\r\n<div class=\"description-li\" style=\"box-sizing: inherit; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Work Sans&quot;; padding: 30px 0px;\">\r\n<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 600; line-height: 1.4; font-size: 22px;\">Responsibilities and Qualifications:</h3>\r\n\r\n<ul style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem;\">\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Utilize technologies to enhance technical training.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Coifirdinate resources to develop materials for technical training.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Document training to ensure compliance.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Proficiently performs assignments having the knowledge, skills, abilities, and experience needed to carry out all aspects of the job</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Exercises independent judgement and decision-making in planning, organizing, and conducting work assignments.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">May receive instructions and guidance on unusual or complex problems and knows when to get others involved.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Effectively utilizes the proper resources to develop solutions and devise new approaches to problems encountered in work assignments</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Identifies and eliminates unnecessary work and non-value-added activities</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Perform other duties as requested or assigned.</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Train new and existing users on the software platform</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"description-sec\" style=\"box-sizing: inherit; color: rgb(41, 43, 44); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">\r\n<h3 style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Work Sans&quot;; font-weight: 600; line-height: 1.4; color: rgb(0, 0, 0); font-size: 22px;\">FULL-TIME BENEFITS:</h3>\r\n\r\n<ul style=\"box-sizing: inherit; margin-top: 0px; margin-bottom: 1rem;\">\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Medical/Dental</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Generous Paid Time Off</li>\r\n	<li style=\"box-sizing: inherit; font-family: Montserrat;\">Flexible Work Schedule</li>\r\n</ul>\r\n</div>', 'Location 1', '1', 'job-title', 'job-title', 'job-title', '2022-07-04 08:00:59', '2022-07-04 16:04:04');

-- ----------------------------
-- Table structure for contact_queries
-- ----------------------------
DROP TABLE IF EXISTS `contact_queries`;
CREATE TABLE `contact_queries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact_queries
-- ----------------------------
INSERT INTO `contact_queries` VALUES (1, 'qazyde@mailinator.com', 'dyha@mailinator.com', 'dihad@mailinator.com', 'qofas@mailinator.com', 'Cillum nesciunt ab', 0, '2022-07-05 13:48:50', '2022-07-05 13:48:50');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for faqs
-- ----------------------------
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of faqs
-- ----------------------------
INSERT INTO `faqs` VALUES (1, 'What SPLASHWORKS can do?d', '<p>asassaasasdsdsds</p>', 0, '2022-07-01 17:22:24', '2022-07-04 13:45:11');
INSERT INTO `faqs` VALUES (2, 'What is SPLASHWORKS?', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 1, '2022-07-04 13:44:51', '2022-07-04 13:44:51');

-- ----------------------------
-- Table structure for locations
-- ----------------------------
DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of locations
-- ----------------------------
INSERT INTO `locations` VALUES (1, 'location1', 1, '2022-07-01 17:21:38', '2022-07-01 17:21:38');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (12, '2022_06_28_105400_create_career_table', 4);
INSERT INTO `migrations` VALUES (13, '2022_06_28_120025_create_careers_table', 5);
INSERT INTO `migrations` VALUES (14, '2022_06_28_132323_create_country_state_city_tables', 6);
INSERT INTO `migrations` VALUES (17, '2014_10_12_000000_create_users_table', 7);
INSERT INTO `migrations` VALUES (18, '2014_10_12_100000_create_password_resets_table', 7);
INSERT INTO `migrations` VALUES (19, '2019_08_19_000000_create_failed_jobs_table', 7);
INSERT INTO `migrations` VALUES (20, '2020_08_17_134959_create_pages_table', 7);
INSERT INTO `migrations` VALUES (21, '2020_08_17_135229_create_site_settings_table', 7);
INSERT INTO `migrations` VALUES (22, '2020_08_18_064926_create_admins_table', 7);
INSERT INTO `migrations` VALUES (24, '2022_03_31_125222_create_newsletter_subscribers_table', 7);
INSERT INTO `migrations` VALUES (25, '2022_04_12_190830_create_faqs_table', 7);
INSERT INTO `migrations` VALUES (26, '2022_06_27_094622_create_permission_tables', 7);
INSERT INTO `migrations` VALUES (27, '2022_06_27_135133_create_blogs_table', 7);
INSERT INTO `migrations` VALUES (28, '2022_06_28_134414_create_locations_table', 7);
INSERT INTO `migrations` VALUES (30, '2022_07_01_160829_create_careers_table', 8);
INSERT INTO `migrations` VALUES (31, '2022_07_05_083829_create_request_table', 9);
INSERT INTO `migrations` VALUES (32, '2022_07_05_083829_create_request_query_table', 10);
INSERT INTO `migrations` VALUES (36, '2022_07_05_083829_create_request_queries_table', 11);
INSERT INTO `migrations` VALUES (38, '2022_03_31_110815_create_contact_queries_table', 12);
INSERT INTO `migrations` VALUES (40, '2022_07_05_144437_create_testimonials_table', 13);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------

-- ----------------------------
-- Table structure for newsletter_subscribers
-- ----------------------------
DROP TABLE IF EXISTS `newsletter_subscribers`;
CREATE TABLE `newsletter_subscribers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of newsletter_subscribers
-- ----------------------------

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `our_mission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `our_vision` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (2, 'Terms and condition', 'terms-and-condition', '<p>What is Lorem Ipsum?</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Why do we use it?</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Where does it come from?</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p>Where can I get some?</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 'terms-and-condition', 'terms-and-condition', 'terms-and-condition', '2022-07-04 07:52:04', '2022-07-04 08:00:15');
INSERT INTO `pages` VALUES (3, 'privacy policy', 'privacy-policy', '<p>What is Lorem Ipsum?</p>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>Why do we use it?</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Where does it come from?</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n\r\n<p>Where can I get some?</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 'privacy-policy', 'privacy-policy', 'privacy-policy', '2022-07-04 07:58:23', '2022-07-04 07:58:23');
INSERT INTO `pages` VALUES (4, 'Thank You', 'thank-you', '<h2>Thank you!</h2>\r\n\r\n<h5>We look forward to speaking with you.</h5>\r\n\r\n<p>A SPLASHWORKS team member will contact you shortly.</p>\r\n\r\n<p><a href=\"/\">Back to home Continue</a></p>', NULL, NULL, 'thank-you', 'thank-you', 'thank-you', '2022-07-04 14:12:50', '2022-07-05 12:55:05');
INSERT INTO `pages` VALUES (5, 'About us', 'about-us', '<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<div class=\"about-text\">\r\n<h2 class=\"wow animate__animated animate__fadeInLeft\">Splashworks</h2>\r\n\r\n<h4>What is it?</h4>\r\n\r\n<h4>How you&rsquo;ll benefit</h4>\r\n\r\n<ul>\r\n	<li>A Practice Management Software designed by therapists for therapists</li>\r\n	<li>Data analysis platform that examines real-time performance</li>\r\n	<li>Get access to key metrics including forecasted revenue, month-to-date and year-to-date revenue, and revenue loss due to cancellations or staff shortages</li>\r\n	<li>Analyze over and underutilization of therapists</li>\r\n	<li>Examine cancellation trends</li>\r\n	<li>Resolve discrepancies between therapist availability and client needs</li>\r\n	<li>Manage billing and file invoices with less paperwork</li>\r\n	<li>Ensure your records are always safe and secure</li>\r\n</ul>\r\n\r\n<div class=\"about-btn\"><a class=\"wow animate__animated animate__rubberBand animate__delay-2s\" href=\"/request\">Let&rsquo;s Start a Conversation</a></div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<div class=\"about-img wow animate__aniamted animate__bounceIn\">\r\n<figure><img alt=\"\" class=\"img-fluid\" src=\"https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&amp;w=1000&amp;q=80\" style=\"width: 100%;\" /></figure>\r\n\r\n<div class=\"hover_box\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL, 'about-us', 'about-us', 'about-us', '2022-07-05 13:03:20', '2022-07-05 13:12:42');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for request_queries
-- ----------------------------
DROP TABLE IF EXISTS `request_queries`;
CREATE TABLE `request_queries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_size` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `behavioral_analysis` int NOT NULL DEFAULT 0,
  `speech_therapy` int NOT NULL DEFAULT 0,
  `early_intervention` int NOT NULL DEFAULT 0,
  `occupational_therapy` int NOT NULL DEFAULT 0,
  `physical_therapy` int NOT NULL DEFAULT 0,
  `other` int NOT NULL DEFAULT 0,
  `job_id` int NOT NULL DEFAULT 0,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of request_queries
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------

-- ----------------------------
-- Table structure for site_settings
-- ----------------------------
DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE `site_settings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `contact_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pinterest` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `footer_scripts` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `footer_sentence` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `copyright` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of site_settings
-- ----------------------------
INSERT INTO `site_settings` VALUES (1, 'Share Script', 'info@sharescript.com', '123456789', '', NULL, '', '', '', '', NULL, NULL, '', '', '', '2022-07-01 16:11:30', '2022-07-01 16:11:30');

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int NOT NULL DEFAULT 0,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of testimonials
-- ----------------------------
INSERT INTO `testimonials` VALUES (1, 'Samantha Houston', 'D:\\xampp\\tmp\\php2711.tmp', 'Dolore sint ad officiis tempore', 1, '<p>asasasaasasas</p>', 0, '2022-07-05 15:55:01', '2022-07-05 15:55:01');
INSERT INTO `testimonials` VALUES (2, 'Alika Glenn', 'media-file-1657117571.jpg', 'Quam est reprehenderit velit esse exercitation voluptas fugiat', 0, '<p>huihuhhhuh</p>', 0, '2022-07-06 14:26:11', '2022-07-06 14:26:11');
INSERT INTO `testimonials` VALUES (3, 'Kamal Freeman', 'media-file-1657117621.jpg', 'Quis inventore reiciendis qui autem ullamco iure reprehenderit ad', 0, '<p>sexb k ml mlgvgv hjnlnkl&nbsp; &nbsp;jbjkbkbbkbjkbjkbk m,;</p>', 0, '2022-07-06 14:27:01', '2022-07-06 14:27:01');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
