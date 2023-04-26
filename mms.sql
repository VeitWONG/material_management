-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        8.0.12 - MySQL Community Server - GPL
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 material_management 的数据库结构
CREATE DATABASE IF NOT EXISTS `material_management` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `material_management`;

-- 导出  表 material_management.admin_extensions 结构
CREATE TABLE IF NOT EXISTS `admin_extensions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '0',
  `options` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_extensions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_extensions 的数据：~5 rows (大约)
/*!40000 ALTER TABLE `admin_extensions` DISABLE KEYS */;
REPLACE INTO `admin_extensions` (`id`, `name`, `version`, `is_enabled`, `options`, `created_at`, `updated_at`) VALUES
	(1, 'abovesky.dcat-media-player', '1.0.0', 1, NULL, '2023-03-21 10:18:29', '2023-03-21 10:18:35'),
	(2, 'sparkinzy.dcat-viewer', '1.0.3', 1, NULL, '2023-03-22 17:23:51', '2023-03-22 17:23:56'),
	(3, 'dcat-admin.form-step', '1.0.0', 1, NULL, '2023-04-07 11:23:56', '2023-04-07 11:24:14'),
	(4, 'sparkinzy.dcat-extension-client', '1.0.3', 1, NULL, '2023-04-23 13:07:11', '2023-04-23 13:11:14'),
	(5, 'weiwait.dcat-vue', '1.0.0', 0, NULL, '2023-04-23 13:08:48', '2023-04-23 13:42:59');
/*!40000 ALTER TABLE `admin_extensions` ENABLE KEYS */;

-- 导出  表 material_management.admin_extension_histories 结构
CREATE TABLE IF NOT EXISTS `admin_extension_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `version` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_extension_histories_name_index` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_extension_histories 的数据：~13 rows (大约)
/*!40000 ALTER TABLE `admin_extension_histories` DISABLE KEYS */;
REPLACE INTO `admin_extension_histories` (`id`, `name`, `type`, `version`, `detail`, `created_at`, `updated_at`) VALUES
	(1, 'abovesky.dcat-media-player', 1, '1.0.0', 'Initialize extension.', '2023-03-21 10:18:29', '2023-03-21 10:18:29'),
	(2, 'sparkinzy.dcat-viewer', 1, '1.0.0', '基于 神级插件 viewerjs 做的一个封装，提升Dcat Admin 图片预览效果，实现放大、缩小、翻转、旋转等效果.', '2023-03-22 17:23:51', '2023-03-22 17:23:51'),
	(3, 'sparkinzy.dcat-viewer', 1, '1.0.2', '提升viewer的zindex为8个9,方便在modal实现图片预览', '2023-03-22 17:23:51', '2023-03-22 17:23:51'),
	(4, 'sparkinzy.dcat-viewer', 1, '1.0.3', '新增views目录，便于php artisan optimize', '2023-03-22 17:23:51', '2023-03-22 17:23:51'),
	(5, 'dcat-admin.form-step', 1, '1.0.0', 'Initialize extension.', '2023-04-07 11:23:56', '2023-04-07 11:23:56'),
	(6, 'sparkinzy.dcat-extension-client', 2, '1.0.0', 'create_admin_extension_repository_table.php', '2023-04-23 13:06:43', '2023-04-23 13:06:43'),
	(7, 'sparkinzy.dcat-extension-client', 2, '1.0.0', 'AdminExtensionsTableSeeder.php', '2023-04-23 13:06:57', '2023-04-23 13:06:57'),
	(8, 'sparkinzy.dcat-extension-client', 1, '1.0.0', 'Dcat扩展市场.', '2023-04-23 13:07:11', '2023-04-23 13:07:11'),
	(9, 'sparkinzy.dcat-extension-client', 1, '1.0.1', '优化表现层', '2023-04-23 13:07:11', '2023-04-23 13:07:11'),
	(10, 'sparkinzy.dcat-extension-client', 2, '1.0.2', 'AdminExtensionsTableSeeder.php', '2023-04-23 13:07:11', '2023-04-23 13:07:11'),
	(11, 'weiwait.dcat-vue', 1, '1.0.0', 'Initialize extension.', '2023-04-23 13:08:48', '2023-04-23 13:08:48'),
	(62, 'sparkinzy.dcat-extension-client', 1, '1.0.2', '新增websocket扩展', '2023-04-23 13:11:14', '2023-04-23 13:11:14'),
	(63, 'sparkinzy.dcat-extension-client', 1, '1.0.3', '修复seeder命名空间错误', '2023-04-23 13:11:14', '2023-04-23 13:11:14');
/*!40000 ALTER TABLE `admin_extension_histories` ENABLE KEYS */;

-- 导出  表 material_management.admin_extension_repositories 结构
CREATE TABLE IF NOT EXISTS `admin_extension_repositories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '图标',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '名称',
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '描述',
  `home_page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '主页',
  `zip_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '发行版地址',
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '版本号',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_extension_repositories 的数据：49 rows
/*!40000 ALTER TABLE `admin_extension_repositories` DISABLE KEYS */;
REPLACE INTO `admin_extension_repositories` (`id`, `logo`, `title`, `detail`, `home_page`, `zip_url`, `version`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'sparkinzy.dcat-websocket', '为Dcat Admin 一键集成websocket功能', 'https://github.com/sparkinzy/dcat-websocket', 'https://github.com/Sparkinzy/dcat-websocket/archive/refs/tags/1.0.1.zip', '1.0.1', '2022-11-01 15:45:51', '2022-11-01 15:45:51'),
	(2, NULL, 'sparkinzy.dcat-viewer', '基于 神级插件 viewerjs 做的一个封装，提升Dcat Admin 图片预览效果，实现放大、缩小、翻转、旋转等效果', 'https://github.com/Sparkinzy/dcat-viewer', 'https://github.com/Sparkinzy/dcat-viewer/archive/refs/tags/1.0.3.zip', '1.0.3', '2022-09-28 23:49:07', '2022-09-28 23:49:07'),
	(3, NULL, 'sparkinzy.dcat-distpicker', '中国省市区三级联动选择组件，', 'https://codeload.github.com/Sparkinzy/dcat-distpicker', 'https://codeload.github.com/Sparkinzy/dcat-distpicker/zip/refs/tags/1.0.10', '1.0.10', '2022-09-28 23:51:12', '2022-09-28 23:51:12'),
	(4, NULL, 'guanguans.dcat-login-captcha', 'dcat admin 登录验证码。', 'https://github.com/guanguans/dcat-login-captcha', 'https://github.com/guanguans/dcat-login-captcha/archive/refs/tags/v1.0.9.zip', '1.0.9', '2022-09-27 00:45:51', '2022-09-27 00:45:51'),
	(5, NULL, 'dcat-admin.operation-log', '操作日志', 'https://github.com/dcat-admin/operation-log', 'https://codeload.github.com/dcat-admin/operation-log/zip/refs/heads/master', '1.0.0', '2022-09-28 23:57:25', '2022-09-28 23:57:25'),
	(6, NULL, 'weiwait.dcat-cropper', '图片裁剪', 'https://github.com/weiwait/dcat-cropper', 'https://github.com/weiwait/dcat-cropper/archive/refs/heads/master.zip', '1.1.8', '2022-09-29 00:10:41', '2022-09-29 00:10:41'),
	(7, NULL, 'celaraze.dcat-extension-plus', '增强 Dcat Admin 使用体验！在线简化配置、UI优化、字段扩展。', 'https://github.com/celaraze/dcat-extension-plus', 'https://github.com/celaraze/dcat-extension-plus/archive/refs/heads/master.zip', '1.0.0', '2022-09-29 00:01:52', '2022-09-29 00:01:52'),
	(8, NULL, 'asundust.dcat-auth-captcha', '登录 滑动验证插件', 'https://github.com/asundust/dcat-auth-captcha', 'https://github.com/asundust/dcat-auth-captcha/archive/refs/tags/2.0.2.zip', '2.0.2', '2022-09-28 23:53:47', '2022-09-28 23:53:47'),
	(9, NULL, 'abovesky.media-player', 'Dcat Admin 视频/音频预览扩展', 'https://github.com/dcat-admin-extensions/media-player', 'https://github.com/dcat-admin-extensions/media-player/archive/refs/heads/main.zip', '1.0.0', '2022-09-29 00:07:45', '2022-09-30 10:15:04'),
	(10, NULL, 'dcat-admin.form-step', 'Dcat Admin 分步表单扩展', 'https://github.com/dcat-admin/form-step', 'https://github.com/dcat-admin/form-step/archive/refs/heads/master.zip', '1.0.0', '2022-09-29 00:09:37', '2022-09-29 00:09:37'),
	(11, NULL, 'weiwait.dcat-cropper', '图片裁剪', 'https://github.com/weiwait/dcat-cropper', 'https://github.com/weiwait/dcat-cropper/archive/refs/heads/master.zip', '1.1.8', '2022-09-29 00:10:41', '2022-09-29 00:10:41'),
	(12, NULL, 'celaraze.dcat-extension-plus', '增强 Dcat Admin 使用体验！在线简化配置、UI优化、字段扩展。', 'https://github.com/celaraze/dcat-extension-plus', 'https://github.com/celaraze/dcat-extension-plus/archive/refs/heads/master.zip', '1.0.0', '2022-09-29 00:11:38', '2022-09-29 00:11:38'),
	(13, NULL, 'lty5240.dcat-easy-sku', '基于Dcat Admin的Sku插件', 'https://github.com/light-speak/dcat-easy-sku', 'https://github.com/light-speak/dcat-easy-sku/archive/refs/heads/master.zip', '1.1.0', '2022-09-29 00:13:12', '2022-09-29 00:13:12'),
	(14, NULL, 'lake.login-captcha', '登陆验证码', 'https://github.com/deatil/dcat-login-captcha', 'https://github.com/deatil/dcat-login-captcha/archive/refs/heads/main.zip', '1.0.9', '2022-09-30 09:54:13', '2022-09-30 09:54:13'),
	(15, NULL, 'asundust.dcat-auth-captcha', '登录 (滑动)验证插件 多平台支持', 'https://github.com/asundust/dcat-auth-captcha', 'https://github.com/asundust/dcat-auth-captcha/archive/refs/heads/master.zip', '2.0.2', '2022-09-30 09:55:26', '2022-09-30 09:55:26'),
	(16, NULL, 'weiaibaicai.dcat-exception-reporter', '异常报告。', 'https://github.com/weiaibaicai/dcat-exception-reporter', 'https://github.com/weiaibaicai/dcat-exception-reporter/archive/refs/heads/master.zip', '1.0.2', '2022-09-30 09:57:36', '2022-09-30 09:57:36'),
	(17, NULL, 'Gelaku.dcat-backup', '数据库备份或还原。', 'https://github.com/Gelaku/dcat-backup', 'https://github.com/Gelaku/dcat-backup/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 09:58:22', '2022-09-30 09:58:22'),
	(18, NULL, 'Ghost-die.dcat-backup', '数据库备份。', 'https://github.com/Ghost-die/dcat-backup', 'https://github.com/Ghost-die/dcat-backup/archive/refs/heads/master.zip', '1.0.1', '2022-09-30 09:59:12', '2022-09-30 09:59:12'),
	(19, NULL, 'dairidong.dcat-media-manager', '文件管理扩展,适配laravel9以下，laravel9需要v2', 'https://github.com/dairidong/dcat-media-manager', 'https://github.com/dairidong/dcat-media-manager/archive/refs/tags/1.04.zip', '1.0.4', '2022-09-30 10:01:54', '2022-09-30 10:02:45'),
	(20, NULL, 'edwinhuish.dcat-file-manager', '文件管理器\r\n注：缺乏文档', 'https://github.com/edwinhuish/dcat-file-manager', 'https://github.com/edwinhuish/dcat-file-manager/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:03:59', '2022-09-30 10:03:59'),
	(21, NULL, 'andyhuang123.files-manger', '本地文件管理\r\n注：文档参考 https://github.com/laravel-admin-extensions/media-manager', 'https://github.com/andyhuang123/files-manger', 'https://github.com/andyhuang123/files-manger/archive/refs/heads/main.zip', '1.0.0', '2022-09-30 10:05:16', '2022-09-30 10:05:16'),
	(22, NULL, 'duolabmeng6.dcat-config', '系统变量配置管理 用于配置系统中各种的动态变量 dcat-admin 插件', 'https://github.com/duolabmeng6/dcat-config', 'https://github.com/duolabmeng6/dcat-config/archive/refs/heads/main.zip', '1.0.0', '2022-09-30 10:06:37', '2022-09-30 10:06:37'),
	(23, NULL, 'duolabmeng6.dcat-env', '查看系统中env文件的\r\n注：不能编辑', 'https://github.com/duolabmeng6/dcat-env', 'https://github.com/duolabmeng6/dcat-env/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:07:45', '2022-09-30 10:07:45'),
	(24, NULL, 'duolabmeng6.dcat-log-viewer', '错误日志查看', 'https://github.com/duolabmeng6/dcat-log-viewer', 'https://github.com/duolabmeng6/dcat-log-viewer/archive/refs/heads/main.zip', '1.0.0', '2022-09-30 10:08:47', '2022-09-30 10:08:47'),
	(25, NULL, 'slowlyo.dcat-amis', 'Amis 组件库。', 'https://gitee.com/slowlyo/dcat-amis', 'https://gitee.com/slowlyo/dcat-amis/repository/archive/master.zip', '1.0.0', '2022-09-30 10:09:39', '2022-09-30 10:09:39'),
	(26, NULL, 'jyiL.crontab-extension', '定时任务，任务列表，日志列表。', 'https://github.com/jyiL/crontab-extension', 'https://github.com/jyiL/crontab-extension/archive/refs/heads/master.zip', '1.0.3', '2022-09-30 10:10:53', '2022-09-30 10:10:53'),
	(27, NULL, 'dcat-admin-extensions.lightbox', '图片预览扩展\r\n注：表格和详情需要主动使用对应方案才能启用', 'https://github.com/dcat-admin-extensions/lightbox', 'https://github.com/dcat-admin-extensions/lightbox/archive/refs/heads/master.zip', '1.0.1', '2022-09-30 10:12:41', '2022-09-30 10:12:41'),
	(28, NULL, 'xingchuangyang.dcat-admin-sortable', '表格排序。', 'https://github.com/18310691938/doct-admin-sortable', 'https://github.com/18310691938/doct-admin-sortable/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:16:37', '2022-09-30 10:16:37'),
	(29, NULL, 'canbez.dcat-theme', '一款双栏菜单主题', 'https://github.com/canbez/dcat-theme', 'https://github.com/canbez/dcat-theme/archive/refs/heads/master.zip', '1.0.4', '2022-09-30 10:18:57', '2022-09-30 10:18:57'),
	(30, NULL, 'hercules-os.dcat-ant-theme', 'ant design 风格的主题\r\n注：新装和重新安装，都需要手动执行：\r\nphp artisan admin:minify ant --color 1890ff --publish', 'https://github.com/hercules-os/dcat-ant-theme', 'https://github.com/hercules-os/dcat-ant-theme/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:20:40', '2022-09-30 10:20:40'),
	(31, NULL, 'de-memory.dcat-media-selector', '表单媒体资源选择器\r\n注：如果支持资源列表通过url返回就更好了', 'https://github.com/de-memory/dcat-media-selector', 'https://github.com/de-memory/dcat-media-selector/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:24:33', '2022-09-30 10:24:54'),
	(32, NULL, 'lake.form-media', '表单媒体扩展', 'https://github.com/deatil/dcat-form-media', 'https://github.com/deatil/dcat-form-media/archive/refs/heads/master.zip', '1.0.31', '2022-09-30 10:26:12', '2022-09-30 10:26:12'),
	(33, NULL, 'super-eggs.dcat-distpicker', '中国省市区三级联动选择组件', 'https://github.com/super-eggs/dcat-distpicker', 'https://github.com/super-eggs/dcat-distpicker/archive/refs/heads/master.zip', '2.1.2', '2022-09-30 10:27:20', '2022-09-30 10:27:20'),
	(34, NULL, 'weiwait.dcat-distpicker', '中国区划级联 + 坐标拾取', 'https://github.com/weiwait/dcat-distpicker', 'https://github.com/weiwait/dcat-distpicker/archive/refs/heads/master.zip', '1.0.5', '2022-09-30 10:28:23', '2022-09-30 10:28:23'),
	(35, NULL, 'Abbotton.dcat-sku-plus', 'SKU扩展增强版', 'https://github.com/Abbotton/dcat-sku-plus', 'https://github.com/Abbotton/dcat-sku-plus/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:29:17', '2022-09-30 10:29:17'),
	(36, NULL, 'weiaibaicai.ueditor', '百度编辑器。', 'https://github.com/weiaibaicai/ueditor', 'https://github.com/weiaibaicai/ueditor/archive/refs/heads/master.zip', '1.0.2', '2022-09-30 10:30:13', '2022-09-30 10:30:13'),
	(37, NULL, 'jqhph.dcat-admin-ueditor', '集成百度在线编辑器', 'https://github.com/jqhph/dcat-admin-ueditor', 'https://github.com/jqhph/dcat-admin-ueditor/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:30:49', '2022-09-30 10:30:49'),
	(38, NULL, 'laradocs.dcat-neditor', 'neditor 编辑器，集成 135 编辑器，方便用户使用 135 编辑器的模板与海量功能。', 'https://github.com/laradocs/dcat-neditor', 'https://github.com/laradocs/dcat-neditor/archive/refs/heads/master.zip', '1.0.1', '2022-09-30 10:31:18', '2022-09-30 11:03:13'),
	(39, NULL, 'weiaibaicai.big-file-upload', '大文件上传（分片，目前仅支持七牛）。', 'https://github.com/weiaibaicai/big-file-upload', 'https://github.com/weiaibaicai/big-file-upload/archive/refs/heads/master.zip', '1.0.1', '2022-09-30 10:31:59', '2022-09-30 10:31:59'),
	(40, NULL, 'weiwait.dcat-cropper', '单图裁剪', 'https://github.com/weiwait/dcat-cropper', 'https://github.com/weiwait/dcat-cropper/archive/refs/heads/master.zip', '1.0.8', '2022-09-30 10:32:26', '2022-09-30 10:32:26'),
	(41, NULL, 'weiwait.dcat-smtp', 'Laravel smtp 邮件服务便捷配置', 'https://github.com/weiwait/dcat-smtp', 'https://github.com/weiwait/dcat-smtp/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:33:34', '2022-09-30 10:33:34'),
	(42, NULL, 'weiwait.dcat-easy-sms', '快捷短信通知配置', 'https://github.com/weiwait/dcat-easy-sms', 'https://github.com/weiwait/dcat-easy-sms/archive/refs/heads/master.zip', '1.0.2', '2022-09-30 10:34:22', '2022-09-30 10:34:22'),
	(43, NULL, 'Slowlyo.dcat-diy-form', '自定义表单\r\n使用文档：https://learnku.com/articles/69062', 'https://github.com/Slowlyo/dcat-diy-form', 'https://github.com/Slowlyo/dcat-diy-form/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 10:35:18', '2022-09-30 10:35:18'),
	(44, NULL, 'Abbotton.dcat-infinity-select', '无限级联动Select组件', 'https://github.com/Abbotton/dcat-infinity-select', 'https://github.com/Abbotton/dcat-infinity-select/archive/refs/heads/main.zip', '1.0.0', '2022-09-30 11:27:58', '2022-09-30 11:27:58'),
	(45, NULL, 'weiwait.dcat-vue', '将vue3融入dcat admin', 'https://github.com/weiwait/dcat-vue', 'https://github.com/weiwait/dcat-vue/archive/refs/heads/master.zip', '2.1.1', '2022-09-30 11:29:37', '2022-09-30 11:29:37'),
	(46, NULL, 'dedemao.dcat-admin-payjs', '适用于dcat-admin的payjs插件', 'https://github.com/dedemao/dcat-admin-payjs', 'https://github.com/dedemao/dcat-admin-payjs/archive/refs/heads/master.zip', '1.0.3', '2022-09-30 11:31:52', '2022-09-30 11:31:52'),
	(47, NULL, 'xingchuangyang.dcat-server-monitor', '服务监控面板', 'https://github.com/18310691938/dcat-server-monitor', 'https://github.com/18310691938/dcat-server-monitor/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 11:32:53', '2022-09-30 11:32:53'),
	(48, NULL, 'strays.dcat-admin-redis', 'Redis 可视化操作面板', 'https://github.com/23tl/dcat-admin-redis', 'https://github.com/23tl/dcat-admin-redis/archive/refs/heads/master.zip', '1.0.0', '2022-09-30 11:40:21', '2022-09-30 11:47:53'),
	(49, NULL, 'ghost.dcat-markdown', 'markdown 编辑器 支持本地图片拖拽上传', 'https://gitee.com/dcat-phper/dcat-markdown', 'https://gitee.com/dcat-phper/dcat-markdown/repository/archive/master.zip', '1.0.0', '2022-09-30 11:42:05', '2022-09-30 11:42:05');
/*!40000 ALTER TABLE `admin_extension_repositories` ENABLE KEYS */;

-- 导出  表 material_management.admin_menu 结构
CREATE TABLE IF NOT EXISTS `admin_menu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `show` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_menu 的数据：17 rows
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
REPLACE INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `extension`, `show`, `created_at`, `updated_at`) VALUES
	(1, 0, 1, 'Index', 'feather icon-bar-chart-2', '/', '', 0, '2023-02-22 02:55:03', '2023-03-14 17:18:31'),
	(2, 0, 2, 'Admin', 'feather icon-settings', '', '', 1, '2023-02-22 02:55:03', NULL),
	(3, 2, 3, 'Users', '', 'auth/users', '', 1, '2023-02-22 02:55:03', NULL),
	(4, 2, 4, 'Roles', '', 'auth/roles', '', 1, '2023-02-22 02:55:03', NULL),
	(5, 2, 5, 'Permission', '', 'auth/permissions', '', 1, '2023-02-22 02:55:03', NULL),
	(6, 2, 6, 'Menu', '', 'auth/menu', '', 1, '2023-02-22 02:55:03', NULL),
	(7, 2, 7, 'Extensions', '', 'auth/extensions', '', 1, '2023-02-22 02:55:03', NULL),
	(8, 0, 8, '资材管理', 'fa-database', NULL, '', 0, '2023-02-22 14:04:52', '2023-04-10 12:51:15'),
	(9, 8, 9, '资材信息', 'fa-circle-o', '/material', '', 1, '2023-02-22 14:05:24', '2023-02-22 14:05:24'),
	(10, 8, 10, '供应商信息', 'fa-circle-o', '/supplier', '', 1, '2023-02-22 14:06:21', '2023-04-10 12:51:27'),
	(11, 0, 11, '仓库管理', 'fa-database', NULL, '', 0, '2023-02-22 15:18:11', '2023-04-10 14:05:47'),
	(12, 11, 12, '库存管理', 'fa-circle-o', '/inventory', '', 1, '2023-02-24 14:01:40', '2023-02-24 14:01:40'),
	(13, 11, 13, '库存往来', 'fa-circle-o', '/inventoryexchange', '', 1, '2023-02-24 15:46:12', '2023-02-24 15:46:12'),
	(14, 0, 14, '资材领购', 'fa-database', NULL, '', 0, '2023-02-27 11:11:04', '2023-04-10 12:51:34'),
	(15, 14, 15, '资材申购', 'fa-circle-o', '/subscription', '', 1, '2023-02-27 11:41:30', '2023-02-27 11:41:30'),
	(16, 14, 16, '资材申领', 'fa-circle-o', '/claim', '', 1, '2023-02-27 11:42:02', '2023-02-27 11:42:02'),
	(17, 0, 17, '运维问题表', 'fa-exclamation-circle', '/question', '', 1, '2023-03-14 17:12:47', '2023-03-14 17:13:45');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;

-- 导出  表 material_management.admin_permissions 结构
CREATE TABLE IF NOT EXISTS `admin_permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '0',
  `parent_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_permissions 的数据：6 rows
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
REPLACE INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `order`, `parent_id`, `created_at`, `updated_at`) VALUES
	(1, 'Auth management', 'auth-management', '', '', 1, 0, '2023-02-22 02:55:03', NULL),
	(2, 'Users', 'users', '', '/auth/users*', 2, 1, '2023-02-22 02:55:03', NULL),
	(3, 'Roles', 'roles', '', '/auth/roles*', 3, 1, '2023-02-22 02:55:03', NULL),
	(4, 'Permissions', 'permissions', '', '/auth/permissions*', 4, 1, '2023-02-22 02:55:03', NULL),
	(5, 'Menu', 'menu', '', '/auth/menu*', 5, 1, '2023-02-22 02:55:03', NULL),
	(6, 'Extension', 'extension', '', '/auth/extensions*', 6, 1, '2023-02-22 02:55:03', NULL);
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;

-- 导出  表 material_management.admin_permission_menu 结构
CREATE TABLE IF NOT EXISTS `admin_permission_menu` (
  `permission_id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `admin_permission_menu_permission_id_menu_id_unique` (`permission_id`,`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_permission_menu 的数据：8 rows
/*!40000 ALTER TABLE `admin_permission_menu` DISABLE KEYS */;
REPLACE INTO `admin_permission_menu` (`permission_id`, `menu_id`, `created_at`, `updated_at`) VALUES
	(7, 10, '2023-03-30 11:40:02', '2023-03-30 11:40:02'),
	(7, 11, '2023-03-30 11:40:02', '2023-03-30 11:40:02'),
	(7, 12, '2023-03-30 11:40:02', '2023-03-30 11:40:02'),
	(7, 13, '2023-03-30 11:40:02', '2023-03-30 11:40:02'),
	(7, 14, '2023-03-30 11:40:02', '2023-03-30 11:40:02'),
	(7, 15, '2023-03-30 11:40:02', '2023-03-30 11:40:02'),
	(7, 16, '2023-03-30 11:40:02', '2023-03-30 11:40:02'),
	(7, 17, '2023-03-30 11:40:02', '2023-03-30 11:40:02');
/*!40000 ALTER TABLE `admin_permission_menu` ENABLE KEYS */;

-- 导出  表 material_management.admin_roles 结构
CREATE TABLE IF NOT EXISTS `admin_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_roles 的数据：1 rows
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
REPLACE INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'administrator', '2023-02-22 02:55:03', '2023-02-22 02:55:03');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;

-- 导出  表 material_management.admin_role_menu 结构
CREATE TABLE IF NOT EXISTS `admin_role_menu` (
  `role_id` bigint(20) NOT NULL,
  `menu_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `admin_role_menu_role_id_menu_id_unique` (`role_id`,`menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_role_menu 的数据：7 rows
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
REPLACE INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
	(2, 10, '2023-03-30 11:37:11', '2023-03-30 11:37:11'),
	(2, 11, '2023-03-30 11:37:11', '2023-03-30 11:37:11'),
	(2, 12, '2023-03-30 11:37:11', '2023-03-30 11:37:11'),
	(2, 13, '2023-03-30 11:37:11', '2023-03-30 11:37:11'),
	(2, 14, '2023-03-30 11:37:11', '2023-03-30 11:37:11'),
	(2, 15, '2023-03-30 11:37:11', '2023-03-30 11:37:11'),
	(2, 16, '2023-03-30 11:37:11', '2023-03-30 11:37:11');
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;

-- 导出  表 material_management.admin_role_permissions 结构
CREATE TABLE IF NOT EXISTS `admin_role_permissions` (
  `role_id` bigint(20) NOT NULL,
  `permission_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `admin_role_permissions_role_id_permission_id_unique` (`role_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_role_permissions 的数据：0 rows
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;

-- 导出  表 material_management.admin_role_users 结构
CREATE TABLE IF NOT EXISTS `admin_role_users` (
  `role_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `admin_role_users_role_id_user_id_unique` (`role_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_role_users 的数据：1 rows
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
REPLACE INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, '2023-02-22 02:55:03', '2023-02-22 02:55:03');
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;

-- 导出  表 material_management.admin_settings 结构
CREATE TABLE IF NOT EXISTS `admin_settings` (
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`slug`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_settings 的数据：2 rows
/*!40000 ALTER TABLE `admin_settings` DISABLE KEYS */;
REPLACE INTO `admin_settings` (`slug`, `value`, `created_at`, `updated_at`) VALUES
	('sparkinzy:dcat-extension-client', '{"path":"dcat-extension-client"}', '2023-04-23 13:11:24', '2023-04-23 13:11:24'),
	('weiwait_auth', '{"enable_captcha":1,"background":null}', '2023-04-23 13:13:46', '2023-04-23 13:13:46');
/*!40000 ALTER TABLE `admin_settings` ENABLE KEYS */;

-- 导出  表 material_management.admin_users 结构
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.admin_users 的数据：1 rows
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
REPLACE INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$10$Jq1rHnMZz/vXYHKWjRfBn.t1jLz.TG5sRtfl.KIX6dzNS1L92r44.', 'Administrator', NULL, 'y1pWhNpQGVSBi8KQjwioXUdcDPCodS4MeGDeIYxxdqLkzEbYp8uerxL8oTIZ', '2023-02-22 02:55:03', '2023-02-22 02:55:03');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;

-- 导出  表 material_management.audit_flow 结构
CREATE TABLE IF NOT EXISTS `audit_flow` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FlowNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `BusType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `AddUserNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ApproStatus` int(11) NOT NULL COMMENT '1.待审,2.通过.3.驳回,4.撤销',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.audit_flow 的数据：0 rows
/*!40000 ALTER TABLE `audit_flow` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_flow` ENABLE KEYS */;

-- 导出  表 material_management.audit_flow_detail 结构
CREATE TABLE IF NOT EXISTS `audit_flow_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FlowNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '关联主表',
  `AuditUserNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `AuditRemark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `AuditTime` datetime NOT NULL,
  `AuditStatus` int(11) NOT NULL DEFAULT '0' COMMENT '1.审核中,2.待我审批.3.通过,4.驳回',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.audit_flow_detail 的数据：0 rows
/*!40000 ALTER TABLE `audit_flow_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_flow_detail` ENABLE KEYS */;

-- 导出  表 material_management.claim 结构
CREATE TABLE IF NOT EXISTS `claim` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `material_information_id` int(11) NOT NULL,
  `inventory_exchanges_id` int(11) DEFAULT '0',
  `claim_orders` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `applicant` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL,
  `request_at` timestamp NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `claim_orders` (`claim_orders`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.claim 的数据：2 rows
/*!40000 ALTER TABLE `claim` DISABLE KEYS */;
REPLACE INTO `claim` (`id`, `material_information_id`, `inventory_exchanges_id`, `claim_orders`, `applicant`, `quantity`, `request_at`, `order_status`, `created_at`, `updated_at`) VALUES
	(3, 5, 52, 'SL20230330035455', 'admin', 14, '2023-03-30 15:23:15', 3, '2023-03-30 15:23:25', '2023-04-10 11:28:21'),
	(4, 5, 0, 'SL20230330069156', 'admin', 1324, '2023-03-30 15:27:30', 2, '2023-03-30 15:27:32', '2023-04-10 10:01:40');
/*!40000 ALTER TABLE `claim` ENABLE KEYS */;

-- 导出  表 material_management.failed_jobs 结构
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.failed_jobs 的数据：0 rows
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- 导出  表 material_management.inventory 结构
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `material_information_id` int(10) NOT NULL DEFAULT '0',
  `quantity` int(10) NOT NULL DEFAULT '0',
  `inventory_batches` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `inventory_batches` (`inventory_batches`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  material_management.inventory 的数据：2 rows
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
REPLACE INTO `inventory` (`id`, `material_information_id`, `quantity`, `inventory_batches`, `created_at`, `updated_at`) VALUES
	(4, 2, 345, 'KC2023030265864', '2023-03-02 16:15:55', '2023-03-07 15:51:27'),
	(3, 1, 234, 'KC2023030289304', '2023-03-02 16:15:42', '2023-03-02 16:15:42');
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;

-- 导出  表 material_management.inventory_exchanges 结构
CREATE TABLE IF NOT EXISTS `inventory_exchanges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inventory_id` int(10) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '1',
  `inbound_order` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `quantity_received` int(11) NOT NULL DEFAULT '0',
  `acceptance_at` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inbound_order` (`inbound_order`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.inventory_exchanges 的数据：4 rows
/*!40000 ALTER TABLE `inventory_exchanges` DISABLE KEYS */;
REPLACE INTO `inventory_exchanges` (`id`, `inventory_id`, `type`, `inbound_order`, `quantity_received`, `acceptance_at`, `created_at`, `updated_at`) VALUES
	(48, 3, 2, 'WL20230302093557', 30, '2023-03-02 16:16:10', '2023-03-02 16:16:12', '2023-03-02 17:18:06'),
	(50, 4, 2, 'WL20230309011411', 23, '2023-03-09 14:28:52', '2023-03-09 14:29:04', '2023-03-09 14:29:04'),
	(51, 3, 1, 'WL20230309077543', 190, '2023-03-09 15:08:22', '2023-03-09 15:08:46', '2023-03-09 15:08:46'),
	(52, 3, 1, 'WL20230328048744', 14, '2023-03-28 11:10:42', '2023-03-28 11:10:49', '2023-04-10 11:23:15');
/*!40000 ALTER TABLE `inventory_exchanges` ENABLE KEYS */;

-- 导出  表 material_management.material_information 结构
CREATE TABLE IF NOT EXISTS `material_information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `m_byword` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `m_categories` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `m_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `m_brand` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `m_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `m_unit` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `m_description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `m_byword` (`m_byword`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.material_information 的数据：5 rows
/*!40000 ALTER TABLE `material_information` DISABLE KEYS */;
REPLACE INTO `material_information` (`id`, `m_byword`, `m_categories`, `m_name`, `m_brand`, `m_type`, `m_unit`, `m_description`, `m_price`, `created_at`, `updated_at`) VALUES
	(1, 'M1', '计算机硬件', 'CPU', '英特尔', '13900k', '个', NULL, 5999.00, '2023-02-22 14:43:03', '2023-02-22 17:18:59'),
	(2, 'M2', '计算机硬件', 'GPU', '英伟达', '4090TI', '个', NULL, 15999.00, '2023-02-22 16:51:41', '2023-02-22 16:51:41'),
	(3, 'M3', '电脑硬件', '电源', '嘉航', 'G650W', '个', NULL, 699.00, '2023-02-23 09:44:55', '2023-02-23 09:44:55'),
	(4, 'M4', '电脑硬件', '内存', '金士顿', '骇客神条', '条', NULL, 209.00, '2023-02-23 12:53:09', '2023-02-23 13:53:12'),
	(5, 'M5', '电脑硬件', '固态硬盘', '三星', '980 PRO', '个', NULL, 699.00, '2023-03-07 15:55:28', '2023-03-07 15:55:28');
/*!40000 ALTER TABLE `material_information` ENABLE KEYS */;

-- 导出  表 material_management.migrations 结构
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.migrations 的数据：19 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2016_01_04_173148_create_admin_tables', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2020_09_07_090635_create_admin_settings_table', 1),
	(7, '2020_09_22_015815_create_admin_extensions_table', 1),
	(8, '2020_11_01_083237_update_admin_menu_table', 1),
	(9, '2023_02_22_134502_create_material_information_table', 2),
	(10, '2023_02_22_134903_create_supplier_information_table', 3),
	(11, '2023_02_23_170343_create_inventory_table', 4),
	(12, '2023_02_24_152351_create_library_exchanges_table', 5),
	(13, '2023_02_24_153116_create_inventory_exchanges_table', 6),
	(14, '2023_02_27_112314_create_subscription_table', 7),
	(15, '2023_02_27_113107_create_claim_table', 8),
	(16, '2023_03_14_171047_create_question_table', 9),
	(17, '2023_04_07_092046_create_audit_flow_table', 10),
	(18, '2023_04_07_092347_create_audit_flow_detail_table', 11),
	(19, '2023_04_07_092845_create_audit_flow_table', 12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- 导出  表 material_management.password_resets 结构
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.password_resets 的数据：0 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- 导出  表 material_management.personal_access_tokens 结构
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.personal_access_tokens 的数据：0 rows
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- 导出  表 material_management.question 结构
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolvent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imge` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.question 的数据：5 rows
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
REPLACE INTO `question` (`id`, `type`, `title`, `detail`, `resolvent`, `imge`, `video`, `remark`, `created_at`, `updated_at`) VALUES
	(55, 4, '图片测试', '图片测试', '图片测试', 'images/屏幕截图_20230210_141400.png,images/屏幕截图_20230210_141556.png', 'files/视频1.mp4', NULL, '2023-04-12 16:21:03', '2023-04-12 16:21:03'),
	(54, 1, '测试', '<?php\n\nnamespace App\\Admin\\Controllers;\n\nuse App\\Admin\\Repositories\\Question;\nuse App\\Models\\Question as Q;\nuse Dcat\\Admin\\Admin;\nuse Dcat\\Admin\\Form;\nuse Dcat\\Admin\\Grid;\nuse Dcat\\Admin\\Layout\\Content;\nuse Dcat\\Admin\\Show;\nuse Dcat\\Admin\\Http\\Controllers\\AdminController;\nuse Illuminate\\Database\\Eloquent\\Model;\nuse Symfony\\Component\\Routing\\Annotation\\Route;\n\nclass QuestionController extends AdminController\n{\n    /**\n     * Make a grid builder.\n     *\n     * @return Grid\n     */\n    protected function grid()\n    {\n        return Grid::make(new Question(), function (Grid $grid) {\n            /*\n            $grid->column(\'title\');\n            $grid->column(\'updated_at\')->sortable();\n            $grid->quickSearch();\n            $grid->disableBatchActions();\n            $grid->disableRowSelector();\n            $grid->disableRefreshButton();\n            $grid->addTableClass([\'table-text-center\']);\n            */\n            \n            \n            $grid->rowSelector()->click();\n            $grid->disableRefreshButton();\n            $grid->setResource(\'question\');\n            $grid->view(\'questionTable\');\n            $grid->setActionClass(Grid\\Displayers\\Actions::class);\n            $grid->disableEditButton();\n            $grid->disableViewButton();\n            \n            $grid->filter(function (Grid\\Filter $filter) {\n                $filter->equal(\'id\')->width(6);\n                $filter->like(\'title\')->width(6)->variables();\n                $filter->equal(\'type\')->radio([1 =>\'网络\',2 => \'软件\',3 => \'硬件\',4 =>\'其他\'])->width(12);\n                $filter->panel();\n                $filter->expand(false);\n            });\n            $grid->quickSearch(\'id\',\'title\')->placeholder(\'搜索...\')->auto(false);\n            // $grid->selector(function (Grid\\Tools\\Selector $selector) {\n            //     $selector->selectOne(\'type\', \'问题类型\', [\n            //         1234 => \'硬件问题\',\n            //         2 => \'软件问题\',\n            //         3 => \'测试条目\',\n            //         4 => \'测试条目\',\n            //     ]);\n            // });\n        });\n    }\n\n    /**\n     * Make a show builder.\n     *\n     * @param mixed $id\n     *\n     * @return Show\n     */\n    protected function detail($id)\n    {\n        return Show::make($id, new Question(), function (Show $show) {\n            $show->row(function (Show\\Row $show){\n                $show->width(6)->field(\'id\');\n                $show->width(6)->field(\'type\');\n                $show->width(6)->field(\'title\');\n                $show->width(6)->field(\'remark\');\n                $show->width(6)->field(\'detail\');\n                $show->width(6)->field(\'resolvent\');\n            });\n                \n            \n            \n            \n            $show->imge()->image();\n            $show->field(\'video\')->video();\n            $show->field(\'created_at\');\n            $show->field(\'updated_at\');\n        });\n    }\n\n    /**\n     * Make a form builder.\n     *\n     * @return Form\n     */\n    protected function form()\n    {\n        return Form::make(new Question(), function (Form $form) {\n            $form->display(\'id\');\n            $form->radio(\'type\')->options([1 =>\'网络\',2 => \'软件\',3 => \'硬件\',4 =>\'其他\'])->default(1);\n            $form->text(\'title\');\n            $form->textarea(\'detail\');\n            $form->textarea(\'resolvent\');\n            $form->multipleImage(\'imge\')->sortable()->autoUpload()->removable(false)->threads(5)->storagePermission(777)->saving(function($v){\n                return implode(\',\',$v);\n            });\n            $form->file(\'video\')->removable(false)->chunkSize(81920)->autoUpload()->maxSize(102400)->storagePermission(777);\n            $form->text(\'remark\')->default(\'\');\n        });\n    }\n    \n}', '<?php\n\nnamespace App\\Admin\\Controllers;\n\nuse App\\Admin\\Repositories\\Question;\nuse App\\Models\\Question as Q;\nuse Dcat\\Admin\\Admin;\nuse Dcat\\Admin\\Form;\nuse Dcat\\Admin\\Grid;\nuse Dcat\\Admin\\Layout\\Content;\nuse Dcat\\Admin\\Show;\nuse Dcat\\Admin\\Http\\Controllers\\AdminController;\nuse Illuminate\\Database\\Eloquent\\Model;\nuse Symfony\\Component\\Routing\\Annotation\\Route;\n\nclass QuestionController extends AdminController\n{\n    /**\n     * Make a grid builder.\n     *\n     * @return Grid\n     */\n    protected function grid()\n    {\n        return Grid::make(new Question(), function (Grid $grid) {\n            /*\n            $grid->column(\'title\');\n            $grid->column(\'updated_at\')->sortable();\n            $grid->quickSearch();\n            $grid->disableBatchActions();\n            $grid->disableRowSelector();\n            $grid->disableRefreshButton();\n            $grid->addTableClass([\'table-text-center\']);\n            */\n            \n            \n            $grid->rowSelector()->click();\n            $grid->disableRefreshButton();\n            $grid->setResource(\'question\');\n            $grid->view(\'questionTable\');\n            $grid->setActionClass(Grid\\Displayers\\Actions::class);\n            $grid->disableEditButton();\n            $grid->disableViewButton();\n            \n            $grid->filter(function (Grid\\Filter $filter) {\n                $filter->equal(\'id\')->width(6);\n                $filter->like(\'title\')->width(6)->variables();\n                $filter->equal(\'type\')->radio([1 =>\'网络\',2 => \'软件\',3 => \'硬件\',4 =>\'其他\'])->width(12);\n                $filter->panel();\n                $filter->expand(false);\n            });\n            $grid->quickSearch(\'id\',\'title\')->placeholder(\'搜索...\')->auto(false);\n            // $grid->selector(function (Grid\\Tools\\Selector $selector) {\n            //     $selector->selectOne(\'type\', \'问题类型\', [\n            //         1234 => \'硬件问题\',\n            //         2 => \'软件问题\',\n            //         3 => \'测试条目\',\n            //         4 => \'测试条目\',\n            //     ]);\n            // });\n        });\n    }\n\n    /**\n     * Make a show builder.\n     *\n     * @param mixed $id\n     *\n     * @return Show\n     */\n    protected function detail($id)\n    {\n        return Show::make($id, new Question(), function (Show $show) {\n            $show->row(function (Show\\Row $show){\n                $show->width(6)->field(\'id\');\n                $show->width(6)->field(\'type\');\n                $show->width(6)->field(\'title\');\n                $show->width(6)->field(\'remark\');\n                $show->width(6)->field(\'detail\');\n                $show->width(6)->field(\'resolvent\');\n            });\n                \n            \n            \n            \n            $show->imge()->image();\n            $show->field(\'video\')->video();\n            $show->field(\'created_at\');\n            $show->field(\'updated_at\');\n        });\n    }\n\n    /**\n     * Make a form builder.\n     *\n     * @return Form\n     */\n    protected function form()\n    {\n        return Form::make(new Question(), function (Form $form) {\n            $form->display(\'id\');\n            $form->radio(\'type\')->options([1 =>\'网络\',2 => \'软件\',3 => \'硬件\',4 =>\'其他\'])->default(1);\n            $form->text(\'title\');\n            $form->textarea(\'detail\');\n            $form->textarea(\'resolvent\');\n            $form->multipleImage(\'imge\')->sortable()->autoUpload()->removable(false)->threads(5)->storagePermission(777)->saving(function($v){\n                return implode(\',\',$v);\n            });\n            $form->file(\'video\')->removable(false)->chunkSize(81920)->autoUpload()->maxSize(102400)->storagePermission(777);\n            $form->text(\'remark\')->default(\'\');\n        });\n    }\n    \n}', 'images/屏幕截图_20230113_111926.png', 'files/2320fb39c20910ac3f4a1aeb36045d9e.mp4', '1324', '2023-04-12 16:16:19', '2023-04-12 16:16:19'),
	(51, 3, '手机端测试', '测试', '测试', 'images/tb_image_share_1671967873445.jpg,images/屏幕截图_20230113_094833.png,images/屏幕截图_20230113_100417.png,images/屏幕截图_20230113_100526.png', NULL, '中文，Chinese，試験', '2023-04-12 16:13:37', '2023-04-12 16:13:37'),
	(52, 3, '12342134', '1234', '1324', 'images/屏幕截图_20230113_102631.png', 'files/屏幕截图_20230113_084025.png', '567', '2023-04-12 16:13:37', '2023-04-12 16:13:37'),
	(53, 2, '测试2', '测试', '测试', 'images/9065aa2a949bbc9a5778c5defb4740ff.png,images/屏幕截图_20230113_093312.png,images/屏幕截图_20230113_091721.png', 'files/视频1.mp4', '1234', '2023-04-12 16:16:01', '2023-04-12 16:16:01');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;

-- 导出  表 material_management.subscription 结构
CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FlowNo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `material_information_id` int(11) NOT NULL DEFAULT '0',
  `inventory_exchanges_id` int(11) NOT NULL DEFAULT '0',
  `requisition_orders` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `applicant` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `request_time` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `m_byword` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `order_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `requisition_orders` (`requisition_orders`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.subscription 的数据：14 rows
/*!40000 ALTER TABLE `subscription` DISABLE KEYS */;
REPLACE INTO `subscription` (`id`, `FlowNo`, `material_information_id`, `inventory_exchanges_id`, `requisition_orders`, `applicant`, `request_time`, `quantity`, `m_byword`, `order_status`, `created_at`, `updated_at`) VALUES
	(6, '', 3, 0, 'SG20230302071980', 'admin', '2023-03-02 16:17:16', 1, '', 1, '2023-03-02 16:17:19', '2023-04-10 11:10:48'),
	(7, '', 2, 0, 'SG20230309034398', 'admin', '2023-03-09 13:51:44', 1, '', 1, '2023-03-09 13:51:47', '2023-04-10 11:03:18'),
	(12, '', 3, 0, 'SG20230309054692', 'admin', '2023-03-09 16:55:59', 34, '', 1, '2023-03-09 16:56:09', '2023-04-10 11:10:41'),
	(14, '', 4, 0, 'SG20230309027463', 'admin', '2023-03-09 17:09:53', 49, '', 1, '2023-03-09 17:09:59', '2023-04-10 11:10:54'),
	(15, '', 5, 0, 'SG20230309082647', 'admin', '2023-03-09 17:13:06', 63, '', 1, '2023-03-09 17:13:17', '2023-04-10 08:42:56'),
	(16, '', 2, 0, 'SG20230309034030', 'admin', '2023-03-09 17:14:28', 35, '', 1, '2023-03-09 17:14:31', '2023-04-10 08:42:56'),
	(18, '', 4, 0, 'SG20230328056889', 'admin', '2023-03-28 17:12:17', 2, '', 1, '2023-03-28 17:12:21', '2023-04-10 08:42:56'),
	(19, '', 5, 0, 'SG20230330041382', 'admin', '2023-03-30 15:32:44', 1234, '', 2, '2023-03-30 15:32:47', '2023-04-10 08:42:56'),
	(20, '1234', 2, 0, 'SG20230407001741', 'admin', '2023-04-07 10:53:08', 1123, '', 3, '2023-04-07 10:53:13', '2023-04-10 08:42:56'),
	(23, '4444', 3, 0, 'SG20230407054514', 'admin', '2023-04-07 11:19:58', 234, '', 4, '2023-04-07 11:20:02', '2023-04-10 08:42:56'),
	(22, '4444', 2, 0, 'SG20230407046819', 'admin', '2023-04-07 11:18:54', 234, '', 2, '2023-04-07 11:18:59', '2023-04-10 08:42:56'),
	(24, '1234312423', 3, 0, 'SG20230407099681', 'admin', '2023-04-07 11:32:13', 432, '', 4, '2023-04-07 11:32:18', '2023-04-10 08:42:56'),
	(25, 'qwer', 3, 0, 'SG20230407082228', 'admin', '2023-04-07 11:40:04', 55, '', 3, '2023-04-07 11:40:11', '2023-04-10 08:42:56'),
	(26, 'SP20230426094419', 4, 0, 'SG20230426094516', 'admin', '2023-04-26 14:55:32', 234, '', 1, '2023-04-26 14:55:40', '2023-04-26 14:55:40');
/*!40000 ALTER TABLE `subscription` ENABLE KEYS */;

-- 导出  表 material_management.supplier_information 结构
CREATE TABLE IF NOT EXISTS `supplier_information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `s_byword` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `s_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `s_contact` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `s_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `s_byword` (`s_byword`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  material_management.supplier_information 的数据：5 rows
/*!40000 ALTER TABLE `supplier_information` DISABLE KEYS */;
REPLACE INTO `supplier_information` (`id`, `s_byword`, `s_name`, `s_contact`, `s_phone`, `created_at`, `updated_at`) VALUES
	(1, 'S1', '英特尔', 'SOME ONE', '1300000000', '2023-02-22 14:16:49', '2023-02-23 09:44:09'),
	(2, 'S2', '英伟达', '皮衣刀客', '1300000001', '2023-02-22 16:57:23', '2023-02-22 16:57:23'),
	(3, 'S3', '三星', 'n', '13000000003', '2023-03-09 14:00:41', '2023-03-09 14:00:41'),
	(4, 'S4', '嘉航', 'N', '13000000004', '2023-03-09 14:02:16', '2023-03-09 14:02:16'),
	(5, 'S5', '金士顿', 'N', '13000000005', '2023-03-09 14:04:17', '2023-03-09 14:04:17');
/*!40000 ALTER TABLE `supplier_information` ENABLE KEYS */;

-- 导出  表 material_management.supplier_material 结构
CREATE TABLE IF NOT EXISTS `supplier_material` (
  `supplier_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `supplier_material_supplier_id_material_id_index` (`supplier_id`,`material_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 正在导出表  material_management.supplier_material 的数据：7 rows
/*!40000 ALTER TABLE `supplier_material` DISABLE KEYS */;
REPLACE INTO `supplier_material` (`supplier_id`, `material_id`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL),
	(2, 2, NULL, NULL),
	(4, 3, NULL, NULL),
	(4, 4, NULL, NULL),
	(3, 5, NULL, NULL),
	(3, 6, NULL, NULL),
	(2, 7, NULL, NULL);
/*!40000 ALTER TABLE `supplier_material` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
