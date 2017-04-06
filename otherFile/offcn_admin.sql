/*
Navicat MySQL Data Transfer

Source Server         : share
Source Server Version : 50713
Source Host           : www.jinrongren.net:3306
Source Database       : offcn_admin

Target Server Type    : MYSQL
Target Server Version : 50713
File Encoding         : 65001

Date: 2017-04-06 17:39:17
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
  `awardType` tinyint(4) DEFAULT NULL,
  `award` varchar(16) DEFAULT NULL,
  `updatetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_user
-- ----------------------------
INSERT INTO `of_user` VALUES ('108', 'aa', '', '352897321@qq.com', '14514535353', null, 'sadfsfd', '2', '4b521647b335d972', '1491458944');
INSERT INTO `of_user` VALUES ('109', 'cc', '', null, '14514535353', null, null, '3', '4b521647b335d972', '1491458955');
INSERT INTO `of_user` VALUES ('110', 'dd', '', null, '14514532323', null, null, '2', 'cdb8bebcf36f3b8b', '1491458977');
INSERT INTO `of_user` VALUES ('111', 'ff', '', null, '19009098765', null, null, '2', '722bdda641ad2c6a', '1491458994');
INSERT INTO `of_user` VALUES ('112', 'qw', '', null, '15614342536', null, null, '4', '1ca4c5c9781ac2a0', '1491459010');
INSERT INTO `of_user` VALUES ('113', 'll', '', null, '17726465643', null, null, '4', 'ef0b5c74f1c6a078', '1491459035');
INSERT INTO `of_user` VALUES ('114', 'pp', '', null, '17878787876', null, null, '2', '4dfda16c63a993b2', '1491459051');
INSERT INTO `of_user` VALUES ('115', '礼服龙', '', null, '15656562342', null, null, '3', '29b31023d52314e2', '1491459660');
INSERT INTO `of_user` VALUES ('116', 'lee', '', '', 'safd', null, '0', '0', null, null);
INSERT INTO `of_user` VALUES ('117', 'lee213', '', '', '', null, '0', '0', null, null);
