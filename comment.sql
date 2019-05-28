/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : jiakao

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2019-05-28 14:05:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `comment` varchar(255) DEFAULT NULL COMMENT '评论',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `exam_id` int(11) DEFAULT NULL COMMENT '题id',
  `praise` int(11) DEFAULT NULL COMMENT '点赞',
  `cart_type` int(11) DEFAULT NULL COMMENT '车型',
  `course_type` int(11) DEFAULT NULL COMMENT '科目类型',
  `my_error` varchar(255) DEFAULT NULL COMMENT '我的错题',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
