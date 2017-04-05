/*
Navicat MySQL Data Transfer

Source Server         : 后台
Source Server Version : 50713
Source Host           : localhost:3306
Source Database       : offcn_admin

Target Server Type    : MYSQL
Target Server Version : 50713
File Encoding         : 65001

Date: 2017-03-21 17:40:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for of_admin
-- ----------------------------
DROP TABLE IF EXISTS `of_admin`;
CREATE TABLE `of_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_admin
-- ----------------------------
INSERT INTO `of_admin` VALUES ('4', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for of_user
-- ----------------------------
DROP TABLE IF EXISTS `of_user`;
CREATE TABLE `of_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` char(50) DEFAULT NULL COMMENT '邮箱',
  `phone` char(11) DEFAULT NULL COMMENT '手机号',
  `qq` char(15) DEFAULT NULL COMMENT 'QQ号',
  `brief` char(250) DEFAULT NULL COMMENT '个人简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_user
-- ----------------------------
INSERT INTO `of_user` VALUES ('4', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '15615894927@163.com', '', '', 'sadfsafasfasd');
INSERT INTO `of_user` VALUES ('5', 'asdf', '', 'sadf', 'sadf', 'asdf', 'asdf');
INSERT INTO `of_user` VALUES ('6', 'sdfasd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf');
INSERT INTO `of_user` VALUES ('7', 'sadfsadf', 'sadf', 'sdaf', 'sdaf', 'asdf', 'sadfsadf');
