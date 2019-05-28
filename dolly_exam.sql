/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : jiakao

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2019-05-28 14:05:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dolly_exam`
-- ----------------------------
DROP TABLE IF EXISTS `dolly_exam`;
CREATE TABLE `dolly_exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '题目',
  `option_a` varchar(255) DEFAULT NULL COMMENT '选项A',
  `option_b` varchar(255) DEFAULT NULL COMMENT '选项B',
  `option_c` varchar(255) DEFAULT NULL COMMENT '选项C',
  `option_d` varchar(255) DEFAULT NULL COMMENT '选项D',
  `exam_correct` varchar(255) DEFAULT NULL COMMENT '正确答案',
  `section` varchar(255) DEFAULT NULL COMMENT '章节',
  `count_error` int(11) DEFAULT NULL COMMENT '错题计数',
  `course_type` int(11) DEFAULT NULL COMMENT '科目类型',
  `explain` varchar(255) DEFAULT NULL COMMENT '详解',
  `img_exam` varchar(255) DEFAULT NULL COMMENT '提的图片',
  `zhuan_data` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_correct` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_type` varchar(255) DEFAULT NULL COMMENT '专项按试题类型',
  `zhuan_intell` varchar(255) DEFAULT NULL COMMENT '专项按知识点类型',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dolly_exam
-- ----------------------------
INSERT INTO `dolly_exam` VALUES ('1', '第一题?', 'a 1', 'b 2', 'c 3', 'd 4', 'd', '1', null, '1', '详解', '科目图片', null, null, null, null, '1');
