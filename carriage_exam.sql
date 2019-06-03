/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : jiakao

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2019-06-03 15:12:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `carriage_exam`
-- ----------------------------
DROP TABLE IF EXISTS `carriage_exam`;
CREATE TABLE `carriage_exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '题目',
  `option_a` varchar(255) DEFAULT NULL COMMENT '选项A',
  `option_b` varchar(255) DEFAULT NULL COMMENT '选项B',
  `option_c` varchar(255) DEFAULT NULL COMMENT '选项C',
  `option_d` varchar(255) DEFAULT NULL COMMENT '选项D',
  `exam_correct` varchar(255) DEFAULT NULL COMMENT '正确答案',
  `section` varchar(255) DEFAULT NULL COMMENT '章节',
  `count_error` int(11) DEFAULT NULL COMMENT '错题计数',
  `course_type` varchar(255) DEFAULT NULL COMMENT '科目类型',
  `explain` varchar(255) DEFAULT NULL COMMENT '详解',
  `img_exam` varchar(255) DEFAULT NULL COMMENT '提的图片',
  `zhuan_data` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_correct` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_type` varchar(255) DEFAULT NULL COMMENT '专项按试题类型',
  `zhuan_intell` varchar(255) DEFAULT NULL COMMENT '专项按知识点类型',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carriage_exam
-- ----------------------------
INSERT INTO `carriage_exam` VALUES ('1', '驾驶机动车在道路上违反道路交通安全法的行为，属于什么行为？', '违法行为', '违章行为', '违规行为', '过失行为', 'A', null, null, '科目一', '违反《道路交通安全法》，属于违法行为。官方已无违规、违章的说法。', null, null, null, null, null, null);
INSERT INTO `carriage_exam` VALUES ('2', '机动车驾驶人违法驾驶造成重大交通事故构成犯罪的，依法追究什么责任？', '民事责任', '刑事责任', '经济责任', '直接责任', 'B', null, null, '科目一', '《道路交通安全法》第一百零一条：\r\n违反道路交通安全法律、法规的规定，发生重大交通事故，构成犯罪的，依法追究刑事责任，并由公安机关交通管理部门吊销机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `carriage_exam` VALUES ('3', '机动车驾驶人造成事故后逃逸构成犯罪的，吊销驾驶证且多长时间不得重新取得驾驶证？', '20年内', '10年内', '终生', '5年内', 'C', null, null, '科目一', '《道路交通安全法》第一百零一条：\r\n造成交通事故后逃逸的，由公安机关交通管理部门吊销其机动车驾驶证，且终生不得重新取得机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `carriage_exam` VALUES ('4', '变更车道前确认后方无来车时可以不开转向灯变道。', '正确', '错误', null, null, 'B', null, null, '科目四', '变更车道前要提前开启转向灯，不管有无来车。要养成良好的开车习惯，防患于未然，因此本题错误。', null, null, null, null, null, null);
INSERT INTO `carriage_exam` VALUES ('5', '某日13时10分，罗某驾驶一辆中型客车从高速公路0公里处出发，下午14时10分行至该高速公路125公里加200米处时，发生追尾碰撞，机动车驶出西南侧路外边坡，造成11人死亡、2人受伤。罗某的主要违法行为是什么？', '不按交通标线行驶', '客车超员', '疲劳驾驶', '超速行驶', 'D', null, null, '科目四', '《道路交通安全法》规定，高速公路行驶的小型载客汽车最高车速不得超过每小时120公里，但是这里罗某一个小时的驾驶路程125公里200米，很明显他超速了，属于超速行驶。', null, null, null, null, null, null);
INSERT INTO `carriage_exam` VALUES ('6', '何某驾驶一辆乘载53人的大客车（核载47人），行至宁合高速公路南京境内454公里加100米处，被一辆重型半挂牵引车追尾，导致大客车翻出路侧护栏并起火燃烧，造成17人死亡、27人受伤。何某的主要违法行为是什么？', '客车超员', '操作不当', '超速行驶', '驾驶逾期未年检机动车', 'A', null, null, '科目四', '超过核载人数，超员了。', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `collect`
-- ----------------------------
DROP TABLE IF EXISTS `collect`;
CREATE TABLE `collect` (
  `user_id` int(11) DEFAULT NULL,
  `exam_id` varchar(255) DEFAULT NULL COMMENT '题id',
  `cart_type` varchar(255) DEFAULT NULL COMMENT '车型'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collect
-- ----------------------------

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `comment` varchar(255) DEFAULT NULL COMMENT '评论内容',
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

-- ----------------------------
-- Table structure for `count`
-- ----------------------------
DROP TABLE IF EXISTS `count`;
CREATE TABLE `count` (
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `my_error` varchar(255) DEFAULT NULL COMMENT '我的错题',
  `cart_type` varchar(255) DEFAULT NULL COMMENT '车型',
  `count_max` varchar(255) DEFAULT NULL COMMENT '做过的总题',
  `course_type` varchar(255) DEFAULT NULL COMMENT '科目类型'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of count
-- ----------------------------
INSERT INTO `count` VALUES ('1', '1,2', '小车', '1,2,3', '科目一');

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
  `course_type` varchar(255) DEFAULT NULL COMMENT '科目类型',
  `explain` varchar(255) DEFAULT NULL COMMENT '详解',
  `img_exam` varchar(255) DEFAULT NULL COMMENT '提的图片',
  `zhuan_data` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_correct` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_type` varchar(255) DEFAULT NULL COMMENT '专项按试题类型',
  `zhuan_intell` varchar(255) DEFAULT NULL COMMENT '专项按知识点类型',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dolly_exam
-- ----------------------------
INSERT INTO `dolly_exam` VALUES ('1', '驾驶机动车在道路上违反道路交通安全法的行为,属于什么行为', '违法行为', '违章行为', '违规行为', '过失行为', 'A', null, null, '科目一', '违反道路交通安全法，属于违法行为。官方已无违规、违章的说法。', null, null, null, null, null, null);
INSERT INTO `dolly_exam` VALUES ('2', '机动车驾驶人违法驾驶造成重大交通事故构成犯罪的,依法追究什么责任', '刑事责任', '直接责任', '民事责任', '经济责任', 'A', null, null, '科目一', '《道路交通安全法》第一百零一条:违反道路交通安全法律、法规的规定，发生重大交通事故，构成犯罪的，依法追究刑事责任，并由公安机关交通管理部门吊销机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `dolly_exam` VALUES ('3', '机动车驾驶人造成事故后逃逸构成犯罪的,吊销驾驶证且多长时间不得重新取得驾驶证', '终生', '5年内', '20年内', '10年内', 'A', null, null, '科目一', '《道路交通安全法》第一百零一条:造成交通事故后逃逸的，由公安机关交通管理部门吊销其机动车驾驶证，且终生不得重新取得机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `dolly_exam` VALUES ('4', '佟某驾驶一辆大客车（乘载54人，核载55人）行至太原境内以45公里的时速通过一处泥泞路段时，机动车侧滑驶出路外坠入深沟，导致14人死亡、40人受伤。佟某的主要违法行为是什么', '酒后驾驶', '酒后驾驶', '超速行驶', '疲劳驾驶', 'C', null, null, '科目四', '按照规定，泥泞路面最高速度不能超过30公里/小时，题中以45公里的时速通过一处泥泞路段，是超速行驶。', null, null, null, null, null, null);
INSERT INTO `dolly_exam` VALUES ('5', '郝某驾驶一辆载有84.84吨货物的重型自卸货车（核载15.58吨），行至滦县境内262省道34公里加623米处，与前方同向行驶的一辆载有45.85吨货物的货车（核载1.71吨）追尾碰撞后，侧翻撞向路边人群，造成19人死亡、17人受伤。双方驾驶人共同的违法行为是什么', '疲劳驾驶', '货车超载', '酒后驾驶', '超速行驶', 'B', null, null, '科目四', '核载是允许装载质量，载有是实际装载质量。明显两车都超载是他们共同的违法行为。', null, null, null, null, null, null);
INSERT INTO `dolly_exam` VALUES ('6', '周某驾驶一辆轻型厢式货车（搭载22人）行驶至丙察公路79公里加150米处时，坠入道路一侧山崖，造成12人死亡、10人受伤。周某的主要违法行为是什么', '驾驶逾期未检验的机动车', '疲劳驾驶', '货运机动车载客', '超速行驶', 'C', null, null, '科目四', '货车只能用来装载货物，搭载22人违法，属于货运机动车载客。', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `motorcycle_exam`
-- ----------------------------
DROP TABLE IF EXISTS `motorcycle_exam`;
CREATE TABLE `motorcycle_exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '题目',
  `option_a` varchar(255) DEFAULT NULL COMMENT '选项A',
  `option_b` varchar(255) DEFAULT NULL COMMENT '选项B',
  `option_c` varchar(255) DEFAULT NULL COMMENT '选项C',
  `option_d` varchar(255) DEFAULT NULL COMMENT '选项D',
  `exam_correct` varchar(255) DEFAULT NULL COMMENT '正确答案',
  `section` varchar(255) DEFAULT NULL COMMENT '章节',
  `count_error` int(11) DEFAULT NULL COMMENT '错题计数',
  `course_type` varchar(255) DEFAULT NULL COMMENT '科目类型',
  `explain` varchar(255) DEFAULT NULL COMMENT '详解',
  `img_exam` varchar(255) DEFAULT NULL COMMENT '提的图片',
  `zhuan_data` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_correct` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_type` varchar(255) DEFAULT NULL COMMENT '专项按试题类型',
  `zhuan_intell` varchar(255) DEFAULT NULL COMMENT '专项按知识点类型',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of motorcycle_exam
-- ----------------------------
INSERT INTO `motorcycle_exam` VALUES ('1', '驾驶机动车在道路上违反道路交通安全法的行为，属于什么行为？', '违法行为', '违章行为', '违规行为', '过失行为', 'A', null, null, '科目一', '违反《道路交通安全法》，属于违法行为。官方已无违规、违章的说法。', null, null, null, null, null, null);
INSERT INTO `motorcycle_exam` VALUES ('2', '机动车驾驶人违法驾驶造成重大交通事故构成犯罪的，依法追究什么责任？', '刑事责任', '直接责任', '民事责任', '经济责任', 'A', null, null, '科目一', '《道路交通安全法》第一百零一条：\r\n违反道路交通安全法律、法规的规定，发生重大交通事故，构成犯罪的，依法追究刑事责任，并由公安机关交通管理部门吊销机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `motorcycle_exam` VALUES ('3', '机动车驾驶人造成事故后逃逸构成犯罪的，吊销驾驶证且多长时间不得重新取得驾驶证？', '终生', '5年内', '20年内', '10年内', 'A', null, null, '科目一', '《道路交通安全法》第一百零一条：\r\n造成交通事故后逃逸的，由公安机关交通管理部门吊销其机动车驾驶证，且终生不得重新取得机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `motorcycle_exam` VALUES ('4', '佟某驾驶一辆大客车（乘载54人，核载55人）行至太原境内以45公里的时速通过一处泥泞路段时，机动车侧滑驶出路外坠入深沟，导致14人死亡、40人受伤。佟某的主要违法行为是什么？', '酒后驾驶', '酒后驾驶', '超速行驶', '疲劳驾驶', 'C', null, null, '科目四', '按照规定，泥泞路面最高速度不能超过30公里/小时，题中以45公里的时速通过一处泥泞路段，是超速行驶。', null, null, null, null, null, null);
INSERT INTO `motorcycle_exam` VALUES ('5', '郝某驾驶一辆载有84.84吨货物的重型自卸货车（核载15.58吨），行至滦县境内262省道34公里加623米处，与前方同向行驶的一辆载有45.85吨货物的货车（核载1.71吨）追尾碰撞后，侧翻撞向路边人群，造成19人死亡、17人受伤。双方驾驶人共同的违法行为是什么？', '疲劳驾驶', '货车超载', '酒后驾驶', '超速行驶', 'B', null, null, '科目四', '核载是允许装载质量，载有是实际装载质量。明显两车都超载是他们共同的违法行为。', null, null, null, null, null, null);
INSERT INTO `motorcycle_exam` VALUES ('6', '周某驾驶一辆轻型厢式货车（搭载22人）行驶至丙察公路79公里加150米处时，坠入道路一侧山崖，造成12人死亡、10人受伤。周某的主要违法行为是什么？', '驾驶逾期未检验的机动车', '疲劳驾驶', '货运机动车载客', '超速行驶', 'C', null, null, '科目四', '货车只能用来装载货物，搭载22人违法，属于货运机动车载客。', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `truck_exam`
-- ----------------------------
DROP TABLE IF EXISTS `truck_exam`;
CREATE TABLE `truck_exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '题目',
  `option_a` varchar(255) DEFAULT NULL COMMENT '选项A',
  `option_b` varchar(255) DEFAULT NULL COMMENT '选项B',
  `option_c` varchar(255) DEFAULT NULL COMMENT '选项C',
  `option_d` varchar(255) DEFAULT NULL COMMENT '选项D',
  `exam_correct` varchar(255) DEFAULT NULL COMMENT '正确答案',
  `section` varchar(255) DEFAULT NULL COMMENT '章节',
  `count_error` int(11) DEFAULT NULL COMMENT '错题计数',
  `course_type` varchar(255) DEFAULT NULL COMMENT '科目类型',
  `explain` varchar(255) DEFAULT NULL COMMENT '详解',
  `img_exam` varchar(255) DEFAULT NULL COMMENT '提的图片',
  `zhuan_data` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_correct` varchar(255) DEFAULT NULL COMMENT '专项按内容类型',
  `zhuan_type` varchar(255) DEFAULT NULL COMMENT '专项按试题类型',
  `zhuan_intell` varchar(255) DEFAULT NULL COMMENT '专项按知识点类型',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of truck_exam
-- ----------------------------
INSERT INTO `truck_exam` VALUES ('1', '驾驶机动车在道路上违反道路交通安全法的行为，属于什么行为？', '违法行为', '违章行为', '违规行为', '过失行为', 'A', null, null, '科目一', '违反《道路交通安全法》，属于违法行为。官方已无违规、违章的说法。', null, null, null, null, null, null);
INSERT INTO `truck_exam` VALUES ('2', '机动车驾驶人违法驾驶造成重大交通事故构成犯罪的，依法追究什么责任？', '刑事责任', '直接责任', '民事责任', '经济责任', 'A', null, null, '科目一', '《道路交通安全法》第一百零一条：\r\n违反道路交通安全法律、法规的规定，发生重大交通事故，构成犯罪的，依法追究刑事责任，并由公安机关交通管理部门吊销机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `truck_exam` VALUES ('3', '机动车驾驶人造成事故后逃逸构成犯罪的，吊销驾驶证且多长时间不得重新取得驾驶证？', '终生', '5年内', '20年内', '10年内', 'A', null, null, '科目一', '《道路交通安全法》第一百零一条：\r\n造成交通事故后逃逸的，由公安机关交通管理部门吊销其机动车驾驶证，且终生不得重新取得机动车驾驶证。', null, null, null, null, null, null);
INSERT INTO `truck_exam` VALUES ('4', '佟某驾驶一辆大客车（乘载54人，核载55人）行至太原境内以45公里的时速通过一处泥泞路段时，机动车侧滑驶出路外坠入深沟，导致14人死亡、40人受伤。佟某的主要违法行为是什么？', '酒后驾驶', '酒后驾驶', '超速行驶', '疲劳驾驶', 'C', null, null, '科目四', '按照规定，泥泞路面最高速度不能超过30公里/小时，题中以45公里的时速通过一处泥泞路段，是超速行驶。', null, null, null, null, null, null);
INSERT INTO `truck_exam` VALUES ('5', '郝某驾驶一辆载有84.84吨货物的重型自卸货车（核载15.58吨），行至滦县境内262省道34公里加623米处，与前方同向行驶的一辆载有45.85吨货物的货车（核载1.71吨）追尾碰撞后，侧翻撞向路边人群，造成19人死亡、17人受伤。双方驾驶人共同的违法行为是什么？', '疲劳驾驶', '货车超载', '酒后驾驶', '超速行驶', 'B', null, null, '科目四', '核载是允许装载质量，载有是实际装载质量。明显两车都超载是他们共同的违法行为。', null, null, null, null, null, null);
INSERT INTO `truck_exam` VALUES ('6', '周某驾驶一辆轻型厢式货车（搭载22人）行驶至丙察公路79公里加150米处时，坠入道路一侧山崖，造成12人死亡、10人受伤。周某的主要违法行为是什么？', '驾驶逾期未检验的机动车', '疲劳驾驶', '货运机动车载客', '超速行驶', 'C', null, null, '科目四', '货车只能用来装载货物，搭载22人违法，属于货运机动车载客。', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL COMMENT '用户名称',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `img` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `grade` int(11) DEFAULT NULL,
  `time` float DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '李明泽', '1', null, '100', '93');
INSERT INTO `user` VALUES ('2', '郝颖', '2', null, '100', '92.99');
INSERT INTO `user` VALUES ('3', '麻亮亮', '3', null, '100', '92.98');
INSERT INTO `user` VALUES ('4', '孟繁龙', '4', null, '99', '95');
