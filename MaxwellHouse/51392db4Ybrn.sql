/*
Navicat MySQL Data Transfer

Source Server         : 121.40.34.175_3306
Source Server Version : 50527
Source Host           : 121.40.34.175:3306
Source Database       : 51392db4Ybrn

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2018-06-19 15:37:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `region` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` char(11) NOT NULL,
  `status` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('4', '1', '请问', '请问', '特务', '2147483647', '1');
INSERT INTO `address` VALUES ('10', '1', '去瞧瞧', 'QQ群', '亲亲我', '13435123180', '0');
INSERT INTO `address` VALUES ('11', '1', '请问企鹅', '请问企鹅', '气温气温', '13435123180', '0');
INSERT INTO `address` VALUES ('12', '1', '请问企鹅', '请问企鹅', '气温气温', '13435123180', '0');
INSERT INTO `address` VALUES ('13', '1', '请问', '奇热', '七二七王', '13435123180', '1');
INSERT INTO `address` VALUES ('14', '1', '著作中', '广东省韶关市', '曲江中学', '13435123180', '1');
INSERT INTO `address` VALUES ('15', '4', '龙先生', '广东省韶关市曲江区', '502嚼碎', '13435123180', '1');
INSERT INTO `address` VALUES ('16', '4', '著作中', '组织者组织著作中', '撒地方撒撒饿死大大实打实大苏打实打实大苏打啊大苏打实打实大苏打阿迪斯打撒打撒打撒十大', '13435123180', '1');
INSERT INTO `address` VALUES ('17', '4', '驻扎在', '主张组合在', '主张租住种族或组织猪猪猪租住种族和', '13435123180', '0');
INSERT INTO `address` VALUES ('18', '6', '林先生', '上海', '上海市嘉定区金园三路388号666', '13068736009', '0');
INSERT INTO `address` VALUES ('19', '6', '好看', '好几款', '好几款', '13068736009', '0');
INSERT INTO `address` VALUES ('20', '7', '阿萨德', '安徽', '阿萨德阿萨德', '13524524552', '0');

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `admin_account` varchar(18) NOT NULL,
  `admin_password` char(32) DEFAULT NULL,
  `admin_sex` tinyint(3) NOT NULL,
  `admin_phone` char(11) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `statu` tinyint(3) NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('5', '超级管理员', 'q1095395035', '3a5bb27c88dc60149858d82b04a224a5', '0', '13435123180', '123@qq.com', '1', '1526990314', '1528298621');
INSERT INTO `admin` VALUES ('9', '差评哥', 'qwe123123', '3a5bb27c88dc60149858d82b04a224a5', '0', '13435123180', '1095395035@qq.com', '0', '1528288268', '1528302361');
INSERT INTO `admin` VALUES ('10', '奥赛德', 'q123123123', '3a5bb27c88dc60149858d82b04a224a5', '1', '13435123180', '123@qq.com', '0', '1528300620', '1528300620');
INSERT INTO `admin` VALUES ('12', '阿萨德的', 'asdasd111', 'aa4a84207952a4ea721cb50e565a1e76', '1', '13524524552', 'asd@qq.com', '1', '1529370756', '1529370756');

-- ----------------------------
-- Table structure for attribute
-- ----------------------------
DROP TABLE IF EXISTS `attribute`;
CREATE TABLE `attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attribute
-- ----------------------------
INSERT INTO `attribute` VALUES ('7', '特浓30条（390克/盒）');
INSERT INTO `attribute` VALUES ('8', '特浓60条（780克/盒）');
INSERT INTO `attribute` VALUES ('9', '特浓90条（1170克/盒）');
INSERT INTO `attribute` VALUES ('10', '原味30条（390克/盒）');
INSERT INTO `attribute` VALUES ('11', '原味60条（780克/盒）');
INSERT INTO `attribute` VALUES ('13', '原味90条（1170克/盒）');
INSERT INTO `attribute` VALUES ('14', '香菜味30条（390克/盒）');
INSERT INTO `attribute` VALUES ('15', '香菜味60条（780克/盒）');
INSERT INTO `attribute` VALUES ('16', '香菜味90条（1170克/盒）');
INSERT INTO `attribute` VALUES ('17', 'fgh');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `create_time` int(10) NOT NULL,
  `statu` tinyint(3) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '/static/img/banner/20180531\\321a27de30078d9fa251eeb430b23230.jpg', '1527760375', '1', '1528285219');
INSERT INTO `banner` VALUES ('2', '/static/img/banner/20180619/80c7a8a61de1499444f34d3e89738a33.jpg', '1527760380', '1', '1529380033');
INSERT INTO `banner` VALUES ('3', '/static/img/banner/20180531\\050bffaba12ff120c7d36787ce5421b0.jpg', '1527760385', '1', '1527760397');

-- ----------------------------
-- Table structure for classify
-- ----------------------------
DROP TABLE IF EXISTS `classify`;
CREATE TABLE `classify` (
  `classify_id` int(11) NOT NULL AUTO_INCREMENT,
  `classify_pid` int(11) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `classify_level` int(11) NOT NULL,
  `classify_path` varchar(50) NOT NULL,
  PRIMARY KEY (`classify_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classify
-- ----------------------------
INSERT INTO `classify` VALUES ('1', '0', '咖啡分类', '1', '0,1');
INSERT INTO `classify` VALUES ('2', '0', '咖啡口味', '1', '0,2');
INSERT INTO `classify` VALUES ('3', '0', '是否含咖啡因', '1', '0,3');
INSERT INTO `classify` VALUES ('5', '0', '是否含糖', '1', '0,5');
INSERT INTO `classify` VALUES ('6', '0', '包装单位', '1', '0,6');
INSERT INTO `classify` VALUES ('7', '1', '速溶咖啡', '2', '0,1,7');
INSERT INTO `classify` VALUES ('8', '1', '咖啡豆', '2', '0,1,8');
INSERT INTO `classify` VALUES ('9', '1', '咖啡粉', '2', '0,1,9');
INSERT INTO `classify` VALUES ('10', '1', '其它', '2', '0,1,10');
INSERT INTO `classify` VALUES ('11', '2', '原味咖啡', '2', '0,2,11');
INSERT INTO `classify` VALUES ('12', '2', '特浓咖啡', '2', '0,2,12');
INSERT INTO `classify` VALUES ('13', '2', '黑咖啡', '2', '0,2,13');
INSERT INTO `classify` VALUES ('14', '2', '摩卡咖啡', '2', '0,2,14');
INSERT INTO `classify` VALUES ('15', '2', '拿铁咖啡', '2', '0,2,15');
INSERT INTO `classify` VALUES ('16', '2', '白咖啡', '2', '0,2,16');
INSERT INTO `classify` VALUES ('17', '2', '卡布奇诺', '2', '0,2,17');
INSERT INTO `classify` VALUES ('18', '2', '其它', '2', '0,2,18');
INSERT INTO `classify` VALUES ('19', '3', '含咖啡因', '2', '0,3,19');
INSERT INTO `classify` VALUES ('20', '3', '低咖啡因', '2', '0,3,20');
INSERT INTO `classify` VALUES ('21', '3', '无咖啡因', '2', '0,3,21');
INSERT INTO `classify` VALUES ('40', '5', '无糖', '2', '0,5,40');
INSERT INTO `classify` VALUES ('41', '5', '有糖', '2', '0,5,41');
INSERT INTO `classify` VALUES ('42', '5', '其它', '2', '0,5,42');
INSERT INTO `classify` VALUES ('43', '6', '袋装', '2', '0,6,43');
INSERT INTO `classify` VALUES ('44', '6', '盒装', '2', '0,6,44');
INSERT INTO `classify` VALUES ('45', '6', '罐装', '2', '0,6,45');
INSERT INTO `classify` VALUES ('48', '3', '其它', '2', '0,3,48');
INSERT INTO `classify` VALUES ('49', '6', '其它', '2', '0,6,49');

-- ----------------------------
-- Table structure for exhibition
-- ----------------------------
DROP TABLE IF EXISTS `exhibition`;
CREATE TABLE `exhibition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `number` int(6) NOT NULL,
  `path` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `content` text NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  `title` tinyint(3) NOT NULL,
  `statu` tinyint(3) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `statu` (`statu`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of exhibition
-- ----------------------------
INSERT INTO `exhibition` VALUES ('1', '蓝山咖啡', '223892', '/static/img/exhibition/20180601\\ffcd6a3d4416d0cb5284b39e06484c72.png', '蓝山咖啡，是指由产自牙买加蓝山的咖啡豆冲泡而成的咖啡。', '蓝山咖啡，是指由产自牙买加蓝山的咖啡豆冲泡而成的咖啡。其中依档次又分为牙买加蓝山咖啡和牙买加高山咖啡。蓝山山脉位于牙买加岛（Jamaica） 东部，因该山在加勒比海的环绕下，每当天气晴朗的日子，太阳直射在蔚蓝的海面上，山峰上反射出海水璀璨的蓝色光芒，故而得名。', '1527836897', '1528888751', '1', '1', '123.00');
INSERT INTO `exhibition` VALUES ('2', '卡布奇诺', '223892', '/static/img/exhibition/20180601\\f3429ae121786bad27d70773f8de501c.png', '卡布奇诺是一种加入以同量的意大利特浓咖啡和蒸汽泡沫牛奶相混合的意大利咖啡。', '卡布奇诺是一种加入以同量的意大利特浓咖啡和蒸汽泡沫牛奶相混合的意大利咖啡。此时咖啡的颜色，就像卡布奇诺教会的修士在深褐色的外衣上覆上一条头巾一样，咖啡因此得名。传统的卡布奇诺咖啡是三分之一浓缩咖啡，三分之一蒸汽牛奶和三分之一泡沫牛奶，并在上面撒上小颗粒的肉桂粉末。', '1527836952', '1528888758', '1', '1', '123.00');
INSERT INTO `exhibition` VALUES ('3', '摩卡', '223892', '/static/img/exhibition/20180601\\0a9f8f202295b9d810c6401d7ed2951d.png', '摩卡是一种最古老的咖啡，其历史要追溯到咖啡的起源。', '摩卡是一种最古老的咖啡，其历史要追溯到咖啡的起源。它是由意大利浓缩咖啡、巧克力酱、鲜奶油和牛奶混合而成，摩卡得名于有名的摩卡港。十五世纪，整个中东非咖啡国家向外运输业不兴盛，也门摩卡是当时红海附近主要输出一个商港，当时咖啡主要是集中到摩卡港再向外输出的非洲咖啡，都被统称摩卡咖啡。', '1527837011', '1528888763', '1', '1', '123.00');
INSERT INTO `exhibition` VALUES ('4', '卡布奇诺', '223892', '/static/img/exhibition/20180601\\1c45cc3a44476d35cf7a227d5589b718.png', '123', '123', '1527837061', '1528888772', '2', '1', '123.00');
INSERT INTO `exhibition` VALUES ('5', '拿铁', '223892', '/static/img/exhibition/20180601\\2ba0d46dc4e08cd6b862ff127bd30c49.png', '123', '123', '1527837101', '1528888777', '2', '1', '123.00');
INSERT INTO `exhibition` VALUES ('6', '蓝山', '223892', '/static/img/exhibition/20180601\\3156aa377a58407099c9483ae2aea7fc.png', '1', '1', '1527837151', '1528888783', '2', '1', '123.00');
INSERT INTO `exhibition` VALUES ('7', '摩卡', '223892', '/static/img/exhibition/20180601\\ea3a07940a78f3c3ab652599ed0924ff.png', '1', '1', '1527837180', '1528888788', '2', '1', '123.00');
INSERT INTO `exhibition` VALUES ('8', '摩卡咖啡', '651644', '/static/img/exhibition/20180601\\10f34a50bb99c4f48e3f9ffe6ec74ba8.png', '摩卡咖啡（CafeMocha）是一种最古老的咖啡，其历史要追溯到咖啡的起源。它是由意大利浓缩咖啡、巧克力酱、鲜奶油和牛奶混合而成，摩卡得名于有名的摩卡港。', '摩卡咖啡（CafeMocha）是一种最古老的咖啡，其历史要追溯到咖啡的起源。它是由意大利浓缩咖啡、巧克力酱、鲜奶油和牛奶混合而成，摩卡得名于有名的摩卡港。', '1527837416', '1527837416', '3', '0', '123.00');
INSERT INTO `exhibition` VALUES ('9', '摩卡', '223892', '/static/img/exhibition/20180601\\68b9b73dfd981ba989216c7a9ce4ff6e.png', '摩卡咖啡（CafeMocha）是一种最古老的咖啡，其历史要追溯到咖啡的起源。它是由意大利浓缩咖啡、巧克力酱、鲜奶油和牛奶混合而成，摩卡得名于有名的摩卡港。', '<p>摩卡咖啡（又名莫加或者摩卡（音译），又意译为阿拉伯优质咖啡，英文是 Café Mocha，意思是巧克力咖啡）是意式拿铁咖啡 (Café Latté) 的变种。</p><p>和经典的意式拿铁咖啡一样，它通常是由三分之一的意式特浓咖啡(Caffè Espresso) 和三分之二的奶沫配成，不过它还会加入少量巧克力。</p><p>巧克力通常会以巧克力糖浆的形式添加，但某些咖啡售卖系统便会以即溶巧克力粉取代。有时，打起了的奶油、可可粉，和绵花糖都会加在上面用来加重咖啡的香味和作为装饰之用。 和意式卡布奇诺(Cappuccino) 不一样，摩卡咖啡上面是没有鲜奶泡沫的。取而代之，摩卡咖啡上面通常是一些打起了的奶油和肉桂粉或者可可粉其中之一。也有可能加入葵蜜饯粉在表面作为装饰并且增加风味。</p><p>有种摩卡的变种是白摩卡咖啡 (White Café Mocha)，用白巧克力代替牛奶和黑巧克力。除了白摩卡咖啡之外，还有一些变种是用两种巧克力糖浆混合，它们有时被称为“斑马”（Zebras），也有时会被滑稽地叫作“燕尾服摩卡”（Tuxedo Mocha）。</p>', '1527837536', '1528888803', '3', '1', '123.00');
INSERT INTO `exhibition` VALUES ('10', '卡布奇诺', '223892', '/static/img/exhibition/20180601\\d7b29946a2f32ca252536ca47b6416f8.png', '1', '卡布奇诺是一种加入以同量的意大利特浓咖啡和蒸汽泡沫牛奶相混合的意大利咖啡。此时咖啡的颜色，就像卡布奇诺教会的修士在深褐色的外衣上覆上一条头巾一样，咖啡因此得名。传统的卡布奇诺咖啡是三分之一浓缩咖啡，三分之一蒸汽牛奶和三分之一泡沫牛奶，并在上面撒上小颗粒的肉桂粉末。', '1527837694', '1528888798', '4', '1', '123.00');
INSERT INTO `exhibition` VALUES ('11', '123', '223892', '/static/img/exhibition/20180601\\a388e03f8c319e82517594153de0a7f0.png', '1', '1', '1527837731', '1528888808', '4', '1', '123.00');
INSERT INTO `exhibition` VALUES ('12', '卡布奇诺', '223892', '/static/img/exhibition/20180601\\de8ea60d4c7321f1164409c37cdbb0c6.png', '1', '1', '1527837760', '1528888812', '4', '1', '123.00');
INSERT INTO `exhibition` VALUES ('13', '卡布奇诺', '223892', '/static/img/exhibition/20180601\\6b155f9a47ce33733c0a9e3ac36cac23.png', '1', '1', '1527837784', '1528888816', '4', '1', '123.00');
INSERT INTO `exhibition` VALUES ('14', '卡布奇诺', '223892', '/static/img/exhibition/20180601\\d4f864aca12d71dd53506a35f7d8b5f7.png', '1', '1', '1527837813', '1528888826', '4', '1', '123.00');
INSERT INTO `exhibition` VALUES ('15', '卡布奇诺', '223892', '/static/img/exhibition/20180601\\f5105199166773be05aed745d47fb32d.png', '1', '1', '1527837835', '1528888829', '4', '1', '123.00');
INSERT INTO `exhibition` VALUES ('16', '1231223', '222488', '/static/img/exhibition/20180601\\9e39abfeb7a34993b4201c901765f107.png', '123', '213', '1527838102', '1528254761', '4', '0', '11.00');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_pid` int(11) NOT NULL,
  `menu_name` varchar(20) NOT NULL,
  `statu` tinyint(3) NOT NULL,
  `controller` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('6', '0', '图片管理', '1', 'index', 'index');
INSERT INTO `menu` VALUES ('7', '0', '产品管理', '1', 'index', 'index');
INSERT INTO `menu` VALUES ('8', '0', '评论管理', '1', 'index', 'index');
INSERT INTO `menu` VALUES ('9', '0', '会员管理', '1', 'index', 'index');
INSERT INTO `menu` VALUES ('10', '0', '管理员管理', '1', 'index', 'index');
INSERT INTO `menu` VALUES ('12', '0', '系统管理', '1', 'index', 'index');
INSERT INTO `menu` VALUES ('14', '6', '图片管理', '0', 'index', 'index');
INSERT INTO `menu` VALUES ('15', '7', '系列管理', '1', 'Seriess', 'index');
INSERT INTO `menu` VALUES ('16', '7', '分类管理', '1', 'Classifys', 'index');
INSERT INTO `menu` VALUES ('17', '7', '产品管理', '1', 'Products', 'index');
INSERT INTO `menu` VALUES ('18', '8', '评论列表', '1', 'Comment', 'index');
INSERT INTO `menu` VALUES ('19', '8', '意见反馈', '0', 'index', 'index');
INSERT INTO `menu` VALUES ('20', '9', '会员列表', '1', 'Users', 'index');
INSERT INTO `menu` VALUES ('21', '9', '等级管理', '0', 'index', 'index');
INSERT INTO `menu` VALUES ('22', '10', '角色管理', '1', 'Roles', 'index');
INSERT INTO `menu` VALUES ('24', '10', '管理员列表', '1', 'Admins', 'index');
INSERT INTO `menu` VALUES ('30', '7', '属性管理', '1', 'Attributes', 'index');
INSERT INTO `menu` VALUES ('31', '12', '菜单管理', '1', 'Menus', 'index');
INSERT INTO `menu` VALUES ('33', '0', '展示管理', '1', 'index', 'index');
INSERT INTO `menu` VALUES ('34', '33', '首页展示', '1', 'Exhibitions', 'index');
INSERT INTO `menu` VALUES ('35', '6', '水印管理', '1', 'Waters', 'index');
INSERT INTO `menu` VALUES ('36', '33', 'banner管理', '1', 'Banners', 'index');
INSERT INTO `menu` VALUES ('37', '33', '底部展示', '0', 'Footers', 'index');
INSERT INTO `menu` VALUES ('38', '9', '订单列表', '1', 'Orders', 'index');

-- ----------------------------
-- Table structure for order_deliver
-- ----------------------------
DROP TABLE IF EXISTS `order_deliver`;
CREATE TABLE `order_deliver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_goods_id` int(11) NOT NULL,
  `company` varchar(30) NOT NULL,
  `express` varchar(255) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_goods_id` (`order_goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_deliver
-- ----------------------------
INSERT INTO `order_deliver` VALUES ('1', '0', '1', '12', '1528787343');
INSERT INTO `order_deliver` VALUES ('2', '1', '123', '123', '1528787368');
INSERT INTO `order_deliver` VALUES ('3', '20', '213', '123123', '1528870018');
INSERT INTO `order_deliver` VALUES ('4', '19', '123124', '12312312', '1528870087');
INSERT INTO `order_deliver` VALUES ('5', '22', 'sdags2', '1234124124', '1528874225');
INSERT INTO `order_deliver` VALUES ('6', '24', '213', '21312312', '1528881008');
INSERT INTO `order_deliver` VALUES ('7', '23', 'erwrwqe', '123412412421', '1528881356');
INSERT INTO `order_deliver` VALUES ('8', '21', '43523', '32523432', '1528881368');
INSERT INTO `order_deliver` VALUES ('9', '18', '圆通快递', '123123', '1528881383');
INSERT INTO `order_deliver` VALUES ('10', '26', '123123', '12312312', '1528955232');
INSERT INTO `order_deliver` VALUES ('11', '27', '123123', '12312312312312', '1528955929');
INSERT INTO `order_deliver` VALUES ('12', '34', '京东', '65552326552', '1528967809');
INSERT INTO `order_deliver` VALUES ('13', '35', '韵达', '9637595329', '1528969099');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `roder_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_goods_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_path` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `product_original_price` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `product_count` int(11) NOT NULL,
  PRIMARY KEY (`roder_detail_id`),
  KEY `order_goods_id` (`order_goods_id`),
  KEY `product_id` (`product_id`),
  KEY `attribute_id` (`attribute_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_detail
-- ----------------------------
INSERT INTO `order_detail` VALUES ('1', '1', '22', '/static/img/public/15282756842920.png', '麦芽咖啡原味30条（390克/盒）', '1231.00', '10', '123.10', '8617.00', '7');
INSERT INTO `order_detail` VALUES ('2', '2', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '492.00', '4');
INSERT INTO `order_detail` VALUES ('3', '2', '22', '/static/img/public/15282756842920.png', '麦芽咖啡原味30条（390克/盒）', '1231.00', '10', '123.10', '8617.00', '7');
INSERT INTO `order_detail` VALUES ('4', '3', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓30条（390克/盒）', '456.00', '7', '123.00', '2280.00', '5');
INSERT INTO `order_detail` VALUES ('5', '3', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓60条（780克/盒）', '56.00', '8', '7865.00', '392.00', '7');
INSERT INTO `order_detail` VALUES ('6', '3', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓90条（1170克/盒）', '43.00', '9', '56745.00', '86.00', '2');
INSERT INTO `order_detail` VALUES ('7', '3', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味30条（390克/盒）', '33.00', '10', '4567.00', '33.00', '1');
INSERT INTO `order_detail` VALUES ('8', '4', '60', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('9', '5', '55', '/static/img/public/15282756842920.png', '麦芽咖啡原味90条（1170克/盒）', '1221.00', '12', '4361.00', '1221.00', '1');
INSERT INTO `order_detail` VALUES ('10', '6', '53', '/static/img/public/15282760468877.png', '雀巢咖啡特浓30条（390克/盒）', '123.00', '7', '1223.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('11', '7', '41', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味60条（780克/盒）', '543.00', '11', '123.00', '543.00', '1');
INSERT INTO `order_detail` VALUES ('12', '8', '10', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓90条（1170克/盒）', '43.00', '9', '56745.00', '43.00', '1');
INSERT INTO `order_detail` VALUES ('13', '9', '21', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味90条（1170克/盒）', '343.00', '12', '4563.00', '343.00', '1');
INSERT INTO `order_detail` VALUES ('14', '10', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('15', '11', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('16', '12', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('17', '13', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('18', '14', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('19', '15', '60', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('20', '16', '60', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('21', '17', '60', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('22', '18', '60', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('23', '19', '60', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('24', '20', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓30条（390克/盒）', '456.00', '7', '123.00', '456.00', '1');
INSERT INTO `order_detail` VALUES ('25', '21', '60', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('26', '22', '39', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓30条（390克/盒）', '456.00', '7', '123.00', '456.00', '1');
INSERT INTO `order_detail` VALUES ('27', '22', '39', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓60条（780克/盒）', '56.00', '8', '7865.00', '56.00', '1');
INSERT INTO `order_detail` VALUES ('28', '22', '39', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓90条（1170克/盒）', '43.00', '9', '56745.00', '43.00', '1');
INSERT INTO `order_detail` VALUES ('29', '22', '39', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味30条（390克/盒）', '33.00', '10', '4567.00', '33.00', '1');
INSERT INTO `order_detail` VALUES ('30', '22', '39', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味90条（1170克/盒）', '343.00', '12', '4563.00', '343.00', '1');
INSERT INTO `order_detail` VALUES ('31', '22', '39', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味60条（780克/盒）', '543.00', '11', '123.00', '543.00', '1');
INSERT INTO `order_detail` VALUES ('32', '22', '32', '/static/img/public/15282760468877.png', '雀巢咖啡特浓30条（390克/盒）', '123.00', '7', '1223.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('33', '22', '32', '/static/img/public/15282760468877.png', '雀巢咖啡原味90条（1170克/盒）', '453.00', '12', '87956.00', '453.00', '1');
INSERT INTO `order_detail` VALUES ('34', '22', '32', '/static/img/public/15282760468877.png', '雀巢咖啡原味60条（780克/盒）', '545.00', '11', '67867.00', '545.00', '1');
INSERT INTO `order_detail` VALUES ('35', '22', '32', '/static/img/public/15282760468877.png', '雀巢咖啡原味30条（390克/盒）', '323.00', '10', '3422.00', '323.00', '1');
INSERT INTO `order_detail` VALUES ('36', '22', '32', '/static/img/public/15282760468877.png', '雀巢咖啡特浓60条（780克/盒）', '234.00', '8', '547456.00', '234.00', '1');
INSERT INTO `order_detail` VALUES ('37', '22', '32', '/static/img/public/15282760468877.png', '雀巢咖啡特浓90条（1170克/盒）', '53.00', '9', '523235.00', '53.00', '1');
INSERT INTO `order_detail` VALUES ('38', '22', '59', '/static/img/public/15282760468877.png', '雀巢咖啡特浓30条（390克/盒）', '123.00', '7', '1223.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('39', '22', '59', '/static/img/public/15282760468877.png', '雀巢咖啡原味60条（780克/盒）', '545.00', '11', '67867.00', '545.00', '1');
INSERT INTO `order_detail` VALUES ('40', '23', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('41', '24', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('42', '25', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '738.00', '6');
INSERT INTO `order_detail` VALUES ('43', '26', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('44', '27', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓30条（390克/盒）', '456.00', '7', '123.00', '912.00', '2');
INSERT INTO `order_detail` VALUES ('45', '27', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味30条（390克/盒）', '33.00', '10', '4567.00', '132.00', '4');
INSERT INTO `order_detail` VALUES ('46', '27', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味90条（1170克/盒）', '343.00', '12', '4563.00', '1029.00', '3');
INSERT INTO `order_detail` VALUES ('47', '28', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓30条（390克/盒）', '456.00', '7', '123.00', '456.00', '1');
INSERT INTO `order_detail` VALUES ('48', '29', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('49', '30', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓30条（390克/盒）', '456.00', '7', '123.00', '41040.00', '90');
INSERT INTO `order_detail` VALUES ('50', '30', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓60条（780克/盒）', '56.00', '8', '7865.00', '5488.00', '98');
INSERT INTO `order_detail` VALUES ('51', '31', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡特浓30条（390克/盒）', '456.00', '7', '123.00', '456.00', '1');
INSERT INTO `order_detail` VALUES ('52', '32', '56', '/static/img/public/15282760468877.png', '雀巢咖啡特浓90条（1170克/盒）', '53.00', '9', '523235.00', '53.00', '1');
INSERT INTO `order_detail` VALUES ('53', '32', '56', '/static/img/public/15282760468877.png', '雀巢咖啡原味30条（390克/盒）', '323.00', '10', '3422.00', '646.00', '2');
INSERT INTO `order_detail` VALUES ('54', '32', '56', '/static/img/public/15282760468877.png', '雀巢咖啡原味60条（780克/盒）', '545.00', '11', '67867.00', '1090.00', '2');
INSERT INTO `order_detail` VALUES ('55', '33', '56', '/static/img/public/15282760468877.png', '雀巢咖啡原味30条（390克/盒）', '323.00', '10', '3422.00', '323.00', '1');
INSERT INTO `order_detail` VALUES ('56', '34', '56', '/static/img/public/15282760468877.png', '雀巢咖啡特浓30条（390克/盒）', '123.00', '7', '1223.00', '246.00', '2');
INSERT INTO `order_detail` VALUES ('57', '35', '22', '/static/img/public/15282756842920.png', '麦芽咖啡特浓30条（390克/盒）', '123.00', '7', '665.00', '123.00', '1');
INSERT INTO `order_detail` VALUES ('58', '36', '59', '/static/img/public/15293706564627.png', '阿萨德阿萨德特浓60条（780克/盒）', '121.00', '8', '111.00', '847.00', '7');
INSERT INTO `order_detail` VALUES ('59', '36', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味30条（390克/盒）', '33.00', '10', '4567.00', '165.00', '5');
INSERT INTO `order_detail` VALUES ('60', '37', '59', '/static/img/public/15293706564627.png', '阿萨德阿萨德特浓60条（780克/盒）', '121.00', '8', '111.00', '847.00', '7');
INSERT INTO `order_detail` VALUES ('61', '37', '36', '/static/img/public/15282759447482.png', '麦斯威尔咖啡原味30条（390克/盒）', '33.00', '10', '4567.00', '165.00', '5');

-- ----------------------------
-- Table structure for order_goods
-- ----------------------------
DROP TABLE IF EXISTS `order_goods`;
CREATE TABLE `order_goods` (
  `order_goods_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_no` char(24) NOT NULL,
  `order_status` tinyint(3) NOT NULL,
  `amount_total` decimal(10,2) NOT NULL,
  `address_id` int(11) NOT NULL,
  `pay_channel` tinyint(3) NOT NULL,
  `create_time` int(10) NOT NULL,
  `pay_time` int(10) NOT NULL,
  `deliver_goods_time` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_settlement_time` int(10) NOT NULL,
  `words` text NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_path` varchar(255) NOT NULL,
  PRIMARY KEY (`order_goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_goods
-- ----------------------------
INSERT INTO `order_goods` VALUES ('1', '201806101805509613555920', '1', '8617.00', '10', '0', '1528625150', '0', '0', '1', '0', '奥赛德', '麦芽咖啡原味30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('2', '201806101806063752624527', '1', '9109.00', '13', '0', '1528625166', '0', '0', '1', '0', '国际化', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('3', '201806111416252276062037', '2', '2791.00', '4', '0', '1528697785', '0', '0', '1', '0', 'asd', '麦斯威尔咖啡特浓30条（390克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('4', '201806111441208689880319', '4', '123.00', '4', '0', '1528699280', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('5', '201806111441334245361337', '5', '1221.00', '12', '0', '1528699293', '0', '0', '1', '0', '', '麦芽咖啡原味90条（1170克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('6', '201806111441463207153337', '6', '123.00', '13', '0', '1528699306', '0', '0', '1', '0', '', '雀巢咖啡特浓30条（390克/盒）', '/static/img/public/15282760468877.png');
INSERT INTO `order_goods` VALUES ('7', '201806111442028072448728', '7', '543.00', '10', '0', '1528699322', '0', '0', '1', '0', '', '麦斯威尔咖啡原味60条（780克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('8', '201806111442168823089520', '0', '43.00', '10', '0', '1528699336', '0', '0', '1', '0', '', '麦斯威尔咖啡特浓90条（1170克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('9', '201806111442312240081742', '0', '343.00', '13', '0', '1528699351', '0', '0', '1', '0', '', '麦斯威尔咖啡原味90条（1170克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('10', '201806112014523386230438', '1', '123.00', '11', '0', '1528719292', '0', '0', '1', '0', '123', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('11', '201806112015422808074929', '0', '123.00', '11', '0', '1528719342', '0', '0', '1', '0', '123', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('12', '201806112018511732238731', '0', '123.00', '11', '0', '1528719531', '0', '0', '1', '0', '123', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('13', '201806112019545353881819', '0', '123.00', '11', '0', '1528719594', '0', '0', '1', '0', '123', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('14', '201806112034065349487323', '0', '123.00', '11', '0', '1528720446', '0', '0', '1', '0', '123', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('15', '201806121519453362609818', '0', '123.00', '4', '0', '1528787985', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('16', '201806121631101446044936', '1', '123.00', '4', '0', '1528792270', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('17', '201806121641145209136928', '1', '123.00', '4', '0', '1528792874', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('18', '201806121704296576110823', '2', '123.00', '4', '0', '1528794269', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('19', '201806121734123357116630', '3', '123.00', '4', '0', '1528796052', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('20', '201806121920588272949212', '3', '456.00', '14', '0', '1528802458', '0', '0', '1', '0', '', '麦斯威尔咖啡特浓30条（390克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('21', '201806131414497676391611', '2', '123.00', '11', '0', '1528870489', '0', '0', '1', '0', 'asd', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('22', '201806131516302241729729', '4', '3873.00', '11', '0', '1528874190', '0', '0', '1', '0', 'asfs', '麦斯威尔咖啡特浓30条（390克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('23', '201806131606444193450923', '4', '123.00', '10', '0', '1528877204', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('24', '201806131709307314392030', '4', '123.00', '11', '0', '1528880970', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('25', '201806141137323307128928', '1', '738.00', '15', '0', '1528947452', '0', '0', '4', '0', '劳资不要咖啡', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('26', '201806141139143535919123', '4', '123.00', '15', '0', '1528947554', '0', '0', '4', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('27', '201806141356493866607608', '4', '2073.00', '17', '0', '1528955809', '0', '0', '4', '0', '', '麦斯威尔咖啡特浓30条（390克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('28', '201806141414594518371520', '1', '456.00', '10', '0', '1528956899', '0', '0', '1', '0', '', '麦斯威尔咖啡特浓30条（390克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('29', '201806141429501980529716', '1', '123.00', '10', '0', '1528957790', '0', '0', '1', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('30', '201806141641133758986214', '1', '46528.00', '10', '0', '1528965673', '0', '0', '1', '0', '', '麦斯威尔咖啡特浓30条（390克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('31', '201806141645343729074122', '1', '456.00', '10', '0', '1528965934', '0', '0', '1', '0', '', '麦斯威尔咖啡特浓30条（390克/盒）', '/static/img/public/15282759447482.png');
INSERT INTO `order_goods` VALUES ('32', '201806141707375800871123', '0', '1789.00', '18', '0', '1528967257', '0', '0', '6', '0', '', '雀巢咖啡特浓90条（1170克/盒）', '/static/img/public/15282760468877.png');
INSERT INTO `order_goods` VALUES ('33', '201806141709404705479813', '0', '323.00', '18', '0', '1528967380', '0', '0', '6', '0', '', '雀巢咖啡原味30条（390克/盒）', '/static/img/public/15282760468877.png');
INSERT INTO `order_goods` VALUES ('34', '201806141713254401244832', '4', '246.00', '18', '0', '1528967605', '0', '0', '6', '0', '', '雀巢咖啡特浓30条（390克/盒）', '/static/img/public/15282760468877.png');
INSERT INTO `order_goods` VALUES ('35', '201806141736575447591113', '4', '123.00', '18', '0', '1528969017', '0', '0', '6', '0', '', '麦芽咖啡特浓30条（390克/盒）', '/static/img/public/15282756842920.png');
INSERT INTO `order_goods` VALUES ('36', '201806190919439221742119', '0', '1012.00', '20', '0', '1529371183', '0', '0', '7', '0', '', '阿萨德阿萨德特浓60条（780克/盒）', '/static/img/public/15293706564627.png');
INSERT INTO `order_goods` VALUES ('37', '201806190919512845196211', '0', '1012.00', '20', '0', '1529371191', '0', '0', '7', '0', '', '阿萨德阿萨德特浓60条（780克/盒）', '/static/img/public/15293706564627.png');

-- ----------------------------
-- Table structure for order_returns
-- ----------------------------
DROP TABLE IF EXISTS `order_returns`;
CREATE TABLE `order_returns` (
  `order_returns_id` int(11) NOT NULL AUTO_INCREMENT,
  `returns_no` char(24) NOT NULL,
  `order_id` int(11) NOT NULL,
  `returns_amount` decimal(10,2) NOT NULL,
  `return_submit_time` int(10) NOT NULL,
  `handling_time` int(10) NOT NULL,
  PRIMARY KEY (`order_returns_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_returns
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `number` int(6) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `address` varchar(20) NOT NULL,
  `series` tinyint(3) NOT NULL,
  `classify` text NOT NULL,
  `attribute` text NOT NULL,
  `statu` tinyint(3) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `hotgoods` tinyint(3) NOT NULL,
  `hotfollow` tinyint(3) NOT NULL,
  `see` tinyint(3) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`),
  KEY `statu` (`statu`),
  KEY `hotgoods` (`hotgoods`),
  KEY `hotfollow` (`hotfollow`),
  KEY `see` (`see`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('4', '麦芽咖啡', '581247', '1.00', '广州', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528275768', '1528275768', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('5', '麦芽咖啡', '334811', '1.00', '广州', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528275784', '1528275785', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('11', '雀巢咖啡', '552817', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276076', '1528276077', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('12', '麦斯威尔咖啡', '251456', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276078', '1528276079', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('13', '麦芽咖啡', '935993', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276080', '1528276081', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('14', '雀巢咖啡', '141262', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276082', '1528276082', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('15', '麦斯威尔咖啡', '242607', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276084', '1528276084', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('16', '麦芽咖啡', '403387', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276086', '1528276087', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('17', '雀巢咖啡', '724991', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276088', '1528276089', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('18', '麦斯威尔咖啡', '624649', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276090', '1528276090', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('19', '麦芽咖啡', '794411', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276092', '1528276092', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('20', '雀巢咖啡', '541345', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276093', '1528276094', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('21', '麦斯威尔咖啡', '473653', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276095', '1528276095', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('22', '麦芽咖啡', '105980', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276098', '1528277916', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('23', '雀巢咖啡', '902201', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276100', '1528276100', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('24', '麦斯威尔咖啡', '133493', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276102', '1528276102', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('25', '麦芽咖啡', '606504', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276104', '1528276104', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('26', '雀巢咖啡', '809492', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276106', '1528276106', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('27', '麦斯威尔咖啡', '731662', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276107', '1528276107', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('28', '麦芽咖啡', '832638', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276110', '1528276110', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('29', '雀巢咖啡', '540198', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276110', '1528276111', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('30', '麦斯威尔咖啡', '764259', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276112', '1528276112', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('31', '麦芽咖啡', '657312', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276114', '1528276115', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('32', '雀巢咖啡', '376218', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276116', '1528276117', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('33', '麦斯威尔咖啡', '660498', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276117', '1528276118', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('34', '麦芽咖啡', '416925', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276119', '1528276119', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('35', '雀巢咖啡', '601511', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276121', '1528276121', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('36', '麦斯威尔咖啡', '310319', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276122', '1528276122', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('37', '麦芽咖啡', '535299', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276124', '1528276124', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('38', '雀巢咖啡', '198026', '80.00', '雀的巢', '3', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276125', '1528276126', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('39', '麦斯威尔咖啡', '778300', '3.00', '麦斯威尔', '2', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276126', '1528276127', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('40', '麦芽咖啡', '889433', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276129', '1528276130', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('41', '麦斯威尔咖啡', '853267', '3.00', '麦斯威尔', '5', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276177', '1528276178', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('42', '雀巢咖啡', '860980', '80.00', '雀的巢', '4', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276181', '1528276181', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('43', '麦斯威尔咖啡', '564973', '3.00', '麦斯威尔', '5', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276183', '1528276183', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('44', '雀巢咖啡', '682801', '80.00', '雀的巢', '4', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276185', '1528276185', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('45', '麦斯威尔咖啡', '755167', '3.00', '麦斯威尔', '5', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276186', '1528276186', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('46', '雀巢咖啡', '433003', '80.00', '雀的巢', '4', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276188', '1528276188', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('47', '麦芽咖啡', '909651', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276190', '1528276190', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('48', '麦斯威尔咖啡', '614324', '3.00', '麦斯威尔', '5', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276191', '1528276191', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('49', '雀巢咖啡', '156371', '80.00', '雀的巢', '4', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276192', '1528276193', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('51', '雀巢咖啡', '167966', '80.00', '雀的巢', '4', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276194', '1528276195', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('52', '麦芽咖啡', '419408', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276196', '1528276197', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('53', '雀巢咖啡', '547527', '80.00', '雀的巢', '4', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276197', '1528276198', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('54', '麦斯威尔咖啡', '485167', '3.00', '麦斯威尔', '5', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276198', '1528276199', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('55', '麦芽咖啡', '983549', '1.00', '广州', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282756842920.png', '1528276201', '1528276201', '[\"5\",\"4\",\"3\",\"2\",\"1\"]', '1', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275753580929.png\" style=\"\" title=\"1528275753580929.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753614407.png\" style=\"\" title=\"1528275753614407.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275753463882.png\" style=\"\" title=\"1528275753463882.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754135115.png\" style=\"\" title=\"1528275754135115.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275754169674.png\" style=\"\" title=\"1528275754169674.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('56', '雀巢咖啡', '223892', '80.00', '雀的巢', '4', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282760468877.png', '1528276202', '1528276202', '[\"14\",\"13\",\"12\",\"11\",\"10\"]', '0', '1', '1', '<p><img src=\"/ueditor/php/upload/image/20180606/1528276071805684.png\" style=\"\" title=\"1528276071805684.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071100956.png\" style=\"\" title=\"1528276071100956.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071287581.png\" style=\"\" title=\"1528276071287581.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276071944762.png\" style=\"\" title=\"1528276071944762.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528276072117304.png\" style=\"\" title=\"1528276072117304.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('57', '麦斯威尔咖啡', '929870', '3.00', '麦斯威尔', '5', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276203', '1528276203', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('58', '麦斯威尔咖啡', '618251', '3.00', '麦斯威尔', '5', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '[\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '1', './static/img/thum/15282759447482.png', '1528276208', '1528276208', '[\"9\",\"8\",\"7\",\"6\"]', '1', '0', '0', '<p><img src=\"/ueditor/php/upload/image/20180606/1528275958108181.png\" style=\"\" title=\"1528275958108181.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958139078.png\" style=\"\" title=\"1528275958139078.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275958503514.png\" style=\"\" title=\"1528275958503514.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959808093.png\" style=\"\" title=\"1528275959808093.png\"/></p><p><img src=\"/ueditor/php/upload/image/20180606/1528275959308021.png\" style=\"\" title=\"1528275959308021.png\"/></p><p><br/></p>');
INSERT INTO `product` VALUES ('59', '阿萨德阿萨德', '334915', '121.00', '阿萨大苏打', '3', '[\"10\",\"18\",\"48\",\"42\",\"49\"]', '[\"7\",\"8\"]', '1', './static/img/thum/15293706564627.png', '1529370668', '1529370668', '[\"67\",\"66\",\"65\",\"64\",\"63\"]', '0', '0', '0', '<p>傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德傻大阿萨德阿萨德阿萨德傻大阿萨阿萨德阿萨德阿萨德阿萨德阿萨阿萨大苏打阿萨德阿萨德22</p>');

-- ----------------------------
-- Table structure for product_attributes
-- ----------------------------
DROP TABLE IF EXISTS `product_attributes`;
CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `original_price` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `path` varchar(255) NOT NULL,
  `attribute_name` varchar(20) NOT NULL,
  `series` tinyint(3) NOT NULL,
  `statu` tinyint(3) NOT NULL,
  `classify` text NOT NULL,
  `hotgoods` tinyint(3) NOT NULL,
  `hotfollow` tinyint(3) NOT NULL,
  `see` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_number` (`product_id`),
  KEY `hotgoods` (`hotgoods`),
  KEY `hotfollow` (`hotfollow`),
  KEY `see` (`see`)
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_attributes
-- ----------------------------
INSERT INTO `product_attributes` VALUES ('30', '麦芽咖啡', '4', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('31', '麦芽咖啡', '4', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('32', '麦芽咖啡', '4', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('33', '麦芽咖啡', '4', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('34', '麦芽咖啡', '4', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('35', '麦芽咖啡', '4', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('36', '麦芽咖啡', '5', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('37', '麦芽咖啡', '5', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('38', '麦芽咖啡', '5', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('39', '麦芽咖啡', '5', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('40', '麦芽咖啡', '5', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('41', '麦芽咖啡', '5', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"48\",\"41\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('72', '雀巢咖啡', '11', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('73', '雀巢咖啡', '11', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('74', '雀巢咖啡', '11', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('75', '雀巢咖啡', '11', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('76', '雀巢咖啡', '11', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('77', '雀巢咖啡', '11', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('78', '麦斯威尔咖啡', '12', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('79', '麦斯威尔咖啡', '12', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('80', '麦斯威尔咖啡', '12', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('81', '麦斯威尔咖啡', '12', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('82', '麦斯威尔咖啡', '12', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('83', '麦斯威尔咖啡', '12', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('84', '麦芽咖啡', '13', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('85', '麦芽咖啡', '13', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('86', '麦芽咖啡', '13', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('87', '麦芽咖啡', '13', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('88', '麦芽咖啡', '13', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('89', '麦芽咖啡', '13', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('90', '雀巢咖啡', '14', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('91', '雀巢咖啡', '14', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('92', '雀巢咖啡', '14', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('93', '雀巢咖啡', '14', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('94', '雀巢咖啡', '14', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('95', '雀巢咖啡', '14', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('96', '麦斯威尔咖啡', '15', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('97', '麦斯威尔咖啡', '15', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('98', '麦斯威尔咖啡', '15', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('99', '麦斯威尔咖啡', '15', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('100', '麦斯威尔咖啡', '15', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('101', '麦斯威尔咖啡', '15', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('102', '麦芽咖啡', '16', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('103', '麦芽咖啡', '16', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('104', '麦芽咖啡', '16', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('105', '麦芽咖啡', '16', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('106', '麦芽咖啡', '16', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('107', '麦芽咖啡', '16', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('108', '雀巢咖啡', '17', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('109', '雀巢咖啡', '17', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('110', '雀巢咖啡', '17', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('111', '雀巢咖啡', '17', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('112', '雀巢咖啡', '17', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('113', '雀巢咖啡', '17', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('114', '麦斯威尔咖啡', '18', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('115', '麦斯威尔咖啡', '18', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('116', '麦斯威尔咖啡', '18', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('117', '麦斯威尔咖啡', '18', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('118', '麦斯威尔咖啡', '18', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('119', '麦斯威尔咖啡', '18', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('120', '麦芽咖啡', '19', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('121', '麦芽咖啡', '19', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('122', '麦芽咖啡', '19', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('123', '麦芽咖啡', '19', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('124', '麦芽咖啡', '19', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('125', '麦芽咖啡', '19', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('126', '雀巢咖啡', '20', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('127', '雀巢咖啡', '20', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('128', '雀巢咖啡', '20', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('129', '雀巢咖啡', '20', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('130', '雀巢咖啡', '20', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('131', '雀巢咖啡', '20', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('132', '麦斯威尔咖啡', '21', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('133', '麦斯威尔咖啡', '21', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('134', '麦斯威尔咖啡', '21', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('135', '麦斯威尔咖啡', '21', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('136', '麦斯威尔咖啡', '21', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('137', '麦斯威尔咖啡', '21', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('144', '雀巢咖啡', '23', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('145', '雀巢咖啡', '23', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('146', '雀巢咖啡', '23', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('147', '雀巢咖啡', '23', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('148', '雀巢咖啡', '23', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('149', '雀巢咖啡', '23', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('150', '麦斯威尔咖啡', '24', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('151', '麦斯威尔咖啡', '24', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('152', '麦斯威尔咖啡', '24', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('153', '麦斯威尔咖啡', '24', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('154', '麦斯威尔咖啡', '24', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('155', '麦斯威尔咖啡', '24', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('156', '麦芽咖啡', '25', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('157', '麦芽咖啡', '25', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('158', '麦芽咖啡', '25', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('159', '麦芽咖啡', '25', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('160', '麦芽咖啡', '25', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('161', '麦芽咖啡', '25', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('162', '雀巢咖啡', '26', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('163', '雀巢咖啡', '26', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('164', '雀巢咖啡', '26', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('165', '雀巢咖啡', '26', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('166', '雀巢咖啡', '26', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('167', '雀巢咖啡', '26', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('168', '麦斯威尔咖啡', '27', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('169', '麦斯威尔咖啡', '27', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('170', '麦斯威尔咖啡', '27', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('171', '麦斯威尔咖啡', '27', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('172', '麦斯威尔咖啡', '27', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('173', '麦斯威尔咖啡', '27', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('174', '麦芽咖啡', '28', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('175', '麦芽咖啡', '28', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('176', '麦芽咖啡', '28', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('177', '麦芽咖啡', '28', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('178', '麦芽咖啡', '28', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('179', '麦芽咖啡', '28', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('180', '雀巢咖啡', '29', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('181', '雀巢咖啡', '29', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('182', '雀巢咖啡', '29', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('183', '雀巢咖啡', '29', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('184', '雀巢咖啡', '29', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('185', '雀巢咖啡', '29', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('186', '麦斯威尔咖啡', '30', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('187', '麦斯威尔咖啡', '30', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('188', '麦斯威尔咖啡', '30', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('189', '麦斯威尔咖啡', '30', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('190', '麦斯威尔咖啡', '30', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('191', '麦斯威尔咖啡', '30', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('192', '麦芽咖啡', '31', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('193', '麦芽咖啡', '31', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('194', '麦芽咖啡', '31', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('195', '麦芽咖啡', '31', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('196', '麦芽咖啡', '31', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('197', '麦芽咖啡', '31', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('198', '雀巢咖啡', '32', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('199', '雀巢咖啡', '32', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('200', '雀巢咖啡', '32', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('201', '雀巢咖啡', '32', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('202', '雀巢咖啡', '32', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('203', '雀巢咖啡', '32', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('204', '麦斯威尔咖啡', '33', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('205', '麦斯威尔咖啡', '33', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('206', '麦斯威尔咖啡', '33', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('207', '麦斯威尔咖啡', '33', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('208', '麦斯威尔咖啡', '33', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('209', '麦斯威尔咖啡', '33', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('210', '麦芽咖啡', '34', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('211', '麦芽咖啡', '34', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('212', '麦芽咖啡', '34', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('213', '麦芽咖啡', '34', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('214', '麦芽咖啡', '34', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('215', '麦芽咖啡', '34', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('216', '雀巢咖啡', '35', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('217', '雀巢咖啡', '35', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('218', '雀巢咖啡', '35', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('219', '雀巢咖啡', '35', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('220', '雀巢咖啡', '35', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('221', '雀巢咖啡', '35', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('222', '麦斯威尔咖啡', '36', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('223', '麦斯威尔咖啡', '36', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('224', '麦斯威尔咖啡', '36', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('225', '麦斯威尔咖啡', '36', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('226', '麦斯威尔咖啡', '36', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('227', '麦斯威尔咖啡', '36', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('228', '麦芽咖啡', '37', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('229', '麦芽咖啡', '37', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('230', '麦芽咖啡', '37', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('231', '麦芽咖啡', '37', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('232', '麦芽咖啡', '37', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('233', '麦芽咖啡', '37', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('234', '雀巢咖啡', '38', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('235', '雀巢咖啡', '38', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('236', '雀巢咖啡', '38', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('237', '雀巢咖啡', '38', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('238', '雀巢咖啡', '38', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('239', '雀巢咖啡', '38', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '3', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('240', '麦斯威尔咖啡', '39', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('241', '麦斯威尔咖啡', '39', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('242', '麦斯威尔咖啡', '39', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('243', '麦斯威尔咖啡', '39', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('244', '麦斯威尔咖啡', '39', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('245', '麦斯威尔咖啡', '39', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '2', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('246', '麦芽咖啡', '40', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('247', '麦芽咖啡', '40', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('248', '麦芽咖啡', '40', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('249', '麦芽咖啡', '40', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('250', '麦芽咖啡', '40', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('251', '麦芽咖啡', '40', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('252', '麦斯威尔咖啡', '41', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('253', '麦斯威尔咖啡', '41', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('254', '麦斯威尔咖啡', '41', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('255', '麦斯威尔咖啡', '41', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('256', '麦斯威尔咖啡', '41', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('257', '麦斯威尔咖啡', '41', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('258', '雀巢咖啡', '42', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('259', '雀巢咖啡', '42', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('260', '雀巢咖啡', '42', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('261', '雀巢咖啡', '42', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('262', '雀巢咖啡', '42', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('263', '雀巢咖啡', '42', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('264', '麦斯威尔咖啡', '43', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('265', '麦斯威尔咖啡', '43', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('266', '麦斯威尔咖啡', '43', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('267', '麦斯威尔咖啡', '43', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('268', '麦斯威尔咖啡', '43', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('269', '麦斯威尔咖啡', '43', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('270', '雀巢咖啡', '44', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('271', '雀巢咖啡', '44', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('272', '雀巢咖啡', '44', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('273', '雀巢咖啡', '44', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('274', '雀巢咖啡', '44', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('275', '雀巢咖啡', '44', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('276', '麦斯威尔咖啡', '45', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('277', '麦斯威尔咖啡', '45', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('278', '麦斯威尔咖啡', '45', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('279', '麦斯威尔咖啡', '45', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('280', '麦斯威尔咖啡', '45', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('281', '麦斯威尔咖啡', '45', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('282', '雀巢咖啡', '46', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('283', '雀巢咖啡', '46', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('284', '雀巢咖啡', '46', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('285', '雀巢咖啡', '46', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('286', '雀巢咖啡', '46', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('287', '雀巢咖啡', '46', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('288', '麦芽咖啡', '47', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('289', '麦芽咖啡', '47', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('290', '麦芽咖啡', '47', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('291', '麦芽咖啡', '47', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('292', '麦芽咖啡', '47', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('293', '麦芽咖啡', '47', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('294', '麦斯威尔咖啡', '48', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('295', '麦斯威尔咖啡', '48', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('296', '麦斯威尔咖啡', '48', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('297', '麦斯威尔咖啡', '48', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('298', '麦斯威尔咖啡', '48', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('299', '麦斯威尔咖啡', '48', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('300', '雀巢咖啡', '49', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('301', '雀巢咖啡', '49', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('302', '雀巢咖啡', '49', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('303', '雀巢咖啡', '49', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('304', '雀巢咖啡', '49', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('305', '雀巢咖啡', '49', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('306', '雀巢咖啡', '51', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('307', '雀巢咖啡', '51', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('308', '雀巢咖啡', '51', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('309', '雀巢咖啡', '51', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('310', '雀巢咖啡', '51', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('311', '雀巢咖啡', '51', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('312', '麦芽咖啡', '52', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('313', '麦芽咖啡', '52', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('314', '麦芽咖啡', '52', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('315', '麦芽咖啡', '52', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('316', '麦芽咖啡', '52', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('317', '麦芽咖啡', '52', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('318', '雀巢咖啡', '53', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('319', '雀巢咖啡', '53', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('320', '雀巢咖啡', '53', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('321', '雀巢咖啡', '53', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('322', '雀巢咖啡', '53', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('323', '雀巢咖啡', '53', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('324', '麦斯威尔咖啡', '54', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('325', '麦斯威尔咖啡', '54', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('326', '麦斯威尔咖啡', '54', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('327', '麦斯威尔咖啡', '54', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('328', '麦斯威尔咖啡', '54', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('329', '麦斯威尔咖啡', '54', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('330', '麦芽咖啡', '55', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('331', '麦芽咖啡', '55', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('332', '麦芽咖啡', '55', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('333', '麦芽咖啡', '55', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('334', '麦芽咖啡', '55', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('335', '麦芽咖啡', '55', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('336', '雀巢咖啡', '56', '7', '1223.00', '123.00', '/static/img/public/15282760468877.png', '特浓30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('337', '雀巢咖啡', '56', '8', '547456.00', '234.00', '/static/img/public/15282760468877.png', '特浓60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('338', '雀巢咖啡', '56', '9', '523235.00', '53.00', '/static/img/public/15282760468877.png', '特浓90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('339', '雀巢咖啡', '56', '10', '3422.00', '323.00', '/static/img/public/15282760468877.png', '原味30条（390克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('340', '雀巢咖啡', '56', '11', '67867.00', '545.00', '/static/img/public/15282760468877.png', '原味60条（780克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('341', '雀巢咖啡', '56', '12', '87956.00', '453.00', '/static/img/public/15282760468877.png', '原味90条（1170克/盒）', '4', '1', '[\"9\",\"17\",\"48\",\"40\",\"43\"]', '0', '1', '1');
INSERT INTO `product_attributes` VALUES ('342', '麦斯威尔咖啡', '57', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('343', '麦斯威尔咖啡', '57', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('344', '麦斯威尔咖啡', '57', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('345', '麦斯威尔咖啡', '57', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('346', '麦斯威尔咖啡', '57', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('347', '麦斯威尔咖啡', '57', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('348', '麦斯威尔咖啡', '58', '7', '123.00', '456.00', '/static/img/public/15282759447482.png', '特浓30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('349', '麦斯威尔咖啡', '58', '8', '7865.00', '56.00', '/static/img/public/15282759447482.png', '特浓60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('350', '麦斯威尔咖啡', '58', '9', '56745.00', '43.00', '/static/img/public/15282759447482.png', '特浓90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('351', '麦斯威尔咖啡', '58', '10', '4567.00', '33.00', '/static/img/public/15282759447482.png', '原味30条（390克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('352', '麦斯威尔咖啡', '58', '11', '123.00', '543.00', '/static/img/public/15282759447482.png', '原味60条（780克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('353', '麦斯威尔咖啡', '58', '12', '4563.00', '343.00', '/static/img/public/15282759447482.png', '原味90条（1170克/盒）', '5', '1', '[\"7\",\"11\",\"20\",\"40\",\"44\"]', '1', '0', '0');
INSERT INTO `product_attributes` VALUES ('366', '麦芽咖啡', '22', '7', '665.00', '123.00', '/static/img/public/15282756842920.png', '特浓30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('367', '麦芽咖啡', '22', '8', '1532.00', '463.00', '/static/img/public/15282756842920.png', '特浓60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('368', '麦芽咖啡', '22', '9', '86745.00', '3434.00', '/static/img/public/15282756842920.png', '特浓90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('369', '麦芽咖啡', '22', '10', '123.10', '1231.00', '/static/img/public/15282756842920.png', '原味30条（390克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('370', '麦芽咖啡', '22', '11', '124323.00', '65712.00', '/static/img/public/15282756842920.png', '原味60条（780克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('371', '麦芽咖啡', '22', '12', '4361.00', '1221.00', '/static/img/public/15282756842920.png', '原味90条（1170克/盒）', '1', '1', '[\"8\",\"13\",\"21\",\"42\",\"45\"]', '1', '1', '1');
INSERT INTO `product_attributes` VALUES ('372', '阿萨德阿萨德', '59', '7', '111.00', '121.00', '/static/img/public/15293706564627.png', '特浓30条（390克/盒）', '3', '1', '[\"10\",\"18\",\"48\",\"42\",\"49\"]', '0', '0', '0');
INSERT INTO `product_attributes` VALUES ('373', '阿萨德阿萨德', '59', '8', '111.00', '121.00', '/static/img/public/15293706564627.png', '特浓60条（780克/盒）', '3', '1', '[\"10\",\"18\",\"48\",\"42\",\"49\"]', '0', '0', '0');

-- ----------------------------
-- Table structure for product_comment
-- ----------------------------
DROP TABLE IF EXISTS `product_comment`;
CREATE TABLE `product_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `score` tinyint(3) NOT NULL,
  `create_time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_comment
-- ----------------------------
INSERT INTO `product_comment` VALUES ('1', '1', '22', '感谢您的宝贵的建议！', '1', '4', '0');
INSERT INTO `product_comment` VALUES ('2', '1', '22', '123123123', '0', '1', '1528881405');
INSERT INTO `product_comment` VALUES ('3', '4', '22', '213123', '0', '4', '1528955262');
INSERT INTO `product_comment` VALUES ('4', '4', '36', '23123123123', '0', '1', '1528955962');
INSERT INTO `product_comment` VALUES ('5', '6', '56', '65656多少人各大', '0', '1', '1528968572');
INSERT INTO `product_comment` VALUES ('6', '6', '22', '', '1', '5', '1528969205');

-- ----------------------------
-- Table structure for product_files
-- ----------------------------
DROP TABLE IF EXISTS `product_files`;
CREATE TABLE `product_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_files
-- ----------------------------
INSERT INTO `product_files` VALUES ('1', '/static/img/public/15282756842920.png');
INSERT INTO `product_files` VALUES ('2', '/static/img/public/15282756843266.png');
INSERT INTO `product_files` VALUES ('3', '/static/img/public/15282756843545.png');
INSERT INTO `product_files` VALUES ('4', '/static/img/public/15282756843745.png');
INSERT INTO `product_files` VALUES ('5', '/static/img/public/15282756849896.png');
INSERT INTO `product_files` VALUES ('6', '/static/img/public/15282759447482.png');
INSERT INTO `product_files` VALUES ('7', '/static/img/public/15282759446888.png');
INSERT INTO `product_files` VALUES ('8', '/static/img/public/15282759449990.png');
INSERT INTO `product_files` VALUES ('9', '/static/img/public/15282759457660.png');
INSERT INTO `product_files` VALUES ('10', '/static/img/public/15282760468877.png');
INSERT INTO `product_files` VALUES ('11', '/static/img/public/15282760466101.png');
INSERT INTO `product_files` VALUES ('12', '/static/img/public/15282760463767.png');
INSERT INTO `product_files` VALUES ('13', '/static/img/public/15282760474251.png');
INSERT INTO `product_files` VALUES ('14', '/static/img/public/15282760477811.png');
INSERT INTO `product_files` VALUES ('16', '/static/img/public/15288906243466.png');
INSERT INTO `product_files` VALUES ('17', '/static/img/public/15289703629982.png');
INSERT INTO `product_files` VALUES ('18', '/static/img/public/15289703627678.png');
INSERT INTO `product_files` VALUES ('19', '/static/img/public/15289703626929.png');
INSERT INTO `product_files` VALUES ('20', '/static/img/public/15289703625159.png');
INSERT INTO `product_files` VALUES ('21', '/static/img/public/15289704253120.png');
INSERT INTO `product_files` VALUES ('22', '/static/img/public/15289707452598.png');
INSERT INTO `product_files` VALUES ('23', '/static/img/public/15289707454743.png');
INSERT INTO `product_files` VALUES ('24', '/static/img/public/15289707453988.png');
INSERT INTO `product_files` VALUES ('25', '/static/img/public/15289707451866.png');
INSERT INTO `product_files` VALUES ('26', '/static/img/public/15289707454414.png');
INSERT INTO `product_files` VALUES ('27', '/static/img/public/15289740073265.png');
INSERT INTO `product_files` VALUES ('28', '/static/img/public/15289740074352.png');
INSERT INTO `product_files` VALUES ('29', '/static/img/public/15289740074716.png');
INSERT INTO `product_files` VALUES ('30', '/static/img/public/15289740073932.png');
INSERT INTO `product_files` VALUES ('31', '/static/img/public/15289740075862.png');
INSERT INTO `product_files` VALUES ('32', '/static/img/public/15289742962987.png');
INSERT INTO `product_files` VALUES ('33', '/static/img/public/15289742963564.png');
INSERT INTO `product_files` VALUES ('34', '/static/img/public/15289742964561.png');
INSERT INTO `product_files` VALUES ('35', '/static/img/public/15289742966937.png');
INSERT INTO `product_files` VALUES ('36', '/static/img/public/15289742964107.png');
INSERT INTO `product_files` VALUES ('37', '/static/img/public/15289745768981.png');
INSERT INTO `product_files` VALUES ('38', '/static/img/public/15289745771610.png');
INSERT INTO `product_files` VALUES ('39', '/static/img/public/15289745771338.png');
INSERT INTO `product_files` VALUES ('40', '/static/img/public/15289745788998.png');
INSERT INTO `product_files` VALUES ('41', '/static/img/public/15289745785704.png');
INSERT INTO `product_files` VALUES ('47', '/static/img/public/15289751557488.png');
INSERT INTO `product_files` VALUES ('48', '/static/img/public/15289755111151.png');
INSERT INTO `product_files` VALUES ('49', '/static/img/public/15289761167895.png');
INSERT INTO `product_files` VALUES ('50', '/static/img/public/15289761606252.png');
INSERT INTO `product_files` VALUES ('51', '/static/img/public/15289762168928.png');
INSERT INTO `product_files` VALUES ('52', '/static/img/public/15289762634002.png');
INSERT INTO `product_files` VALUES ('54', '/static/img/public/15289770074736.png');
INSERT INTO `product_files` VALUES ('55', '/static/img/public/15289771962444.png');
INSERT INTO `product_files` VALUES ('56', '/static/img/public/15289789664650.png');
INSERT INTO `product_files` VALUES ('57', '/static/img/public/15289789669895.png');
INSERT INTO `product_files` VALUES ('58', '/static/img/public/15289789665384.png');
INSERT INTO `product_files` VALUES ('59', '/static/img/public/15289789664997.png');
INSERT INTO `product_files` VALUES ('61', '/static/img/public/15289794749398.png');
INSERT INTO `product_files` VALUES ('62', '/static/img/public/15289794747726.png');
INSERT INTO `product_files` VALUES ('63', '/static/img/public/15293706564627.png');
INSERT INTO `product_files` VALUES ('64', '/static/img/public/15293706573292.png');
INSERT INTO `product_files` VALUES ('65', '/static/img/public/15293706572543.png');
INSERT INTO `product_files` VALUES ('66', '/static/img/public/15293706572039.png');
INSERT INTO `product_files` VALUES ('67', '/static/img/public/15293706578091.png');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('6', '超级管理员');
INSERT INTO `role` VALUES ('10', '123');
INSERT INTO `role` VALUES ('11', '123');
INSERT INTO `role` VALUES ('12', '12312');

-- ----------------------------
-- Table structure for role_admin
-- ----------------------------
DROP TABLE IF EXISTS `role_admin`;
CREATE TABLE `role_admin` (
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_admin
-- ----------------------------
INSERT INTO `role_admin` VALUES ('5', '6');
INSERT INTO `role_admin` VALUES ('9', '10');
INSERT INTO `role_admin` VALUES ('10', '11');
INSERT INTO `role_admin` VALUES ('12', '11');

-- ----------------------------
-- Table structure for role_menu
-- ----------------------------
DROP TABLE IF EXISTS `role_menu`;
CREATE TABLE `role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` text NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_menu
-- ----------------------------
INSERT INTO `role_menu` VALUES ('6', '[\"6\",\"35\",\"7\",\"15\",\"16\",\"17\",\"30\",\"8\",\"18\",\"19\",\"9\",\"20\",\"38\",\"10\",\"22\",\"24\",\"12\",\"31\",\"33\",\"34\",\"36\"]');
INSERT INTO `role_menu` VALUES ('10', '[\"6\",\"35\",\"7\",\"15\",\"16\",\"17\",\"30\"]');
INSERT INTO `role_menu` VALUES ('11', '[\"6\",\"7\",\"8\",\"18\",\"19\"]');
INSERT INTO `role_menu` VALUES ('12', '[\"6\",\"7\",\"8\",\"9\",\"10\",\"12\",\"33\"]');

-- ----------------------------
-- Table structure for series
-- ----------------------------
DROP TABLE IF EXISTS `series`;
CREATE TABLE `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of series
-- ----------------------------
INSERT INTO `series` VALUES ('1', '新年金彩礼盒');
INSERT INTO `series` VALUES ('2', '经典原味咖啡');
INSERT INTO `series` VALUES ('3', '香醇浓厚咖啡');
INSERT INTO `series` VALUES ('4', '清新奶香咖啡');
INSERT INTO `series` VALUES ('5', '麦氏典藏系列');

-- ----------------------------
-- Table structure for shop_cart
-- ----------------------------
DROP TABLE IF EXISTS `shop_cart`;
CREATE TABLE `shop_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_attributes_id` int(11) NOT NULL,
  `product_count` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_attributes_id` (`product_attributes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_cart
-- ----------------------------
INSERT INTO `shop_cart` VALUES ('26', '6', '339', '1');
INSERT INTO `shop_cart` VALUES ('32', '1', '198', '6');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  `account` varchar(18) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `paypassword` char(32) NOT NULL,
  `status` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `account` (`account`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '尼霸霸', '13435123181', '1095395035@qq.com', '28a8201450d3f01c23bf98e0212bf717', '1528355449', '1528355449', 'q123123123', '93246.00', 'e10adc3949ba59abbe56e057f20f883e', '1');
INSERT INTO `user` VALUES ('4', '123', '13435123180', '109@qq.com', '28a8201450d3f01c23bf98e0212bf717', '1528946993', '1528946993', 'qwe123123', '1876.00', '4297f44b13955235245b2497399d7a93', '1');
INSERT INTO `user` VALUES ('5', '123', '18826103567', '12223@qq.com', 'f3f87da7eb429ef157084d961391bd3f', '1528966041', '1528966041', 'q123456123', '0.00', '4297f44b13955235245b2497399d7a93', '1');
INSERT INTO `user` VALUES ('6', 'root123456', '13068736005', '963322721@qq.com', 'ea61cb13036603430e4a77ba6e280310', '1528966996', '1528966996', 'root123456789', '0.00', 'e10adc3949ba59abbe56e057f20f883e', '1');
INSERT INTO `user` VALUES ('7', 'asdasd11', '18124206537', 'asd@qq.com', 'ff6e80f472b7a646050db7005f0030ba', '1529371060', '1529371060', 'asdasd11', '0.00', '4297f44b13955235245b2497399d7a93', '1');

-- ----------------------------
-- Table structure for water
-- ----------------------------
DROP TABLE IF EXISTS `water`;
CREATE TABLE `water` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `path` varchar(255) NOT NULL,
  `create_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of water
-- ----------------------------
INSERT INTO `water` VALUES ('1', '麦斯威尔', '/static/img/water/20180531\\8708976b28314ddb4ff3b5d9a6d93d8c.png', '1527755438', '1527755438');
INSERT INTO `water` VALUES ('2', '银行', '/static/img/water/20180531\\4aff4d142f43ac78d1aecb536da1998d.png', '1527755448', '1527755448');
INSERT INTO `water` VALUES ('3', '雀巢', '/static/img/water/20180614/f6f839cd55b77777dd042ddec5d89624.png', '1528294148', '1528979555');
