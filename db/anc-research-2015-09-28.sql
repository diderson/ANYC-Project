/*
SQLyog Ultimate v9.50 
MySQL - 5.6.14 : Database - anc-research
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`anc-research` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `anc-research`;

/*Table structure for table `anc_administrator` */

DROP TABLE IF EXISTS `anc_administrator`;

CREATE TABLE `anc_administrator` (
  `id_administrator` int(11) NOT NULL AUTO_INCREMENT,
  `id_administratortype` int(11) NOT NULL,
  `id_municipality` int(11) DEFAULT NULL,
  `first_name` varchar(64) DEFAULT NULL,
  `last_name` varchar(64) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `administrator_status` char(1) DEFAULT NULL,
  `administrator_profile_status` char(1) DEFAULT '0',
  `amdlink` varchar(256) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  `ldate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_administrator`),
  KEY `fk_link_administrator_link_administratortype` (`id_administratortype`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `anc_administrator` */

insert  into `anc_administrator`(`id_administrator`,`id_administratortype`,`id_municipality`,`first_name`,`last_name`,`email_address`,`password`,`administrator_status`,`administrator_profile_status`,`amdlink`,`cdate`,`mdate`,`ldate`) values (1,1,249,'Diderson','Baka','diderson@diderson.com','SYNLrtCWHYCpzGYrb7wgFA==','1','1',NULL,'2011-05-31 12:21:07','2015-05-04 16:54:41','2015-05-04 16:54:41'),(3,1,NULL,'David','Kandi','david@bourdak.cd','eyli36t9gGL9tF/Z8Gt2OA==','1','1',NULL,'2011-08-16 13:42:10','2014-09-12 15:29:55','2014-09-12 15:29:55'),(4,4,249,'Diderson','Baka','diderson@didi.co.za','zYC5kW82RHw=','1','1',NULL,'2011-12-02 08:15:44','2015-05-08 15:11:45','2015-05-08 15:11:45'),(5,5,267,'Didi','Baka','didi@diderson.com','SYNLrtCWHYCpzGYrb7wgFA==','1','1',NULL,'2013-11-25 13:59:58','2014-08-26 23:59:18','2014-01-11 19:10:54'),(6,4,249,'Ndumiso','Mbete','xmbete@gmail.com','zYC5kW82RHw=','1','1',NULL,'2015-03-31 00:14:32','2015-05-08 10:17:31','2015-05-08 10:17:31'),(8,5,249,'Dieudonne','Bakatupingana','ddiderson@gmail.com','SYNLrtCWHYCpzGYrb7wgFA==','1','1','75c707f0923b3309676d9626c2c7db5d','2015-04-10 12:39:18','2015-05-08 10:32:38','2015-05-08 10:32:38'),(9,3,249,'Baka','RegionSec','baka@gmail.com','SYNLrtCWHYCpzGYrb7wgFA==','1','1',NULL,'2015-05-07 15:33:40','2015-05-07 15:34:25','2015-05-07 15:34:25'),(2,5,249,'Tombi','Thabo','tombi@gmsil.com','zYC5kW82RHw=','1','0',NULL,'2015-05-07 15:42:11','2015-05-07 15:42:14',NULL);

/*Table structure for table `anc_administrator_administratoraccess` */

DROP TABLE IF EXISTS `anc_administrator_administratoraccess`;

CREATE TABLE `anc_administrator_administratoraccess` (
  `id_administrator` int(11) NOT NULL,
  `id_administratoraccess` int(11) NOT NULL,
  KEY `fk_link_administrator_administratoraccess_link_administratora1` (`id_administratoraccess`),
  KEY `fk_link_administrator_administratoraccess_link_administrator1` (`id_administrator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `anc_administrator_administratoraccess` */

insert  into `anc_administrator_administratoraccess`(`id_administrator`,`id_administratoraccess`) values (2,2),(2,1),(2,19),(2,20),(2,4),(2,3),(5,8),(5,7),(4,8),(3,16),(3,4),(3,3),(5,6),(5,5),(5,13),(5,12),(5,11),(1,3),(1,4),(1,16),(1,6),(1,7),(1,15),(1,8),(1,5),(1,13),(1,12),(1,9),(1,14),(1,10),(1,11),(1,1),(3,6),(3,7),(3,15),(3,8),(3,5),(3,13),(3,12),(3,9),(3,14),(3,10),(3,11),(3,1),(6,3),(6,4),(6,16),(6,7),(6,6),(6,5),(6,8),(6,13),(6,12),(6,9),(6,15),(6,14),(6,1);

/*Table structure for table `anc_administratoraccess` */

DROP TABLE IF EXISTS `anc_administratoraccess`;

CREATE TABLE `anc_administratoraccess` (
  `id_administratoraccess` int(11) NOT NULL AUTO_INCREMENT,
  `access_name` varchar(64) NOT NULL,
  `access_alias` varchar(64) DEFAULT NULL,
  `access_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_administratoraccess`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `anc_administratoraccess` */

insert  into `anc_administratoraccess`(`id_administratoraccess`,`access_name`,`access_alias`,`access_status`,`cdate`,`mdate`) values (1,'Tiny MCE File Manager','tinymce-file-manager','1','2011-08-16 13:43:28','2014-08-27 21:05:44'),(3,'Administrator','administrator','1','2011-08-16 13:43:28','2011-08-16 13:43:32'),(4,'Administrator Access','administrator-access','1','2011-08-16 13:43:28','2011-08-16 13:43:32'),(5,'Manage Councillor','councillor','1','2013-08-04 02:07:16','2014-09-12 15:31:01'),(6,'Gestion Fournisseurs','fournisseur','1','2013-08-04 02:07:37','2014-09-12 15:31:40'),(7,'Gestion Actualites','news','1','2013-08-04 02:07:56','2014-09-12 15:32:12'),(8,'Gestion Publicite','publicite','1','2013-08-04 02:09:28','2014-09-12 15:33:12'),(9,'Gestion testimony','testimony','1','2013-08-04 02:09:52','2014-09-12 15:33:42'),(12,'Gestion Service','service','1','2013-08-04 02:12:12','2014-01-11 19:04:19'),(13,'Gestion representant','representant','1','2013-08-04 02:12:42','2014-09-17 10:48:14'),(14,'Manager les taux et Taxe','taux','1','2013-08-04 02:13:32',NULL),(15,'Manage groupe therapeutique','gpetherapeutique','1','2014-01-21 19:30:08','2014-09-17 10:49:34'),(16,'Changement Chambre','changementchambre','1','2014-01-21 19:33:03',NULL);

/*Table structure for table `anc_administratortype` */

DROP TABLE IF EXISTS `anc_administratortype`;

CREATE TABLE `anc_administratortype` (
  `id_administratortype` int(11) NOT NULL AUTO_INCREMENT,
  `administratortype_name` varchar(64) NOT NULL,
  `administratortype_alias` varchar(64) DEFAULT NULL,
  `administratortype_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_administratortype`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `anc_administratortype` */

insert  into `anc_administratortype`(`id_administratortype`,`administratortype_name`,`administratortype_alias`,`administratortype_status`,`cdate`,`mdate`) values (1,'Superuser','superuser','1','2010-05-18 13:10:03','2010-05-18 13:10:03'),(2,'User','user','1','2010-05-18 13:10:03','2010-05-18 13:10:03'),(3,'Provincial Sec','provincialsec','1','2015-04-13 23:07:32',NULL),(4,'Chief Whip','chiefwhip','1','2015-04-13 23:08:26',NULL),(5,'Councillor','councillor','1','2015-04-13 23:08:49',NULL);

/*Table structure for table `anc_assessment` */

DROP TABLE IF EXISTS `anc_assessment`;

CREATE TABLE `anc_assessment` (
  `id_assessment` int(11) NOT NULL AUTO_INCREMENT,
  `id_administrator` int(11) NOT NULL,
  `assessment_type` varchar(45) DEFAULT NULL,
  `assessment_rating` text,
  `assessment_score` int(11) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_assessment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anc_assessment` */

/*Table structure for table `anc_chiefwhip_preview` */

DROP TABLE IF EXISTS `anc_chiefwhip_preview`;

CREATE TABLE `anc_chiefwhip_preview` (
  `id_chiefwhip_preview` int(11) NOT NULL AUTO_INCREMENT,
  `chiefwhip_preview_libele` varchar(500) DEFAULT NULL,
  `chiefwhip_preview_status` char(1) DEFAULT '1',
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_chiefwhip_preview`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `anc_chiefwhip_preview` */

insert  into `anc_chiefwhip_preview`(`id_chiefwhip_preview`,`chiefwhip_preview_libele`,`chiefwhip_preview_status`,`cdate`,`mdate`) values (1,'Overall attendance and participation in the work of the ANC Caucus.','1','2015-04-13 17:26:00',NULL),(2,'The overall contribution of the Councillor to the work of the Caucus.','1','2015-04-13 17:26:03',NULL),(3,'Ability of the Councillor to communicate his/her constituents/branch views in the Caucus.','1','2015-04-13 17:26:05',NULL),(4,'Councillor’s participation & contribution in the ANC study groups.','1','2015-04-13 17:26:07',NULL),(5,'The Councillor’s overall preparedness for contribution in the study groups','1','2015-04-13 17:26:09',NULL),(6,'The Councillor’s ability to produce a documents and inputs for discussion in the study group.','1','2015-04-13 17:26:11',NULL),(7,'Councillor’s ability to communicate of his/her work of the Caucus to the his/her constituency.','1','2015-04-13 17:26:12',NULL),(8,'Undertaking of tasks allocated to him/her by the Caucus.','1','2015-04-13 17:26:14',NULL),(9,'Effectively communicating decisions of the Caucus\rto the Chamber and the\rPortfolio Committee.','1','2015-04-13 17:27:39',NULL),(10,'Your overall assessment of the Councillor during his/ her term in the Caucus over the past 4 years.','1','2015-04-13 17:27:41',NULL);

/*Table structure for table `anc_cw_mpmpl` */

DROP TABLE IF EXISTS `anc_cw_mpmpl`;

CREATE TABLE `anc_cw_mpmpl` (
  `id_cw` int(11) NOT NULL,
  `id_mpmpl` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cw`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anc_cw_mpmpl` */

/*Table structure for table `anc_cw_preview_ass` */

DROP TABLE IF EXISTS `anc_cw_preview_ass`;

CREATE TABLE `anc_cw_preview_ass` (
  `id_cw_preview_ass` int(11) NOT NULL AUTO_INCREMENT,
  `id_mp_mpl_govreview_ass` int(11) DEFAULT NULL,
  `id_administrator` int(11) NOT NULL,
  `cw_preview` text,
  `cw_ovpefrating` text,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_cw_preview_ass`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `anc_cw_preview_ass` */

insert  into `anc_cw_preview_ass`(`id_cw_preview_ass`,`id_mp_mpl_govreview_ass`,`id_administrator`,`cw_preview`,`cw_ovpefrating`,`cdate`,`mdate`) values (1,1,4,'{\"preview_1\":\"1\",\"preview_2\":\"1\",\"preview_3\":\"1\",\"preview_4\":\"1\",\"preview_5\":\"1\",\"preview_6\":\"1\",\"preview_7\":\"1\",\"preview_8\":\"4\",\"preview_9\":\"3\",\"preview_10\":\"4\"}','{\"ovpefrating_1\":\"1\",\"ovpefrating_2\":\"1\",\"ovpefrating_3\":\"1\",\"ovpefrating_4\":\"3\",\"ovpefrating_5\":\"2\"}','2015-05-07 15:27:15','2015-05-07 15:27:31');

/*Table structure for table `anc_mp_mpl_constreview` */

DROP TABLE IF EXISTS `anc_mp_mpl_constreview`;

CREATE TABLE `anc_mp_mpl_constreview` (
  `id_mpl_constreview` int(11) NOT NULL AUTO_INCREMENT,
  `mpl_constreview_libele` varchar(500) DEFAULT NULL,
  `mpl_constreview_status` char(1) DEFAULT '1',
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mpl_constreview`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `anc_mp_mpl_constreview` */

insert  into `anc_mp_mpl_constreview`(`id_mpl_constreview`,`mpl_constreview_libele`,`mpl_constreview_status`,`cdate`,`mdate`) values (1,'Overall engagement and presence in your Constituency Office.','1','2015-04-13 17:10:16',NULL),(2,'Your ability to provide feedback of your  work in Parliament/Legisalture to your  Constituency office.','1','2015-04-13 17:10:19',NULL),(3,'Overall participation in projects of your Constituency Office.','1','2015-04-13 17:10:21',NULL),(4,'Ability to lead the work of your Constituency Office.','1','2015-04-13 17:10:24',NULL),(5,'Providing leadership to the work of your Constituency Office.','1','2015-04-13 17:10:27',NULL),(6,' Ensuring the Constituency’s concerns is channelled into the right direction – govt Dept, Local Municipalities,Ministers, MEC, etc.','1','2015-04-13 17:10:30',NULL),(7,'Providing education and training to the Constituency Office on the work in Parliament/Legislature.','1','2015-04-13 17:10:32',NULL),(8,'Regular written reports to the Constituency Office on your work in Parliament.','1','2015-04-13 17:10:35',NULL),(9,'Linking the work of the Constituency Office to the Integrated Development Plan (IDP) of the Municipality and or Government Departments Annual Plans.','1','2015-04-13 17:10:37',NULL),(10,'Your overall assessment of your performance in your Constituency Office over the past 4 years.','1','2015-04-13 17:10:40',NULL);

/*Table structure for table `anc_mp_mpl_constreview_ass` */

DROP TABLE IF EXISTS `anc_mp_mpl_constreview_ass`;

CREATE TABLE `anc_mp_mpl_constreview_ass` (
  `id_mp_mpl_constreview_ass` int(11) NOT NULL AUTO_INCREMENT,
  `id_administrator` int(11) NOT NULL,
  `mp_mpl_constreview` text,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mp_mpl_constreview_ass`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `anc_mp_mpl_constreview_ass` */

insert  into `anc_mp_mpl_constreview_ass`(`id_mp_mpl_constreview_ass`,`id_administrator`,`mp_mpl_constreview`,`cdate`,`mdate`) values (1,1,'{\"constreview_1\":\"5\",\"constreview_2\":\"3\",\"constreview_3\":\"2\",\"constreview_4\":\"1\",\"constreview_5\":\"1\",\"constreview_6\":\"4\",\"constreview_7\":\"3\",\"constreview_8\":\"3\",\"constreview_9\":\"4\",\"constreview_10\":\"3\"}','2015-04-15 21:52:13','2015-04-15 21:59:34');

/*Table structure for table `anc_mp_mpl_govpr` */

DROP TABLE IF EXISTS `anc_mp_mpl_govpr`;

CREATE TABLE `anc_mp_mpl_govpr` (
  `id_mp_mpl_govpr` int(11) NOT NULL AUTO_INCREMENT,
  `mp_mpl_govpr_libele` varchar(1086) DEFAULT NULL,
  `mp_mpl_govpr_section` text,
  `mp_mpl_govpr_soussection` text,
  `mp_mpl_govpr_status` char(1) DEFAULT '1',
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mp_mpl_govpr`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `anc_mp_mpl_govpr` */

insert  into `anc_mp_mpl_govpr`(`id_mp_mpl_govpr`,`mp_mpl_govpr_libele`,`mp_mpl_govpr_section`,`mp_mpl_govpr_soussection`,`mp_mpl_govpr_status`,`cdate`,`mdate`) values (1,'Governance work of the Public Representative','{\"0\":\"Names of committees, which you are deployed to, the records of attendance and rate your contribution using the Rating Matrix.\", \"1\":\"Please provide house debates and topics you’ve been involved in and rate your performance (top 5 debates)\", \"2\":\"Contribution to ANC caucus work and special tasks and assignments by caucus\", \"3\":\"Participation in oversight visits of the Committee(s) in which you serve.\"}',NULL,'1',NULL,NULL),(2,'Competency: Please indicate your skills level on the following:','{\"0\":\"Debate\",\"1\":\"Writing\", \"2\":\"Research\", \"3\":\"Public Speaking\", \"4\":\"Advisory /counseling communities\"}',NULL,'1',NULL,NULL),(3,'Self Development as a Public Representative','{\"0\":\"How many training courses, if any, have you attended that were organized by the legislature/ parliament in the past 24 months? Rate how they assisted you in conducting your work as an MP/MPL\"}',NULL,'1',NULL,NULL),(4,'Strengths and weakness that you have observed in yourself since commencement of your present deployment.',NULL,NULL,'1',NULL,NULL),(5,'What skills do you require to enhance your overall work performance as a Councillor? Please identify specific courses.',NULL,NULL,'1',NULL,NULL);

/*Table structure for table `anc_mp_mpl_govreview` */

DROP TABLE IF EXISTS `anc_mp_mpl_govreview`;

CREATE TABLE `anc_mp_mpl_govreview` (
  `id_mp_mpl_govreview` int(11) NOT NULL AUTO_INCREMENT,
  `mp_mpl_govreview_libele` varchar(256) DEFAULT NULL,
  `mp_mpl_govreview_status` char(1) DEFAULT '1',
  `cdtae` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mp_mpl_govreview`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `anc_mp_mpl_govreview` */

insert  into `anc_mp_mpl_govreview`(`id_mp_mpl_govreview`,`mp_mpl_govreview_libele`,`mp_mpl_govreview_status`,`cdtae`,`mdate`) values (1,'Overall attendance in Parliament /Legislature and your overall contribution to the work in the institution.','1','2015-04-13 16:41:13',NULL),(2,'Participation and attendance in the work of your Portfolio Committee.','1','2015-04-13 16:41:15',NULL),(3,'Preparation for deliberations of debates in the Chamber.','1','2015-04-13 16:41:17',NULL),(4,'Preparation for work in your Portfolio Committee.','1','2015-04-13 16:41:19',NULL),(5,'Participation in the oversight work of your Portflio Committee.','1','2015-04-13 16:41:20',NULL),(6,'Participation in the oversight of work of the Committee in respect of external visits.','1','2015-04-13 16:41:22',NULL),(7,'Contribution to the overall quality of debates in the House.','1','2015-04-13 16:41:23',NULL),(8,'Ensuring that the view of the organisation is communicated effectively in the Committee.','1','2015-04-13 16:41:25',NULL),(9,'Communicating the work of the Chamber to your constituency office.','1','2015-04-13 16:41:26',NULL),(10,'Your overall assessment of your term as Councillor in Parliament/Legislature over the past 4 years.','1','2015-04-13 16:41:28',NULL);

/*Table structure for table `anc_mp_mpl_govreview_ass` */

DROP TABLE IF EXISTS `anc_mp_mpl_govreview_ass`;

CREATE TABLE `anc_mp_mpl_govreview_ass` (
  `id_mp_mpl_govreview_ass` int(11) NOT NULL AUTO_INCREMENT,
  `id_administrator` int(11) NOT NULL,
  `mp_mpl_govreview` text,
  `mp_mpl_govpr_review` text,
  `mp_mpl_constreview` text,
  `mp_mpl_score` int(11) DEFAULT NULL,
  `mp_mpl_status` varchar(45) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_mp_mpl_govreview_ass`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `anc_mp_mpl_govreview_ass` */

insert  into `anc_mp_mpl_govreview_ass`(`id_mp_mpl_govreview_ass`,`id_administrator`,`mp_mpl_govreview`,`mp_mpl_govpr_review`,`mp_mpl_constreview`,`mp_mpl_score`,`mp_mpl_status`,`cdate`,`mdate`) values (1,1,'{\"govreview_1\":\"2\",\"govreview_2\":\"5\",\"govreview_3\":\"1\",\"govreview_4\":\"1\",\"govreview_5\":\"1\",\"govreview_6\":\"1\",\"govreview_7\":\"1\",\"govreview_8\":\"1\",\"govreview_9\":\"1\",\"govreview_10\":\"1\"}','{\"mp_mpl_govpr_libele_1\":{\"section_0\":[{\"committee\":\"cape town provincial\",\"meetings\":\"1\",\"attendance\":\"1\",\"rate_commitee\":\"2\"}],\"section_1\":[{\"topic\":\"conference debate\",\"rate_topic\":\"3\"}],\"section_2\":\"2\",\"section_3\":\"4\"},\"mp_mpl_govpr_libele_2\":{\"section_0\":\"4\",\"section_1\":\"3\",\"section_2\":\"2\",\"section_3\":\"3\",\"section_4\":\"4\"},\"mp_mpl_govpr_libele_3\":{\"section_0\":[{\"course\":\"qwqw\",\"rate_course\":\"1\"}]},\"mp_mpl_govpr_libele_4\":[{\"strength\":\"strong\",\"weakness\":\"faible\"}],\"mp_mpl_govpr_libele_5\":[{\"skill\":\"management\"}]}','{\"constreview_1\":\"2\",\"constreview_2\":\"4\",\"constreview_3\":\"1\",\"constreview_4\":\"1\",\"constreview_5\":\"1\",\"constreview_6\":\"1\",\"constreview_7\":\"1\",\"constreview_8\":\"1\",\"constreview_9\":\"1\",\"constreview_10\":\"5\"}',77,'completed','2015-04-15 11:01:25','2015-04-21 16:38:38'),(2,2,'{\"govreview_1\":\"2\",\"govreview_2\":\"5\",\"govreview_3\":\"1\",\"govreview_4\":\"1\",\"govreview_5\":\"1\",\"govreview_6\":\"1\",\"govreview_7\":\"1\",\"govreview_8\":\"1\",\"govreview_9\":\"1\",\"govreview_10\":\"1\"}','{\"mp_mpl_govpr_libele_1\":{\"section_0\":[{\"committee\":\"cape town provincial\",\"meetings\":\"1\",\"attendance\":\"1\",\"rate_commitee\":\"2\"}],\"section_1\":[{\"topic\":\"conference debate\",\"rate_topic\":\"3\"}],\"section_2\":\"2\",\"section_3\":\"4\"},\"mp_mpl_govpr_libele_2\":{\"section_0\":\"4\",\"section_1\":\"3\",\"section_2\":\"2\",\"section_3\":\"3\",\"section_4\":\"4\"},\"mp_mpl_govpr_libele_3\":{\"section_0\":[{\"course\":\"qwqw\",\"rate_course\":\"1\"}]},\"mp_mpl_govpr_libele_4\":[{\"strength\":\"strong\",\"weakness\":\"faible\"}],\"mp_mpl_govpr_libele_5\":[{\"skill\":\"management\"}]}','{\"constreview_1\":\"2\",\"constreview_2\":\"4\",\"constreview_3\":\"1\",\"constreview_4\":\"1\",\"constreview_5\":\"1\",\"constreview_6\":\"1\",\"constreview_7\":\"1\",\"constreview_8\":\"1\",\"constreview_9\":\"1\",\"constreview_10\":\"5\"}',NULL,NULL,'2015-04-15 21:41:23','2015-04-21 16:38:38'),(3,3,'{\"govreview_1\":\"2\",\"govreview_2\":\"5\",\"govreview_3\":\"1\",\"govreview_4\":\"1\",\"govreview_5\":\"1\",\"govreview_6\":\"1\",\"govreview_7\":\"1\",\"govreview_8\":\"1\",\"govreview_9\":\"1\",\"govreview_10\":\"1\"}','{\"mp_mpl_govpr_libele_1\":{\"section_0\":[{\"committee\":\"cape town provincial\",\"meetings\":\"1\",\"attendance\":\"1\",\"rate_commitee\":\"2\"}],\"section_1\":[{\"topic\":\"conference debate\",\"rate_topic\":\"3\"}],\"section_2\":\"2\",\"section_3\":\"4\"},\"mp_mpl_govpr_libele_2\":{\"section_0\":\"4\",\"section_1\":\"3\",\"section_2\":\"2\",\"section_3\":\"3\",\"section_4\":\"4\"},\"mp_mpl_govpr_libele_3\":{\"section_0\":[{\"course\":\"qwqw\",\"rate_course\":\"1\"}]},\"mp_mpl_govpr_libele_4\":[{\"strength\":\"strong\",\"weakness\":\"faible\"}],\"mp_mpl_govpr_libele_5\":[{\"skill\":\"management\"}]}','{\"constreview_1\":\"2\",\"constreview_2\":\"4\",\"constreview_3\":\"1\",\"constreview_4\":\"1\",\"constreview_5\":\"1\",\"constreview_6\":\"1\",\"constreview_7\":\"1\",\"constreview_8\":\"1\",\"constreview_9\":\"1\",\"constreview_10\":\"5\"}',NULL,NULL,'2015-04-15 21:41:29','2015-04-21 16:38:38'),(4,8,'{\"govreview_1\":\"4\",\"govreview_2\":\"3\",\"govreview_3\":\"3\",\"govreview_4\":\"3\",\"govreview_5\":\"2\",\"govreview_6\":\"2\",\"govreview_7\":\"3\",\"govreview_8\":\"2\",\"govreview_9\":\"3\",\"govreview_10\":\"3\"}','{\"mp_mpl_govpr_libele_1\":{\"section_0\":[{\"committee\":\"Tourism\",\"rate_commitee\":\"3\"}],\"section_1\":[{\"topic\":\"Debate in youth\",\"rate_topic\":\"5\"}],\"section_2\":\"3\",\"section_3\":\"4\"},\"mp_mpl_govpr_libele_2\":{\"section_0\":\"3\",\"section_1\":\"2\",\"section_2\":\"3\",\"section_3\":\"3\",\"section_4\":\"4\"},\"mp_mpl_govpr_libele_3\":{\"section_0\":[]},\"mp_mpl_govpr_libele_4\":[{\"strength\":\"Public Speaking\",\"weakness\":\"Failure to participate in ANC Branch works\"}],\"mp_mpl_govpr_libele_5\":[]}','{\"constreview_1\":\"2\",\"constreview_2\":\"4\",\"constreview_3\":\"3\",\"constreview_4\":\"3\",\"constreview_5\":\"4\",\"constreview_6\":\"2\",\"constreview_7\":\"2\",\"constreview_8\":\"4\",\"constreview_9\":\"3\",\"constreview_10\":\"4\"}',61,'pending','2015-05-08 10:15:42','2015-05-08 11:39:13');

/*Table structure for table `anc_municipality` */

DROP TABLE IF EXISTS `anc_municipality`;

CREATE TABLE `anc_municipality` (
  `id_municipality` int(11) NOT NULL AUTO_INCREMENT,
  `id_province` int(11) NOT NULL,
  `municipality_name` varchar(45) DEFAULT NULL,
  `municipality_status` char(1) DEFAULT '1',
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_municipality`)
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=latin1;

/*Data for the table `anc_municipality` */

insert  into `anc_municipality`(`id_municipality`,`id_province`,`municipality_name`,`municipality_status`,`cdate`,`mdate`) values (1,1,'BUF - Buffalo City Metropolitan Municipality ','1','2015-04-20 01:20:36',NULL),(2,1,'DC10 - Cacadu [Western District]\n','1','2015-04-20 01:20:36',NULL),(3,1,'DC12 - Amatole [Amatola District]\n','1','2015-04-20 01:20:36',NULL),(4,1,'DC13 - Chris Hani [Stormberg District]\n','1','2015-04-20 01:20:36',NULL),(5,1,'DC14 - Joe Gqabi [Drakensberg District]\n','1','2015-04-20 01:20:36',NULL),(6,1,'DC15 - O R Tambo [Transkei District]\n','1','2015-04-20 01:20:36',NULL),(7,1,'DC44 - Alfred Nzo\n','1','2015-04-20 01:20:36',NULL),(8,1,'EC101 - Camdeboo [Graaff-Reinet]\n','1','2015-04-20 01:20:36',NULL),(9,1,'EC102 - Blue Crane Route [Somerset East]\n','1','2015-04-20 01:20:36',NULL),(10,1,'EC103 - Ikwezi [Jansenville]\n','1','2015-04-20 01:20:36',NULL),(11,1,'EC104 - Makana [Grahamstown]\n','1','2015-04-20 01:20:37',NULL),(12,1,'EC105 - Ndlambe [Port Alfred]\n','1','2015-04-20 01:20:37',NULL),(13,1,'EC106 - Sundays River Valley [Kirkwood]\n','1','2015-04-20 01:20:37',NULL),(14,1,'EC107 - Baviaans [Willowmore]\n','1','2015-04-20 01:20:37',NULL),(15,1,'EC108 - Kouga [Humansdorp]\n','1','2015-04-20 01:20:37',NULL),(16,1,'EC109 - Kou-Kamma [Kareedouw]\n','1','2015-04-20 01:20:37',NULL),(17,1,'EC121 - Mbhashe [Idutywa]\n','1','2015-04-20 01:20:37',NULL),(18,1,'EC122 - Mnquma [Butterworth]\n','1','2015-04-20 01:20:37',NULL),(19,1,'EC123 - Great Kei [Komga]\n','1','2015-04-20 01:20:37',NULL),(20,1,'EC124 - Amahlathi [Stutterheim]\n','1','2015-04-20 01:20:37',NULL),(21,1,'EC126 - Ngqushwa [Peddie]\n','1','2015-04-20 01:20:37',NULL),(22,1,'EC127 - Nkonkobe [Alice]\n','1','2015-04-20 01:20:37',NULL),(23,1,'EC128 - Nxuba [Adelaide]\n','1','2015-04-20 01:20:37',NULL),(24,1,'EC131 - Inxuba Yethemba [Cradock]\n','1','2015-04-20 01:20:37',NULL),(25,1,'EC132 - Tsolwana [Tarkastad]\n','1','2015-04-20 01:20:37',NULL),(26,1,'EC133 - Inkwanca [Molteno]\n','1','2015-04-20 01:20:37',NULL),(27,1,'EC134 - Lukhanji [Queenstown]\n','1','2015-04-20 01:20:37',NULL),(28,1,'EC135 - Intsika Yethu [Cofimvaba]\n','1','2015-04-20 01:20:37',NULL),(29,1,'EC136 - Emalahleni [Lady Frere]\n','1','2015-04-20 01:20:38',NULL),(30,1,'EC137 - Engcobo [Engcobo]\n','1','2015-04-20 01:20:38',NULL),(31,1,'EC138 - Sakhisizwe [Elliot]\n','1','2015-04-20 01:20:38',NULL),(32,1,'EC141 - Elundini [Mount Fletcher]\n','1','2015-04-20 01:20:38',NULL),(33,1,'EC142 - Senqu [Barkly East]\n','1','2015-04-20 01:20:38',NULL),(34,1,'EC143 - Maletswai [Aliwal North]\n','1','2015-04-20 01:20:38',NULL),(35,1,'EC144 - Gariep [Burgersdorp]\n','1','2015-04-20 01:20:38',NULL),(36,1,'EC153 - Ngquza Hill [Flagstaff]\n','1','2015-04-20 01:20:38',NULL),(37,1,'EC154 - Port St Johns [Port St Johns]\n','1','2015-04-20 01:20:38',NULL),(38,1,'EC155 - Nyandeni [Libode]\n','1','2015-04-20 01:20:38',NULL),(39,1,'EC156 - Mhlontlo [Qumbu]\n','1','2015-04-20 01:20:38',NULL),(40,1,'EC157 - King Sabata Dalindyebo [Umtata]\n','1','2015-04-20 01:20:38',NULL),(41,1,'EC441 - Matatiele [Matatiele]\n','1','2015-04-20 01:20:38',NULL),(42,1,'EC442 - Umzimvubu [Mount Ayliff]\n','1','2015-04-20 01:20:38',NULL),(43,1,'EC443 - Mbizana [Bizana]\n','1','2015-04-20 01:20:38',NULL),(44,1,'EC444 - Ntabankulu [Ntabankulu]\n','1','2015-04-20 01:20:38',NULL),(45,1,'NMA - Nelson Mandela Bay [Port Elizabeth]\n','1','2015-04-20 01:20:38',NULL),(46,2,'DC16 - Xhariep\n','1','2015-04-20 01:20:39',NULL),(47,2,'DC18 - Lejweleputswa\n','1','2015-04-20 01:20:39',NULL),(48,2,'DC19 - Thabo Mofutsanyane\n','1','2015-04-20 01:20:39',NULL),(49,2,'DC20 - Fezile Dabi [Northern Free State]\n','1','2015-04-20 01:20:39',NULL),(50,2,'FS161 - Letsemeng [Koffiefontein]\n','1','2015-04-20 01:20:39',NULL),(51,2,'FS162 - Kopanong [Trompsburg]\n','1','2015-04-20 01:20:39',NULL),(52,2,'FS163 - Mohokare [Zastron]\n','1','2015-04-20 01:20:39',NULL),(53,2,'FS164 - Naledi [Dewetsdorp]\n','1','2015-04-20 01:20:39',NULL),(54,2,'FS181 - Masilonyana [Theunissen]\n','1','2015-04-20 01:20:39',NULL),(55,2,'FS182 - Tokologo [Dealesville]\n','1','2015-04-20 01:20:39',NULL),(56,2,'FS183 - Tswelopele [Hoopstad]\n','1','2015-04-20 01:20:39',NULL),(57,2,'FS184 - Matjhabeng [Welkom]\n','1','2015-04-20 01:20:39',NULL),(58,2,'FS185 - Nala [Bothaville]\n','1','2015-04-20 01:20:39',NULL),(59,2,'FS191 - Setsoto [Senekal]\n','1','2015-04-20 01:20:39',NULL),(60,2,'FS192 - Dihlabeng [Bethlehem]\n','1','2015-04-20 01:20:39',NULL),(61,2,'FS193 - Nketoana [Reitz]\n','1','2015-04-20 01:20:40',NULL),(62,2,'FS194 - Maluti a Phofung [Qwa-Qwa]\n','1','2015-04-20 01:20:40',NULL),(63,2,'FS195 - Phumelela [Vrede]\n','1','2015-04-20 01:20:40',NULL),(64,2,'FS196 - Mantsopa [Ladybrand]\n','1','2015-04-20 01:20:40',NULL),(65,2,'FS201 - Moqhaka [Kroonstad]\n','1','2015-04-20 01:20:40',NULL),(66,2,'FS203 - Ngwathe [Parys]\n','1','2015-04-20 01:20:40',NULL),(67,2,'FS204 - Metsimaholo [Sasolburg]\n','1','2015-04-20 01:20:40',NULL),(68,2,'FS205 - Mafube [Frankfort]\n','1','2015-04-20 01:20:40',NULL),(69,2,'MAN - Mangaung Metropolitan Municipality [Blo','1','2015-04-20 01:20:40',NULL),(70,3,'DC42 - Sedibeng\n','1','2015-04-20 01:20:40',NULL),(71,3,'DC48 - West Rand\n','1','2015-04-20 01:20:40',NULL),(72,3,'EKU - Ekurhuleni [East Rand]\n','1','2015-04-20 01:20:40',NULL),(73,3,'GT421 - Emfuleni [Vereeniging]\n','1','2015-04-20 01:20:40',NULL),(74,3,'GT422 - Midvaal [Meyerton]\n','1','2015-04-20 01:20:40',NULL),(75,3,'GT423 - Lesedi [Heidelberg]\n','1','2015-04-20 01:20:40',NULL),(76,3,'GT481 - Mogale City [Krugersdorp]\n','1','2015-04-20 01:20:40',NULL),(77,3,'GT482 - Randfontein [Randfontein]\n','1','2015-04-20 01:20:40',NULL),(78,3,'GT483 - Westonaria [Westonaria]\n','1','2015-04-20 01:20:40',NULL),(79,3,'GT484 - Merafong City [Carletonville]\n','1','2015-04-20 01:20:40',NULL),(80,3,'JHB - City of Johannesburg [Johannesburg]\n','1','2015-04-20 01:20:40',NULL),(81,3,'TSH - Tshwane Metro [Pretoria]\n','1','2015-04-20 01:20:40',NULL),(82,4,'DC21 - Ugu [Ugu DC]\n','1','2015-04-20 01:20:41',NULL),(83,4,'DC22 - UMgungundlovu [Indlovu DC]\n','1','2015-04-20 01:20:41',NULL),(84,4,'DC23 - Uthukela [Uthukela DC]\n','1','2015-04-20 01:20:41',NULL),(85,4,'DC24 - Umzinyathi [(South) Umzinyathi DC]\n','1','2015-04-20 01:20:41',NULL),(86,4,'DC25 - Amajuba [North Umzimyathi]\n','1','2015-04-20 01:20:41',NULL),(87,4,'DC26 - Zululand [Zululand DC]\n','1','2015-04-20 01:20:41',NULL),(88,4,'DC27 - Umkhanyakude [North Uthungulu]\n','1','2015-04-20 01:20:41',NULL),(89,4,'DC28 - Uthungulu [(South) Uthungulu DC]\n','1','2015-04-20 01:20:41',NULL),(90,4,'DC29 - iLembe [iLembe DC]\n','1','2015-04-20 01:20:41',NULL),(91,4,'DC43 - Sisonke [East Griqualand]\n','1','2015-04-20 01:20:41',NULL),(92,4,'ETH - eThekwini [Durban Metro]\n','1','2015-04-20 01:20:41',NULL),(93,4,'KZN211 - Vulamehlo [Dududu]\n','1','2015-04-20 01:20:41',NULL),(94,4,'KZN212 - Umdoni [Scottburgh]\n','1','2015-04-20 01:20:41',NULL),(95,4,'KZN213 - Umzumbe [Umzumbe]\n','1','2015-04-20 01:20:41',NULL),(96,4,'KZN214 - UMuziwabantu [Harding]\n','1','2015-04-20 01:20:41',NULL),(97,4,'KZN215 - Ezinqoleni [Izinqolweni]\n','1','2015-04-20 01:20:42',NULL),(98,4,'KZN216 - Hibiscus Coast [Port Shepstone]\n','1','2015-04-20 01:20:42',NULL),(99,4,'KZN221 - uMshwathi [Wartburg]\n','1','2015-04-20 01:20:42',NULL),(100,4,'KZN222 - uMngeni [Howick]\n','1','2015-04-20 01:20:42',NULL),(101,4,'KZN223 - Mooi Mpofana [Mooirivier]\n','1','2015-04-20 01:20:42',NULL),(102,4,'KZN224 - Impendle [Impendle]\n','1','2015-04-20 01:20:42',NULL),(103,4,'KZN225 - Msunduzi [Pietermaritzburg]\n','1','2015-04-20 01:20:42',NULL),(104,4,'KZN226 - Mkhambathini [Camperdown]\n','1','2015-04-20 01:20:42',NULL),(105,4,'KZN227 - Richmond [Richmond]\n','1','2015-04-20 01:20:42',NULL),(106,4,'KZN232 - Emnambithi/Ladysmith [Ladysmith]\n','1','2015-04-20 01:20:42',NULL),(107,4,'KZN233 - Indaka [Waaihoek]\n','1','2015-04-20 01:20:42',NULL),(108,4,'KZN234 - Umtshezi [Estcourt]\n','1','2015-04-20 01:20:42',NULL),(109,4,'KZN235 - Okhahlamba [Bergville]\n','1','2015-04-20 01:20:42',NULL),(110,4,'KZN236 - Imbabazane [Loskop]\n','1','2015-04-20 01:20:42',NULL),(111,4,'KZN241 - Endumeni [Dundee]\n','1','2015-04-20 01:20:42',NULL),(112,4,'KZN242 - Nqutu [Nqutu]\n','1','2015-04-20 01:20:43',NULL),(113,4,'KZN244 - Msinga [Pomeroy]\n','1','2015-04-20 01:20:43',NULL),(114,4,'KZN245 - Umvoti [Greytown]\n','1','2015-04-20 01:20:43',NULL),(115,4,'KZN252 - Newcastle [Newcastle]\n','1','2015-04-20 01:20:43',NULL),(116,4,'KZN253 - eMadlangeni [Utrecht]\n','1','2015-04-20 01:20:43',NULL),(117,4,'KZN254 - Dannhauser [Durnacol]\n','1','2015-04-20 01:20:43',NULL),(118,4,'KZN261 - eDumbe [Paulpietersburg]\n','1','2015-04-20 01:20:43',NULL),(119,4,'KZN262 - UPhongolo [Pongola]\n','1','2015-04-20 01:20:43',NULL),(120,4,'KZN263 - Abaqulusi [Vryheid]\n','1','2015-04-20 01:20:43',NULL),(121,4,'KZN265 - Nongoma [Nongoma]\n','1','2015-04-20 01:20:43',NULL),(122,4,'KZN266 - Ulundi [Ulundi]\n','1','2015-04-20 01:20:43',NULL),(123,4,'KZN271 - Umhlabuyalingana [Emangusi]\n','1','2015-04-20 01:20:43',NULL),(124,4,'KZN272 - Jozini [Mkuze]\n','1','2015-04-20 01:20:43',NULL),(125,4,'KZN273 - The Big 5 False Bay [Hluhluwe]\n','1','2015-04-20 01:20:43',NULL),(126,4,'KZN274 - Hlabisa [Somkele]\n','1','2015-04-20 01:20:43',NULL),(127,4,'KZN275 - Mtubatuba [Mtubatuba]\n','1','2015-04-20 01:20:43',NULL),(128,4,'KZN281 - Mfolozi [KwaMbonambi]\n','1','2015-04-20 01:20:43',NULL),(129,4,'KZN282 - uMhlathuze [Richards Bay]\n','1','2015-04-20 01:20:43',NULL),(130,4,'KZN283 - Ntambana [Ntambana]\n','1','2015-04-20 01:20:43',NULL),(131,4,'KZN284 - uMlalazi [Eshowe]\n','1','2015-04-20 01:20:43',NULL),(132,4,'KZN285 - Mthonjaneni [Melmoth]\n','1','2015-04-20 01:20:44',NULL),(133,4,'KZN286 - Nkandla [Nkandla]\n','1','2015-04-20 01:20:44',NULL),(134,4,'KZN291 - Mandeni [Mandeni]\n','1','2015-04-20 01:20:44',NULL),(135,4,'KZN292 - KwaDukuza [Stanger]\n','1','2015-04-20 01:20:44',NULL),(136,4,'KZN293 - Ndwedwe [Ndwedwe]\n','1','2015-04-20 01:20:44',NULL),(137,4,'KZN294 - Maphumulo [Maphumulo]\n','1','2015-04-20 01:20:44',NULL),(138,4,'KZN431 - Ingwe [Creighton]\n','1','2015-04-20 01:20:44',NULL),(139,4,'KZN432 - Kwa Sani [Underberg]\n','1','2015-04-20 01:20:44',NULL),(140,4,'KZN433 - Greater Kokstad [Kokstad]\n','1','2015-04-20 01:20:44',NULL),(141,4,'KZN434 - Ubuhlebezwe [Ixopo]\n','1','2015-04-20 01:20:44',NULL),(142,4,'KZN435 - Umzimkhulu [Umzimkulu]\n','1','2015-04-20 01:20:44',NULL),(143,5,'DC33 - Mopani [Lowveld]\n','1','2015-04-20 01:20:44',NULL),(144,5,'DC34 - Vhembe [Far North]\n','1','2015-04-20 01:20:45',NULL),(145,5,'DC35 - Capricorn [Central]\n','1','2015-04-20 01:20:45',NULL),(146,5,'DC36 - Waterberg [Bosveld]\n','1','2015-04-20 01:20:45',NULL),(147,5,'DC47 - Sekhukhune [Southern]\n','1','2015-04-20 01:20:45',NULL),(148,5,'LIM331 - Greater Giyani [Giyani]\n','1','2015-04-20 01:20:45',NULL),(149,5,'LIM332 - Greater Letaba [Duiwelskloof]\n','1','2015-04-20 01:20:45',NULL),(150,5,'LIM333 - Greater Tzaneen [Tzaneen]\n','1','2015-04-20 01:20:45',NULL),(151,5,'LIM334 - Ba-Phalaborwa [Phalaborwa]\n','1','2015-04-20 01:20:45',NULL),(152,5,'LIM335 - Maruleng [Hoedspruit]\n','1','2015-04-20 01:20:45',NULL),(153,5,'LIM341 - Musina [Messina]\n','1','2015-04-20 01:20:45',NULL),(154,5,'LIM342 - Mutale [Mutale-Masisi]\n','1','2015-04-20 01:20:45',NULL),(155,5,'LIM343 - Thulamela [Thohoyandou]\n','1','2015-04-20 01:20:45',NULL),(156,5,'LIM344 - Makhado [Louis Trichardt]\n','1','2015-04-20 01:20:45',NULL),(157,5,'LIM351 - Blouberg [Bochum/My Darling]\n','1','2015-04-20 01:20:45',NULL),(158,5,'LIM352 - Aganang [Moletji/Matlala]\n','1','2015-04-20 01:20:45',NULL),(159,5,'LIM353 - Molemole [Dendron/Dikgale]\n','1','2015-04-20 01:20:45',NULL),(160,5,'LIM354 - Polokwane [Pietersburg]\n','1','2015-04-20 01:20:46',NULL),(161,5,'LIM355 - Lepele-Nkumpi [Lebowakgomo]\n','1','2015-04-20 01:20:46',NULL),(162,5,'LIM361 - Thabazimbi [Thabazimbi]\n','1','2015-04-20 01:20:46',NULL),(163,5,'LIM362 - Lephalale [Ellisras]\n','1','2015-04-20 01:20:46',NULL),(164,5,'LIM364 - Mookgopong [Naboomspruit]\n','1','2015-04-20 01:20:46',NULL),(165,5,'LIM365 - Modimolle [Nylstroom]\n','1','2015-04-20 01:20:46',NULL),(166,5,'LIM366 - Bela-Bela [Warmbad]\n','1','2015-04-20 01:20:46',NULL),(167,5,'LIM367 - Mogalakwena [Potgietersrus]\n','1','2015-04-20 01:20:46',NULL),(168,5,'LIM471 - Greater Marble Hall [Marble Hall]\n','1','2015-04-20 01:20:46',NULL),(169,5,'LIM472 - Elias Motsoaledi [Groblersdal]\n','1','2015-04-20 01:20:46',NULL),(170,5,'LIM473 - Makhuduthamaga [Ngwaritsi]\n','1','2015-04-20 01:20:46',NULL),(171,5,'LIM474 - Fetakgomo [Fetakgomo ]\n','1','2015-04-20 01:20:46',NULL),(172,5,'LIM475 - Greater Tubatse [Burgersfort/Ohrigst','1','2015-04-20 01:20:47',NULL),(173,6,'DC30 - Gert Sibande [Eastvaal District Counci','1','2015-04-20 01:20:47',NULL),(174,6,'DC31 - Nkangala\n','1','2015-04-20 01:20:47',NULL),(175,6,'DC32 - Ehlanzeni\n','1','2015-04-20 01:20:47',NULL),(176,6,'MP301 - Albert Luthuli [Elukwatini/Carolina]\n','1','2015-04-20 01:20:47',NULL),(177,6,'MP302 - Msukaligwa [Ermelo]\n','1','2015-04-20 01:20:47',NULL),(178,6,'MP303 - Mkhondo [Piet Retief]\n','1','2015-04-20 01:20:47',NULL),(179,6,'MP304 - Pixley Ka Seme [Volksrust]\n','1','2015-04-20 01:20:47',NULL),(180,6,'MP305 - Lekwa [Standerton]\n','1','2015-04-20 01:20:47',NULL),(181,6,'MP306 - Dipaleseng [Balfour]\n','1','2015-04-20 01:20:47',NULL),(182,6,'MP307 - Govan Mbeki [Highveld Ridge]\n','1','2015-04-20 01:20:47',NULL),(183,6,'MP311 - Delmas [Delmas]\n','1','2015-04-20 01:20:47',NULL),(184,6,'MP312 - Emalahleni [Witbank]\n','1','2015-04-20 01:20:47',NULL),(185,6,'MP313 - Steve Tshwete [Middelburg]\n','1','2015-04-20 01:20:47',NULL),(186,6,'MP314 - Emakhazeni [Belfast]\n','1','2015-04-20 01:20:48',NULL),(187,6,'MP315 - Thembisile [KwaMhlanga]\n','1','2015-04-20 01:20:48',NULL),(188,6,'MP316 - Dr JS Moroka [Mdutjana]\n','1','2015-04-20 01:20:48',NULL),(189,6,'MP321 - Thaba Chweu [Sabie]\n','1','2015-04-20 01:20:48',NULL),(190,6,'MP322 - Mbombela [Nelspruit]\n','1','2015-04-20 01:20:48',NULL),(191,6,'MP323 - Umjindi [Barberton]\n','1','2015-04-20 01:20:49',NULL),(192,6,'MP324 - Nkomazi [Nkomazi]\n','1','2015-04-20 01:20:49',NULL),(193,6,'MP325 - Bushbuckridge [Bushbuckridge]\n','1','2015-04-20 01:20:49',NULL),(194,7,'DC37 - Bojanala\n','1','2015-04-20 01:20:49',NULL),(195,7,'DC38 - Ngaka Modiri Molema\n','1','2015-04-20 01:20:49',NULL),(196,7,'DC39 - Dr Ruth Segomotsi Mompati [Bophirima]\n','1','2015-04-20 01:20:49',NULL),(197,7,'DC40 - Dr Kenneth Kaunda [Southern DC]\n','1','2015-04-20 01:20:49',NULL),(198,7,'NW371 - Moretele [Temba]\n','1','2015-04-20 01:20:49',NULL),(199,7,'NW372 - Madibeng [Brits]\n','1','2015-04-20 01:20:49',NULL),(200,7,'NW373 - Rustenburg [Rustenburg]\n','1','2015-04-20 01:20:49',NULL),(201,7,'NW374 - Kgetlengrivier [Koster]\n','1','2015-04-20 01:20:49',NULL),(202,7,'NW375 - Moses Kotane [Mogwase]\n','1','2015-04-20 01:20:50',NULL),(203,7,'NW381 - Ratlou [Setlagole]\n','1','2015-04-20 01:20:50',NULL),(204,7,'NW382 - Tswaing [Delareyville]\n','1','2015-04-20 01:20:50',NULL),(205,7,'NW383 - Mafikeng [Mafikeng]\n','1','2015-04-20 01:20:50',NULL),(206,7,'NW384 - Ditsobotla [Lichtenburg]\n','1','2015-04-20 01:20:50',NULL),(207,7,'NW385 - Ramotshere Moiloa [Zeerust]\n','1','2015-04-20 01:20:50',NULL),(208,7,'NW392 - Naledi [Vryburg]\n','1','2015-04-20 01:20:50',NULL),(209,7,'NW393 - Mamusa [Schweizer-Reneke]\n','1','2015-04-20 01:20:50',NULL),(210,7,'NW394 - Greater Taung [Reivilo]\n','1','2015-04-20 01:20:50',NULL),(211,7,'NW396 - Lekwa-Teemane [Christiana]\n','1','2015-04-20 01:20:50',NULL),(212,7,'NW397 - NW397 Local Municipality [Ganyesa/Pom','1','2015-04-20 01:20:50',NULL),(213,7,'NW401 - Ventersdorp [Ventersdorp]\n','1','2015-04-20 01:20:50',NULL),(214,7,'NW402 - Potchefstroom [Potchefstroom]\n','1','2015-04-20 01:20:50',NULL),(215,7,'NW403 - Matlosana [Klerksdorp]\n','1','2015-04-20 01:20:50',NULL),(216,7,'NW404 - Maquassi Hills [Wolmaransstad]\n','1','2015-04-20 01:20:50',NULL),(217,8,'DC45 - John Taolo Gaetsewe [Kgalagadi Distric','1','2015-04-20 01:20:50',NULL),(218,8,'DC6 - NAMAKWA\n','1','2015-04-20 01:20:51',NULL),(219,8,'DC7 - Pixley Ka Seme [Bo-Karoo]\n','1','2015-04-20 01:20:51',NULL),(220,8,'DC8 - SIYANDA [Benede Oranje]\n','1','2015-04-20 01:20:51',NULL),(221,8,'DC9 - FRANCES BAARD [Diamandveld]\n','1','2015-04-20 01:20:51',NULL),(222,8,'NC061 - RICHTERSVELD [Port Nolloth]\n','1','2015-04-20 01:20:51',NULL),(223,8,'NC062 - NAMA KHOI [Springbok]\n','1','2015-04-20 01:20:51',NULL),(224,8,'NC064 - KAMIESBERG [Garies]\n','1','2015-04-20 01:20:51',NULL),(225,8,'NC065 - HANTAM [Calvinia]\n','1','2015-04-20 01:20:51',NULL),(226,8,'NC066 - KAROO HOOGLAND [Fraserburg]\n','1','2015-04-20 01:20:51',NULL),(227,8,'NC067 - KHÃ¢I-MA [Pofadder]\n','1','2015-04-20 01:20:51',NULL),(228,8,'NC071 - UBUNTU [Victoria West]\n','1','2015-04-20 01:20:51',NULL),(229,8,'NC072 - UMSOBOMVU [Colesberg]\n','1','2015-04-20 01:20:51',NULL),(230,8,'NC073 - EMTHANJENI [De Aar]\n','1','2015-04-20 01:20:51',NULL),(231,8,'NC074 - KAREEBERG [Carnarvon]\n','1','2015-04-20 01:20:51',NULL),(232,8,'NC075 - RENOSTERBERG [Phillipstown]\n','1','2015-04-20 01:20:51',NULL),(233,8,'NC076 - THEMBELIHLE [Hopetown]\n','1','2015-04-20 01:20:52',NULL),(234,8,'NC077 - SIYATHEMBA [Prieska]\n','1','2015-04-20 01:20:52',NULL),(235,8,'NC078 - SIYANCUMA [Griekwastad]\n','1','2015-04-20 01:20:52',NULL),(236,8,'NC081 - MIER [Mier]\n','1','2015-04-20 01:20:52',NULL),(237,8,'NC082 - KAI !GARIB [Keimoes]\n','1','2015-04-20 01:20:52',NULL),(238,8,'NC083 - KHARA HAIS [Upington]\n','1','2015-04-20 01:20:52',NULL),(239,8,'NC084 - !KHEIS [Groblershoop]\n','1','2015-04-20 01:20:52',NULL),(240,8,'NC085 - TSANTSABANE [Postmasburg]\n','1','2015-04-20 01:20:52',NULL),(241,8,'NC086 - KGATELOPELE [Danielskuil]\n','1','2015-04-20 01:20:52',NULL),(242,8,'NC091 - Sol Plaatje [Kimberley]\n','1','2015-04-20 01:20:52',NULL),(243,8,'NC092 - Dikgatlong [Barkley West]\n','1','2015-04-20 01:20:52',NULL),(244,8,'NC093 - Magareng [Warrenton]\n','1','2015-04-20 01:20:52',NULL),(245,8,'NC094 - Phokwane [Hartswater]\n','1','2015-04-20 01:20:52',NULL),(246,8,'NC451 - Joe Morolong [Kgalagadi]\n','1','2015-04-20 01:20:52',NULL),(247,8,'NC452 - GA-SEGONYANA [Kuruman]\n','1','2015-04-20 01:20:52',NULL),(248,8,'NC453 - GAMAGARA [Kathu]\n','1','2015-04-20 01:20:53',NULL),(249,9,'CPT - City of Cape Town [Cape Town]\n','1','2015-04-20 01:20:53',NULL),(250,9,'DC1 - West Coast [West Coast DC]\n','1','2015-04-20 01:20:53',NULL),(251,9,'DC2 - Cape Winelands [Brede River DC]\n','1','2015-04-20 01:20:53',NULL),(252,9,'DC3 - Overberg [Overberg DC]\n','1','2015-04-20 01:20:53',NULL),(253,9,'DC4 - Eden [South Cape DC]\n','1','2015-04-20 01:20:53',NULL),(254,9,'DC5 - Central Karoo [Central Karoo DC]\n','1','2015-04-20 01:20:53',NULL),(255,9,'WC011 - Matzikama [Vredendal]\n','1','2015-04-20 01:20:53',NULL),(256,9,'WC012 - Cederberg [Citrusdal]\n','1','2015-04-20 01:20:53',NULL),(257,9,'WC013 - Bergrivier [Velddrif]\n','1','2015-04-20 01:20:53',NULL),(258,9,'WC014 - Saldanha Bay [West Coast Peninsula]\n','1','2015-04-20 01:20:53',NULL),(259,9,'WC015 - Swartland [Malmesbury]\n','1','2015-04-20 01:20:53',NULL),(260,9,'WC022 - Witzenberg [Ceres]\n','1','2015-04-20 01:20:53',NULL),(261,9,'WC023 - Drakenstein [Paarl]\n','1','2015-04-20 01:20:54',NULL),(262,9,'WC024 - Stellenbosch [Stellenbosch]\n','1','2015-04-20 01:20:54',NULL),(263,9,'WC025 - Breede Valley [Worcester]\n','1','2015-04-20 01:20:54',NULL),(264,9,'WC026 - Langeberg [Robertson]\n','1','2015-04-20 01:20:54',NULL),(265,9,'WC031 - Theewaterskloof [Caledon]\n','1','2015-04-20 01:20:54',NULL),(266,9,'WC032 - Overstrand [Greater Hermanus]\n','1','2015-04-20 01:20:54',NULL),(267,9,'WC033 - Cape Agulhas [Bredasdorp]\n','1','2015-04-20 01:20:54',NULL),(268,9,'WC034 - Swellendam [Barrydale/Swellendam ]\n','1','2015-04-20 01:20:54',NULL),(269,9,'WC041 - Kannaland [Ladismith]\n','1','2015-04-20 01:20:54',NULL),(270,9,'WC042 - Hessequa [Heidelberg/Riversdale]\n','1','2015-04-20 01:20:54',NULL),(271,9,'WC043 - Mossel Bay [Mossel Bay]\n','1','2015-04-20 01:20:54',NULL),(272,9,'WC044 - George [George]\n','1','2015-04-20 01:20:54',NULL),(273,9,'WC045 - Oudtshoorn [Oudtshoorn]\n','1','2015-04-20 01:20:54',NULL),(274,9,'WC047 - Bitou [Greater Plettenberg Bay]\n','1','2015-04-20 01:20:54',NULL),(275,9,'WC048 - Knysna [Knysna]\n','1','2015-04-20 01:20:54',NULL),(276,9,'WC051 - Laingsburg [Laingsburg]\n','1','2015-04-20 01:20:54',NULL),(277,9,'WC052 - Prince Albert [Prins Albert]\n','1','2015-04-20 01:20:55',NULL),(278,9,'WC053 - Beaufort West [Beaufort West]\n','1','2015-04-20 01:20:55',NULL);

/*Table structure for table `anc_ovpefrating` */

DROP TABLE IF EXISTS `anc_ovpefrating`;

CREATE TABLE `anc_ovpefrating` (
  `id_ovpefrating` int(11) NOT NULL AUTO_INCREMENT,
  `ovpefrating_libele` varchar(45) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_ovpefrating`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `anc_ovpefrating` */

insert  into `anc_ovpefrating`(`id_ovpefrating`,`ovpefrating_libele`,`cdate`,`mdate`) values (1,'OUTSTANDING PERFORMANCE','2015-04-15 22:05:33',NULL),(2,'COMMENDABLE PERFORMANCE','2015-04-15 22:05:35',NULL),(3,'SATISFACTORY PERFORMANCE','2015-04-15 22:05:38',NULL),(4,'MARGINAL PERFORMANCE','2015-04-15 22:05:43',NULL),(5,'UNSATISFACTORY PERFORMANCE','2015-04-15 22:05:46',NULL);

/*Table structure for table `anc_profile` */

DROP TABLE IF EXISTS `anc_profile`;

CREATE TABLE `anc_profile` (
  `id_administartor_profile` int(11) NOT NULL AUTO_INCREMENT,
  `id_administrator` int(11) NOT NULL,
  `id_chiefwhip` int(11) DEFAULT NULL,
  `profile_gender` varchar(45) DEFAULT NULL,
  `profile_postalcode` varchar(45) DEFAULT NULL,
  `profile_home_address` varchar(45) DEFAULT NULL,
  `profile_work_address` varchar(45) DEFAULT NULL,
  `profile_postal_address` varchar(45) DEFAULT NULL,
  `profile_phone` tinytext COMMENT 'json of phone details',
  `profile_email` tinytext COMMENT 'json of email details',
  `profile_socialnetwork` tinytext COMMENT 'json of social network contatact',
  `profile_parliament` varchar(45) DEFAULT NULL,
  `id_provincial_legislature` int(11) DEFAULT NULL,
  `id_municipality` int(11) DEFAULT NULL,
  `profile_academic` text COMMENT 'json of qualification',
  `profile_employement` text COMMENT 'json of employment',
  `profile_ancmember` text COMMENT 'json of membership details',
  `profile_leaderposition` text,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_administartor_profile`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `anc_profile` */

insert  into `anc_profile`(`id_administartor_profile`,`id_administrator`,`id_chiefwhip`,`profile_gender`,`profile_postalcode`,`profile_home_address`,`profile_work_address`,`profile_postal_address`,`profile_phone`,`profile_email`,`profile_socialnetwork`,`profile_parliament`,`id_provincial_legislature`,`id_municipality`,`profile_academic`,`profile_employement`,`profile_ancmember`,`profile_leaderposition`,`cdate`,`mdate`) values (1,1,4,'M','7460','B40 First on Forest Drive','B40 First on Forest Drive','B40 First on Forest Drive','{\"profile_home_telephone\":\"\",\"profile_work_telephone\":\"\",\"profile_mobile\":\"0733457332\"}',NULL,'{\"profile_bbm\":\"\",\"profile_twitter\":\"\",\"profile_facebook\":\"\"}','National Council of Provinces',9,249,'{\"academic\":[]}','{\"employment\":[]}','{\"ancmember_number\":\"ANC733457332\",\"ancmember_branch\":\"kwazulu\",\"ancmember_province\":\"Western Cape\",\"ancmember_region\":\"Capetown\"}','[]',NULL,'2015-04-22 11:02:56'),(2,2,NULL,NULL,NULL,NULL,NULL,NULL,'{\"profile_home_telephone\":\"\",\"profile_work_telephone\":\"\",\"profile_mobile\":\"\"}',NULL,'{\"profile_bbm\":\"\",\"profile_twitter\":\"\",\"profile_facebook\":\"\"}',NULL,NULL,249,'{\"academic\":[]}','{\"employment\":[]}','{\"ancmember_number\":\"\",\"ancmember_branch\":\"\",\"ancmember_province\":\"\",\"ancmember_region\":\"\"}','[]','2015-04-10 14:33:35',NULL),(3,0,NULL,NULL,NULL,NULL,NULL,NULL,'{\"profile_home_telephone\":\"\",\"profile_work_telephone\":\"\",\"profile_mobile\":\"\"}',NULL,'{\"profile_bbm\":\"\",\"profile_twitter\":\"\",\"profile_facebook\":\"\"}',NULL,NULL,NULL,'{\"academic\":[]}','{\"employment\":[]}','{\"ancmember_number\":\"\",\"ancmember_branch\":\"\",\"ancmember_province\":\"\",\"ancmember_region\":\"\"}','[]','2015-04-10 14:33:36',NULL),(5,6,0,'M','dfdf','dfdfdf',NULL,NULL,'{\"profile_home_telephone\":\"\",\"profile_work_telephone\":\"\",\"profile_mobile\":\"dfdf\"}',NULL,'{\"profile_bbm\":\"\",\"profile_twitter\":\"\",\"profile_facebook\":\"\"}','National Assembly',9,266,'{\"academic\":[]}','{\"employment\":[]}','{\"ancmember_number\":\"dfdf\",\"ancmember_branch\":\"dfdf\",\"ancmember_province\":\"Western Cape\",\"ancmember_region\":\"dfdff\"}','[]','2015-04-22 17:05:13','2015-04-22 17:07:12'),(6,8,4,'M','7460','B40 First on forest drive','thornton',NULL,'{\"profile_home_telephone\":\"+27744643722\",\"profile_work_telephone\":\"+27744643722\",\"profile_mobile\":\"+27744643722\"}',NULL,'{\"profile_bbm\":\"\",\"profile_twitter\":\"\",\"profile_facebook\":\"\"}','National Assembly',9,249,'{\"academic\":[]}','{\"employment\":[]}','{\"ancmember_number\":\"dss\",\"ancmember_branch\":\"dsd\",\"ancmember_province\":\"Western Cape\",\"ancmember_region\":\"sd\"}','[]','2015-05-04 16:09:59','2015-05-04 16:11:53');

/*Table structure for table `anc_province` */

DROP TABLE IF EXISTS `anc_province`;

CREATE TABLE `anc_province` (
  `id_province` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_province`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `anc_province` */

insert  into `anc_province`(`id_province`,`province_name`) values (1,'Eastern Cape'),(2,'Free State'),(3,'Gauteng'),(4,'KwaZulu-Natal'),(5,'Limpopo'),(6,'Mpumalanga'),(7,'Northern Cape'),(8,'North West'),(9,'Western Cape');

/*Table structure for table `anc_provsec_preview` */

DROP TABLE IF EXISTS `anc_provsec_preview`;

CREATE TABLE `anc_provsec_preview` (
  `id_provsec_preview` int(11) NOT NULL AUTO_INCREMENT,
  `provsec_preview_libele` varchar(500) DEFAULT NULL,
  `provsec_preview_status` char(1) DEFAULT '1',
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_provsec_preview`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `anc_provsec_preview` */

insert  into `anc_provsec_preview`(`id_provsec_preview`,`provsec_preview_libele`,`provsec_preview_status`,`cdate`,`mdate`) values (1,'Your overall assessment of the Councillor’s participation in his/her Local Branch with regards to meetings, reports, campaigns etc.','1',NULL,NULL),(2,'The Councillor’s ability in communicating the work of Parliament/Legislature to the Local Branch with regards','1',NULL,NULL),(3,'The Councillor’s role in leading campaigns in his/her Local Branch ie: elections','1',NULL,NULL),(4,'The Councillor’s participation in the work of the BEC of the Local Branch?','1',NULL,NULL),(5,'Has the Councillor directed the concerns and issues','1',NULL,NULL),(6,'Providing written reports to the BEC on their work in legislature on a monthly, quarterly basis etc.','1',NULL,NULL),(7,'Leading community engagement through issues from Communities in respect of service delivery, Government support etc.','1',NULL,NULL),(8,'Engaging in the work of the REC and PEC, serving','1',NULL,NULL),(9,'Has the Councillor linked the work of their Local Branch and their Constituency Office in meeting the overall POA of the ANC in respect of the','1',NULL,NULL),(10,'Your overall assessment of the Councillor in terms of contributing and building the ANC in the province over the past','1',NULL,NULL);

/*Table structure for table `anc_provsec_preview_ass` */

DROP TABLE IF EXISTS `anc_provsec_preview_ass`;

CREATE TABLE `anc_provsec_preview_ass` (
  `id_provsec_preview_ass` int(11) NOT NULL AUTO_INCREMENT,
  `id_mp_mpl_govreview_ass` int(11) DEFAULT NULL,
  `id_administrator` int(11) NOT NULL,
  `provsec_preview` text,
  `provsec_ovpefrating` text,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_provsec_preview_ass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anc_provsec_preview_ass` */

/*Table structure for table `anc_rating_matrix` */

DROP TABLE IF EXISTS `anc_rating_matrix`;

CREATE TABLE `anc_rating_matrix` (
  `id_rating_matrix` int(11) NOT NULL AUTO_INCREMENT,
  `rating_matrix_libele` varchar(45) DEFAULT NULL,
  `rating_matrix_def` text,
  `rating_matrix_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_rating_matrix`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `anc_rating_matrix` */

insert  into `anc_rating_matrix`(`id_rating_matrix`,`rating_matrix_libele`,`rating_matrix_def`,`rating_matrix_status`,`cdate`,`mdate`) values (1,'Unsatisfactory\rPerformance','{\"0\":\"Performs unsatisfactorily on a continuous basis\", \"1\":\"Does not perform according to the set objectives\", \"2\":\"Displays no or very little improvement after training and developmen\", \"3\":\"Does not react or is very slow to react to reprimand.\", \"4\":\"There must be very good justification to retain in present deployment.\"}','1','2015-04-13 15:04:33',NULL),(2,'Marginal Performance','{\"0\":\"Does not fully deliver\", \"1\":\"The Public Representative may be in a new deployment, where the performance and potential did not show fully, as yet.\", \"2\":\"The expected result measured against performance ability is not yet reached.\",\"3\":\"If no improvement is noticed after training and development, then redeployment should be considered.\"}','1','2015-04-13 15:04:35',NULL),(3,'Satisfactory\rPerformance','{\"0\":\"Performance is fully effective.\", \"1\":\"Renders consistent performance as expected against set organizational targets\", \"2\":\"Tangible evidence shows that job key performance indicators have been met.\"}','1','2015-04-13 15:04:37',NULL),(4,'Commendable\rPerformance','{\"0\":\"Performance is significantly above expectations.\",\"1\":\"Renders performance that consistently exceeds performance targets.\", \"2\":\"Works independently and functions well within her/his mandate.\", \"3\":\"Willingly accepts extra responsibility and provides leadership/mentorship.\", \"4\":\"Public Relations demonstrates ability to perform work of a higher level.\", \"5\":\"Public Relations assigned more complex tasks and performs consistently well.\"}','1','2015-04-13 15:04:39',NULL),(5,'Outstanding Performance','{\"0\":\"Performance consistently far exceeds expectations.\", \"1\":\"Works independently and innovatively within organizational mandates.\", \"2\":\"Initiates and continuously refines work processes for efficiency and quality.\", \"3\":\"Willingly accepts/undertakes new responsibilities and functions not normally within his/her deployment specifications and performs at least satisfactorily.\", \"4\":\"Public Representative regularly performs work of a higher level.\", \"5\":\"Public Representative deployed to act at a senior level than his/her deployment and performance far exceeds expectations.\"}','1','2015-04-13 15:04:41',NULL);

/*Table structure for table `med_service` */

DROP TABLE IF EXISTS `med_service`;

CREATE TABLE `med_service` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `service_designation` varchar(64) DEFAULT NULL,
  `service_status` char(1) DEFAULT '1',
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `med_service` */

insert  into `med_service`(`id_service`,`service_designation`,`service_status`,`cdate`,`mdate`) values (1,'RESTAURANT','1','2014-08-19 13:41:50','2014-08-26 20:16:32'),(3,'PRESSING','1','2014-08-19 13:42:08','2014-08-19 16:53:29'),(4,'MASSAGE','1','2014-08-19 13:42:17',NULL),(5,'TRAINNING','1','2014-08-19 13:42:27',NULL),(6,'DSTV INSTALLATION','1','2014-08-19 13:42:42','2014-08-19 22:37:20'),(8,'EVENT MANAGEMENT','1','2014-08-19 13:43:06','2014-08-19 14:07:41'),(9,'REARANGEMENT','1','2014-08-19 13:43:23',NULL),(11,'GOLF','1','2014-08-19 13:43:39',NULL),(12,'TENNIS','1','2014-08-19 13:43:45',NULL),(13,'FOOT BALL','1','2014-08-19 13:43:53',NULL),(14,'CONSULTING','1','2014-08-27 23:50:13','2014-08-27 23:50:37');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
