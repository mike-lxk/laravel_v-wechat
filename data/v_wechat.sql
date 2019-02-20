/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : v_wechat

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-02-20 18:18:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for v_admin
-- ----------------------------
DROP TABLE IF EXISTS `v_admin`;
CREATE TABLE `v_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` varchar(20) DEFAULT NULL COMMENT '管理员登陆名称',
  `password` char(32) DEFAULT NULL,
  `role_id` int(2) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `create_time` int(10) DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0:禁用； 1:正常',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of v_admin
-- ----------------------------
INSERT INTO `v_admin` VALUES ('1', 'admin', 'c78b6663d47cfbdb4d65ea51c104044e', '1', '18762816879', 'l_xiaokun@163.com', '1526694208', '1531129058', '1');
INSERT INTO `v_admin` VALUES ('2', 'mike', 'c78b6663d47cfbdb4d65ea51c104044e', '2', '18762816879', 'l_xiaokun@163.com', '1531126522', '1531129019', '0');

-- ----------------------------
-- Table structure for v_admin_log
-- ----------------------------
DROP TABLE IF EXISTS `v_admin_log`;
CREATE TABLE `v_admin_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '管理员姓名',
  `r_name` varchar(50) DEFAULT NULL COMMENT '角色名称',
  `login_ip` varchar(20) DEFAULT NULL COMMENT '登录IP',
  `login_time` int(10) DEFAULT NULL COMMENT '登录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='后台登录日志';

-- ----------------------------
-- Records of v_admin_log
-- ----------------------------
INSERT INTO `v_admin_log` VALUES ('1', 'admin', '超级管理员', '127.0.0.1', '1540878800');
INSERT INTO `v_admin_log` VALUES ('2', 'admin', '超级管理员', '127.0.0.1', '1540879392');
INSERT INTO `v_admin_log` VALUES ('3', 'admin', '超级管理员', '127.0.0.1', '1540881168');
INSERT INTO `v_admin_log` VALUES ('4', 'admin', '超级管理员', '127.0.0.1', '1540881239');
INSERT INTO `v_admin_log` VALUES ('5', 'admin', '超级管理员', '127.0.0.1', '1540883232');
INSERT INTO `v_admin_log` VALUES ('6', 'admin', '超级管理员', '127.0.0.1', '1540883270');
INSERT INTO `v_admin_log` VALUES ('7', 'admin', '超级管理员', '127.0.0.1', '1540885678');
INSERT INTO `v_admin_log` VALUES ('8', 'admin', '超级管理员', '127.0.0.1', '1540949424');
INSERT INTO `v_admin_log` VALUES ('9', 'admin', '超级管理员', '127.0.0.1', '1540964552');
INSERT INTO `v_admin_log` VALUES ('10', 'admin', '超级管理员', '127.0.0.1', '1540964992');
INSERT INTO `v_admin_log` VALUES ('11', 'admin', '超级管理员', '127.0.0.1', '1541034389');
INSERT INTO `v_admin_log` VALUES ('12', 'admin', '超级管理员', '127.0.0.1', '1542943978');

-- ----------------------------
-- Table structure for v_agency
-- ----------------------------
DROP TABLE IF EXISTS `v_agency`;
CREATE TABLE `v_agency` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `phone` bigint(11) NOT NULL COMMENT '手机号',
  `position` varchar(50) DEFAULT NULL COMMENT '位置',
  `company` varchar(30) NOT NULL COMMENT '企业名称',
  `message` varchar(100) NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='代理加盟';

-- ----------------------------
-- Records of v_agency
-- ----------------------------
INSERT INTO `v_agency` VALUES ('1', 'mike', '18762816879', '山西省 太原市 小店区', '南京公司', '备注信息');
INSERT INTO `v_agency` VALUES ('2', 'lxk', '18759596969', '江苏省 南京市 玄武区', '南京company', '备注');
INSERT INTO `v_agency` VALUES ('3', 'ss', '18758496962', '湖南省 长沙市 芙蓉区', '公司名称', '备注');

-- ----------------------------
-- Table structure for v_course
-- ----------------------------
DROP TABLE IF EXISTS `v_course`;
CREATE TABLE `v_course` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '课程编号',
  `name` varchar(100) NOT NULL COMMENT '课程名称',
  `t_id` tinyint(1) NOT NULL COMMENT '教师编号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='课程信息表';

-- ----------------------------
-- Records of v_course
-- ----------------------------
INSERT INTO `v_course` VALUES ('1', '数学', '1');
INSERT INTO `v_course` VALUES ('2', '语文', '2');
INSERT INTO `v_course` VALUES ('3', '英语', '3');

-- ----------------------------
-- Table structure for v_node
-- ----------------------------
DROP TABLE IF EXISTS `v_node`;
CREATE TABLE `v_node` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '菜单名',
  `link_url` varchar(100) DEFAULT NULL COMMENT '链接url（控制器/方法名）',
  `fid` int(3) DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `icons` varchar(30) DEFAULT NULL COMMENT '图标',
  `sort` tinyint(1) DEFAULT '100' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='菜单表';

-- ----------------------------
-- Records of v_node
-- ----------------------------
INSERT INTO `v_node` VALUES ('5', '会员管理', 'Member', '0', '1', '1', '&#xe60d;', '6');
INSERT INTO `v_node` VALUES ('1', '管理员管理', '', '0', '1', '1', '&#xe62d;', '1');
INSERT INTO `v_node` VALUES ('4', '角色管理', 'Role/index', '1', '2', '1', null, '3');
INSERT INTO `v_node` VALUES ('3', '菜单管理', 'Node/index', '1', '2', '1', null, '2');
INSERT INTO `v_node` VALUES ('2', '管理员列表', 'Admin/index', '1', '2', '1', null, '1');

-- ----------------------------
-- Table structure for v_role
-- ----------------------------
DROP TABLE IF EXISTS `v_role`;
CREATE TABLE `v_role` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL COMMENT '角色名',
  `depict` varchar(200) DEFAULT NULL COMMENT '角色描述',
  `node_ids` varchar(200) DEFAULT NULL COMMENT '角色具备的权限ids',
  `status` tinyint(1) DEFAULT '1' COMMENT '1:正常；2:禁用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of v_role
-- ----------------------------
INSERT INTO `v_role` VALUES ('1', '超级管理员', '具备所有权限', '1,2,3,4,5,6,7,8,23,24,25,9,10,11,12,13,14,15,16,17,18,32,33,38,19,20,21,22,37,26,27,28,29,30,31,34,35,36,39,40,41,42,43', '1');
INSERT INTO `v_role` VALUES ('2', '会员管理员', '会员管理', '9,10,11,19,20,21,22', '1');

-- ----------------------------
-- Table structure for v_score
-- ----------------------------
DROP TABLE IF EXISTS `v_score`;
CREATE TABLE `v_score` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '成绩表主键值',
  `s_id` smallint(4) NOT NULL COMMENT '学生编号',
  `c_id` smallint(4) NOT NULL COMMENT '课程编号',
  `marks` smallint(4) NOT NULL COMMENT '成绩分数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='成绩信息表';

-- ----------------------------
-- Records of v_score
-- ----------------------------
INSERT INTO `v_score` VALUES ('1', '1', '1', '80');
INSERT INTO `v_score` VALUES ('2', '1', '2', '84');
INSERT INTO `v_score` VALUES ('3', '1', '3', '88');
INSERT INTO `v_score` VALUES ('4', '2', '1', '66');
INSERT INTO `v_score` VALUES ('5', '2', '2', '77');
INSERT INTO `v_score` VALUES ('6', '2', '3', '89');
INSERT INTO `v_score` VALUES ('7', '3', '1', '90');
INSERT INTO `v_score` VALUES ('8', '3', '2', '95');
INSERT INTO `v_score` VALUES ('9', '3', '3', '98');

-- ----------------------------
-- Table structure for v_students
-- ----------------------------
DROP TABLE IF EXISTS `v_students`;
CREATE TABLE `v_students` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '学生编号',
  `name` varchar(100) NOT NULL COMMENT '姓名',
  `birth` varchar(100) NOT NULL COMMENT '出生日期',
  `age` tinyint(1) NOT NULL COMMENT '年龄',
  `sex` tinyint(1) NOT NULL COMMENT '性别',
  `save_time` datetime DEFAULT NULL COMMENT '记录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='学生信息表';

-- ----------------------------
-- Records of v_students
-- ----------------------------
INSERT INTO `v_students` VALUES ('1', '赵一', '1990.10', '28', '1', '2018-04-01 14:08:18');
INSERT INTO `v_students` VALUES ('2', '钱二', '1991.10', '27', '2', '2018-04-26 14:08:18');
INSERT INTO `v_students` VALUES ('3', '孙三', '1992.10', '26', '1', '2018-04-12 14:08:18');
INSERT INTO `v_students` VALUES ('4', '李四', '1993.10', '25', '1', '2018-03-30 14:08:18');
INSERT INTO `v_students` VALUES ('5', '王五', '1994.10', '24', '2', '2018-06-22 14:08:18');
INSERT INTO `v_students` VALUES ('6', '刘六', '1995.10', '23', '2', '2018-04-12 14:08:18');
INSERT INTO `v_students` VALUES ('7', '张七', '1996.10', '22', '2', '2018-08-30 14:08:18');
INSERT INTO `v_students` VALUES ('8', '范八', '1997.10', '21', '1', '2018-07-27 14:08:18');

-- ----------------------------
-- Table structure for v_teacher
-- ----------------------------
DROP TABLE IF EXISTS `v_teacher`;
CREATE TABLE `v_teacher` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '教师编号',
  `name` varchar(100) NOT NULL COMMENT '教师名称',
  `save_time` datetime DEFAULT NULL COMMENT '记录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='教师信息表';

-- ----------------------------
-- Records of v_teacher
-- ----------------------------
INSERT INTO `v_teacher` VALUES ('1', '张老师', '2018-09-21 15:10:04');
INSERT INTO `v_teacher` VALUES ('2', '李老师', '2018-09-20 15:10:52');
INSERT INTO `v_teacher` VALUES ('3', '王老师', '2018-09-19 15:10:59');

-- ----------------------------
-- Table structure for v_users
-- ----------------------------
DROP TABLE IF EXISTS `v_users`;
CREATE TABLE `v_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `phone` bigint(11) NOT NULL COMMENT '手机号（登录账户）',
  `password` char(32) NOT NULL COMMENT '密码（登录密码）',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态（1：正常； 2：禁用；）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v_users
-- ----------------------------
INSERT INTO `v_users` VALUES ('1', '18762816871', 'c78b6663d47cfbdb4d65ea51c104044e', '2018-11-05 14:52:20', '1');
INSERT INTO `v_users` VALUES ('2', '18762816873', 'c78b6663d47cfbdb4d65ea51c104044e', '2018-11-05 15:08:03', '1');
INSERT INTO `v_users` VALUES ('3', '18759596969', 'c78b6663d47cfbdb4d65ea51c104044e', '2018-11-05 15:53:49', '1');
INSERT INTO `v_users` VALUES ('4', '18762816872', 'c78b6663d47cfbdb4d65ea51c104044e', '2019-02-19 07:44:59', '1');
INSERT INTO `v_users` VALUES ('5', '18762816873', 'c78b6663d47cfbdb4d65ea51c104044e', '2019-02-19 09:50:00', '1');
INSERT INTO `v_users` VALUES ('6', '18762816875', 'c78b6663d47cfbdb4d65ea51c104044e', '2019-02-19 09:52:16', '1');
INSERT INTO `v_users` VALUES ('7', '18762816877', 'c78b6663d47cfbdb4d65ea51c104044e', '2019-02-19 09:53:43', '1');
INSERT INTO `v_users` VALUES ('8', '18762816879', '7402845c089600619714b20413e8e5d0', '2019-02-19 10:00:05', '1');
