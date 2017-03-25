SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for park
-- ----------------------------
DROP TABLE IF EXISTS `park`;
CREATE TABLE `park` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(100) NOT NULL COMMENT '域名',
  `type` tinyint(3) unsigned NOT NULL COMMENT '类型 1=展示 2=跳转',
  `title` varchar(100) NOT NULL COMMENT '展示标题',
  `description` varchar(1000) NOT NULL COMMENT '展示介绍',
  `price` double(10,2) unsigned NOT NULL COMMENT '展示价格',
  `email` varchar(100) NOT NULL COMMENT '展示联系邮箱',
  `url` varchar(100) NOT NULL COMMENT '跳转链接',
  `views` int(10) unsigned NOT NULL COMMENT '浏览次数',
  `del` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '删除标志 0=没有删除 1=删除',
  PRIMARY KEY (`id`),
  KEY `domain` (`domain`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
