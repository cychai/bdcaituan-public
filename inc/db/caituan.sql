/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : caituan

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2014-06-12 16:05:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT NULL COMMENT '姓名',
  `sex` int(11) DEFAULT NULL COMMENT '性别',
  `height` varchar(128) DEFAULT NULL COMMENT '身高',
  `weight` varchar(128) DEFAULT NULL COMMENT '体重',
  `size` varchar(128) DEFAULT NULL COMMENT '尺寸',
  `email` varchar(128) DEFAULT NULL COMMENT '邮箱',
  `mobile` varchar(128) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `blessings` text COMMENT '祝福语',
  `update_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;