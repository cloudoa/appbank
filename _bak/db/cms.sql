# --------------------------------------------------------
# 创建数据库
CREATE DATABASE `cms` DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci;
#
# 表的结构 `CMS_album`
#

CREATE TABLE `CMS_album` (
  `catID` int(11) unsigned NOT NULL auto_increment,
  `catPath` varchar(100) NOT NULL default '',
  `catTitle` varchar(100) NOT NULL default '',
  `description` varchar(200) NOT NULL default '',
  `catImage` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`catID`),
  KEY `catPath` (`catPath`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

# --------------------------------------------------------

#
# 表的结构 `CMS_article`
#

CREATE TABLE `CMS_article` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(50) NOT NULL default '',
  `summary` varchar(200) NOT NULL default '',
  `postTime` date NOT NULL default '0000-00-00',
  `author` varchar(30) NOT NULL default '',
  `comeFrom` varchar(50) NOT NULL default '',
  `content` text NOT NULL,
  `keyword` varchar(20) NOT NULL default '',
  `catPath` varchar(200) NOT NULL default '',
  `isImg` int(1) unsigned NOT NULL default '0',
  `imgName` varchar(50) NOT NULL default '',
  `linkPath` varchar(100) NOT NULL default '',
  `audit` int(1) unsigned NOT NULL default '0',
  `recommend` mediumint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `catPath` (`catPath`),
  KEY `keyword` (`keyword`),
  KEY `isImg` (`isImg`),
  KEY `recommend` (`recommend`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

# --------------------------------------------------------

#
# 表的结构 `CMS_cat`
#

CREATE TABLE `CMS_cat` (
  `catID` int(11) unsigned NOT NULL auto_increment,
  `catPath` varchar(100) NOT NULL default '',
  `catTitle` varchar(100) NOT NULL default '',
  `description` varchar(200) NOT NULL default '',
  `catImage` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`catID`),
  KEY `catPath` (`catPath`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

# --------------------------------------------------------

#
# 表的结构 `CMS_picture`
#

CREATE TABLE `CMS_picture` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `picTitle` varchar(30) NOT NULL default '',
  `description` varchar(200) NOT NULL default '',
  `picName` varchar(50) NOT NULL default '',
  `catPath` varchar(200) NOT NULL default '',
  `hasThumb` int(1) NOT NULL default '0',
  `hasMark` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `catPath` (`catPath`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;

# --------------------------------------------------------

#
# 表的结构 `CMS_user`
#

CREATE TABLE `CMS_user` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(20) NOT NULL default '',
  `pwd` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=1 ;
INSERT INTO `CMS_user` VAlueS(1,'admin',md5('admin'));
INSERT INTO `CMS_album` VALUES(null, '0', '相册集', '相册根目录', '');
INSERT INTO `CMS_cat` VALUES(null, '0', '首页', '分类根目录', '');