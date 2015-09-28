# MySQL dump of database 'skipjack_timesheet' on host 'vertigo'
# backup date and time: May 31 2012 16:58
# built by phpMyBackupPro v.2.2
# http://www.phpMyBackupPro.net

### used character set: latin1 ###
set names latin1;



### structure of table `ts_administrator` ###

DROP TABLE IF EXISTS `ts_administrator`;

CREATE TABLE `ts_administrator` (
  `id_administrator` int(11) NOT NULL AUTO_INCREMENT,
  `id_administratortype` int(11) NOT NULL,
  `first_name` varchar(64) DEFAULT NULL,
  `last_name` varchar(64) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `administrator_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  `ldate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_administrator`),
  UNIQUE KEY `unique_username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;


### data of table `ts_administrator` ###

insert into `ts_administrator` values ('1', '1', 'Mike', 'Schulz', 'mike@skipjack.co.za', 'mike', 'BtqA13dCDe8=', '1', '2011-05-31 12:21:07', '2012-05-31 15:01:49', '2012-05-31 15:01:49');
insert into `ts_administrator` values ('3', '2', 'Oteng', 'Masudubele', 'oteng@skipjack.co.za', 'oteng', 'BtqA13dCDe8=', '1', '2011-08-16 13:42:10', '2012-04-02 14:02:44', '2012-04-02 14:02:44');
insert into `ts_administrator` values ('6', '2', 'Richard', 'Uter', 'richard@skipjack.co.za', 'richard', 'BtqA13dCDe8=', '1', '2012-01-12 11:06:39', '2012-04-02 13:27:28', '2012-01-27 15:08:25');
insert into `ts_administrator` values ('7', '2', ' Mike', ' Schulz U', 'mike@skipjack.co.za', 'mikeu', 'BtqA13dCDe8=', '1', '2012-02-17 10:12:57', '2012-04-26 09:49:03', '2012-04-26 09:49:03');
insert into `ts_administrator` values ('8', '1', 'Diderson', 'Baka', 'ddiderson@yahoo.fr', 'diderson', '/MqfBRL3rW0=', '1', '2012-04-26 09:47:30', '2012-05-31 15:02:31', '2012-05-31 15:02:31');


### structure of table `ts_administrator_administratoraccess` ###

DROP TABLE IF EXISTS `ts_administrator_administratoraccess`;

CREATE TABLE `ts_administrator_administratoraccess` (
  `id_administrator` int(11) NOT NULL,
  `id_administratoraccess` int(11) NOT NULL,
  KEY `fk_link_administrator_administratoraccess_link_administratora1` (`id_administratoraccess`),
  KEY `fk_link_administrator_administratoraccess_link_administrator1` (`id_administrator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


### data of table `ts_administrator_administratoraccess` ###

insert into `ts_administrator_administratoraccess` values ('7', '16');
insert into `ts_administrator_administratoraccess` values ('7', '15');
insert into `ts_administrator_administratoraccess` values ('7', '14');
insert into `ts_administrator_administratoraccess` values ('3', '16');
insert into `ts_administrator_administratoraccess` values ('1', '0');
insert into `ts_administrator_administratoraccess` values ('3', '15');
insert into `ts_administrator_administratoraccess` values ('3', '14');
insert into `ts_administrator_administratoraccess` values ('6', '14');
insert into `ts_administrator_administratoraccess` values ('6', '15');
insert into `ts_administrator_administratoraccess` values ('6', '16');
insert into `ts_administrator_administratoraccess` values ('7', '18');
insert into `ts_administrator_administratoraccess` values ('8', '0');


### structure of table `ts_administratoraccess` ###

DROP TABLE IF EXISTS `ts_administratoraccess`;

CREATE TABLE `ts_administratoraccess` (
  `id_administratoraccess` int(11) NOT NULL AUTO_INCREMENT,
  `access_name` varchar(64) NOT NULL,
  `access_alias` varchar(64) DEFAULT NULL,
  `access_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_administratoraccess`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 AUTO_INCREMENT=19;


### data of table `ts_administratoraccess` ###

insert into `ts_administratoraccess` values ('1', 'Tiny MCE File Manager', 'tinymce-file-manager', '0', '2011-08-16 13:43:28', '2011-08-16 13:43:32');
insert into `ts_administratoraccess` values ('2', 'Tiny MCE Image Manager', 'tinymce-image-manager', '0', '2011-08-16 13:43:28', '2011-08-16 13:43:32');
insert into `ts_administratoraccess` values ('3', 'Administrator', 'administrator', '1', '2011-08-16 13:43:28', '2011-08-16 13:43:32');
insert into `ts_administratoraccess` values ('4', 'Administrator Access', 'administrator-access', '1', '2011-08-16 13:43:28', '2011-08-16 13:43:32');
insert into `ts_administratoraccess` values ('16', 'Timesheet Entry', 'entry', '1', '2012-01-12 13:27:52', '2012-01-12 13:31:21');
insert into `ts_administratoraccess` values ('14', 'Client', 'client', '1', '2011-12-15 13:43:28', '2011-12-15 13:43:28');
insert into `ts_administratoraccess` values ('15', 'Project', 'project', '1', '2011-12-15 13:43:28', '2011-12-15 13:43:28');
insert into `ts_administratoraccess` values ('17', 'Invoices', 'invoice', '1', '2011-12-15 13:43:28', '2011-12-15 13:43:28');
insert into `ts_administratoraccess` values ('18', 'Todos', 'todo', '1', null, '2012-04-26 10:06:23');


### structure of table `ts_administratortype` ###

DROP TABLE IF EXISTS `ts_administratortype`;

CREATE TABLE `ts_administratortype` (
  `id_administratortype` int(11) NOT NULL AUTO_INCREMENT,
  `administratortype_name` varchar(64) NOT NULL,
  `administratortype_alias` varchar(64) DEFAULT NULL,
  `administratortype_displayorder` int(11) DEFAULT NULL,
  `administratortype_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_administratortype`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;


### data of table `ts_administratortype` ###

insert into `ts_administratortype` values ('1', 'Superuser', 'superuser', '1', '1', '2010-05-18 13:10:03', '2010-05-18 13:10:03');
insert into `ts_administratortype` values ('2', 'User', 'user', '2', '1', '2010-05-18 13:10:03', '2010-05-18 13:10:03');


### structure of table `ts_client` ###

DROP TABLE IF EXISTS `ts_client`;

CREATE TABLE `ts_client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(64) DEFAULT NULL,
  `client_description` text,
  `client_status` char(1) DEFAULT NULL,
  `client_currency` varchar(8) DEFAULT NULL,
  `client_currencycode` varchar(8) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3;


### data of table `ts_client` ###

insert into `ts_client` values ('1', 'BrainStormGroup', 'The BrainStormGroup in Toronto, Canada.', '1', 'CAD $', 'CAD', '2012-02-15 14:15:42', '2012-04-23 13:37:47');
insert into `ts_client` values ('2', 'InfoSight', 'InfoSight: Richard Masefield', '1', 'R', 'ZAR', '2012-02-15 14:17:59', null);


### structure of table `ts_entry` ###

DROP TABLE IF EXISTS `ts_entry`;

CREATE TABLE `ts_entry` (
  `id_entry` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_invoice` int(11) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `entry_totalmins` int(11) DEFAULT NULL,
  `entry_hours` int(11) DEFAULT NULL,
  `entry_mins` int(11) DEFAULT NULL,
  `entry_description` text,
  `entry_status` char(1) DEFAULT NULL,
  `invoice_status` varchar(16) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_entry`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AUTO_INCREMENT=7;


### data of table `ts_entry` ###

insert into `ts_entry` values ('1', '7', '4', '8', '2012-02-15', '120', '2', '0', 'Spent 2 hours on changing navigation system.zzz', '1', 'invoiced', '2012-02-15 14:19:07', '2012-02-17 11:36:54');
insert into `ts_entry` values ('2', '3', '4', '8', '2012-02-15', '180', '3', '0', 'Changed the css files.', '1', 'invoiced', '2012-02-15 14:19:37', '2012-02-15 14:45:08');
insert into `ts_entry` values ('3', '1', '1', null, '2012-02-15', '120', '2', '0', 'aaaa Spent 2 hours on changing navigation system.', '1', 'uninvoiced', '2012-02-16 11:54:29', '2012-04-18 14:57:33');
insert into `ts_entry` values ('4', '1', '3', '7', '2012-02-15', '120', '2', '0', 'zzzz Spent 2 hours on changing navigation system.', '1', 'invoiced', '2012-02-16 11:55:31', '2012-02-21 12:46:48');
insert into `ts_entry` values ('5', '1', '3', '7', '2012-02-21', '360', '6', '0', 'zzzzz', '1', 'invoiced', '2012-02-21 14:37:49', null);
insert into `ts_entry` values ('6', '1', '3', null, '2012-04-12', '5', '0', '5', 'username TEST', '1', 'uninvoiced', '2012-04-12 08:26:43', '2012-04-18 14:57:32');


### structure of table `ts_invoice` ###

DROP TABLE IF EXISTS `ts_invoice`;

CREATE TABLE `ts_invoice` (
  `id_invoice` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `invoice_number` varchar(64) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_title` varchar(255) DEFAULT NULL,
  `invoice_description` mediumtext,
  `invoice_rate` decimal(10,2) DEFAULT NULL,
  `invoice_totalmins` int(11) DEFAULT NULL,
  `invoice_subtotal` decimal(10,2) DEFAULT NULL,
  `invoice_vatrate` int(11) DEFAULT NULL,
  `invoice_vat` decimal(10,2) DEFAULT NULL,
  `invoice_total` decimal(10,2) DEFAULT NULL,
  `invoice_currencycode` varchar(8) DEFAULT NULL,
  `invoice_currencyconversionrate` decimal(30,30) DEFAULT NULL,
  `invoice_currencytotal` decimal(10,2) DEFAULT NULL,
  `invoice_currencytotal_invoiced` decimal(10,2) DEFAULT NULL,
  `invoice_paymentdate` date DEFAULT NULL,
  `invoice_payment_currencyconversionrate` decimal(30,30) DEFAULT NULL,
  `invoice_payment_zar_total` decimal(10,2) DEFAULT NULL,
  `invoice_status` varchar(16) DEFAULT NULL,
  `invoice_paymentnotes` mediumtext,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_invoice`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;


### data of table `ts_invoice` ###

insert into `ts_invoice` values ('7', '3', '001-Brainstormgroup', '2012-02-01', 'Applebees Canada xml menu changes', 'Applebees Canada xml menu changes DESC2', '400.00', '480', '3200.00', '0', '0.00', '3200.00', 'CAD', '0.129190000000000000000000000000', '471.29', '471.29', '2012-02-26', '0.132832581736189420000000000000', '3548.00', 'paid', 'Full invoiced paid', '2012-02-22 12:07:13', '2012-02-22 12:59:27');
insert into `ts_invoice` values ('8', '4', '001-Infosight', '2012-02-22', 'Applebees Canada xml menu changes', 'Applebees Canada xml menu changes DESC', '400.00', '300', '2000.00', '14', '280.00', '2280.00', 'ZAR', null, null, null, '2012-02-22', null, '2280.00', 'paid', 'asdfasdf', '2012-02-22 13:19:04', '2012-04-26 13:05:07');


### structure of table `ts_project` ###

DROP TABLE IF EXISTS `ts_project`;

CREATE TABLE `ts_project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `project_name` varchar(64) DEFAULT NULL,
  `project_description` text,
  `project_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_project`),
  UNIQUE KEY `id_project` (`id_project`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6;


### data of table `ts_project` ###

insert into `ts_project` values ('1', '1', 'Veeva', 'veeva.ca', '1', '2012-02-15 14:15:55', '2012-02-15 14:16:46');
insert into `ts_project` values ('2', '1', 'Canon Features', 'canonfeatures.ca', '1', '2012-02-15 14:17:07', null);
insert into `ts_project` values ('3', '1', 'Applebees Canada', 'www.applebeescanada.ca', '1', '2012-02-15 14:17:21', null);
insert into `ts_project` values ('4', '2', 'infosight.co.za', 'infosight.co.za', '1', '2012-02-15 14:18:25', null);
insert into `ts_project` values ('5', '2', 'coweyscorner.co.za', 'coweyscorner.co.za', '1', '2012-02-15 14:18:35', null);


### structure of table `ts_todo` ###

DROP TABLE IF EXISTS `ts_todo`;

CREATE TABLE `ts_todo` (
  `id_todo` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `todo_date` date DEFAULT NULL,
  `todo_description` text,
  `todo_status` char(1) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id_todo`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1 AUTO_INCREMENT=57;


### data of table `ts_todo` ###

insert into `ts_todo` values ('1', '7', '4', '2012-02-15', 'Spent 2 hours on changing navigation system.zzz', '1', '2012-02-15 14:19:07', '2012-04-24 13:56:09');
insert into `ts_todo` values ('2', '3', '4', '2012-02-15', 'Changed the css files.', '1', '2012-02-15 14:19:37', '2012-02-15 14:45:08');
insert into `ts_todo` values ('3', '1', '1', '2012-02-15', 'aaaa Spent 2 hours on changing navigation system.', '1', '2012-02-16 11:54:29', '2012-04-18 14:57:33');
insert into `ts_todo` values ('4', '1', '3', '2012-02-15', 'zzzz Spent 2 hours on changing navigation system.', '1', '2012-02-16 11:55:31', '2012-02-21 12:46:48');
insert into `ts_todo` values ('5', '1', '3', '2012-02-21', 'zzzzz', '1', '2012-02-21 14:37:49', null);
insert into `ts_todo` values ('6', '1', '3', '2012-04-12', 'username TEST', '1', '2012-04-12 08:26:43', '2012-04-18 14:57:32');
insert into `ts_todo` values ('7', '7', '4', '2012-04-23', 'diderson test timeshit done', '1', '2012-04-23 16:12:41', '2012-04-25 11:39:18');
insert into `ts_todo` values ('8', '7', '5', '2012-04-25', 'get all id and email', '1', '2012-04-25 14:04:44', null);
insert into `ts_todo` values ('9', '7', '5', '2012-04-25', 'get all id and email', '1', '2012-04-25 14:13:48', null);
insert into `ts_todo` values ('10', '7', '5', '2012-04-25', 'insert timesheet to do', '1', '2012-04-25 14:16:49', null);
insert into `ts_todo` values ('11', '7', '5', '2012-04-25', 'insert timesheet to do', '1', '2012-04-25 14:17:31', null);
insert into `ts_todo` values ('12', '7', '3', '2012-04-25', 'check all items firs thing in the moorning', '1', '2012-04-25 14:19:12', null);
insert into `ts_todo` values ('13', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 14:56:03', null);
insert into `ts_todo` values ('14', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 14:58:20', null);
insert into `ts_todo` values ('15', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 14:59:04', null);
insert into `ts_todo` values ('16', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 14:59:28', null);
insert into `ts_todo` values ('17', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 15:02:27', null);
insert into `ts_todo` values ('18', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 15:03:01', null);
insert into `ts_todo` values ('19', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 15:03:23', null);
insert into `ts_todo` values ('20', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 15:14:47', null);
insert into `ts_todo` values ('21', '7', '2', '2012-04-25', 'check navigation bar', '1', '2012-04-25 15:15:12', null);
insert into `ts_todo` values ('22', '7', '1', '2012-04-25', 'do update with xml file into the data base', '1', '2012-04-25 15:25:20', null);
insert into `ts_todo` values ('23', '7', '1', '2012-04-25', 'do update with xml file into the data base222', '1', '2012-04-25 15:29:26', null);
insert into `ts_todo` values ('24', '3', '3', '2012-04-26', 'apple bees check the navigation bar', '1', '2012-04-26 09:59:04', null);
insert into `ts_todo` values ('25', '1', '5', '2012-04-26', 'popop', '1', '2012-04-26 12:27:37', null);
insert into `ts_todo` values ('26', '1', '2', '2012-04-26', 'sdsdsd', '1', '2012-04-26 12:58:55', null);
insert into `ts_todo` values ('27', '1', '2', '2012-04-26', 'dasds', '1', '2012-04-26 14:14:20', null);
insert into `ts_todo` values ('28', '1', '2', '2012-04-26', 'dasds', '1', '2012-04-26 14:16:58', null);
insert into `ts_todo` values ('29', '1', '2', '2012-04-26', 'dasds', '1', '2012-04-26 14:17:56', null);
insert into `ts_todo` values ('30', '1', '2', '2012-04-26', 'dasds', '1', '2012-04-26 14:19:39', null);
insert into `ts_todo` values ('31', '1', '2', '2012-04-26', 'dasds', '1', '2012-04-26 14:20:19', null);
insert into `ts_todo` values ('32', '1', '3', '2012-04-26', 'sas', '1', '2012-04-26 14:21:18', null);
insert into `ts_todo` values ('33', '1', '3', '2012-04-26', 'sas', '1', '2012-04-26 14:25:53', null);
insert into `ts_todo` values ('34', '1', '5', '2012-04-26', 'gfgf', '1', '2012-04-26 14:26:21', null);
insert into `ts_todo` values ('35', '1', '5', '2012-04-26', 'gfgf', '1', '2012-04-26 14:32:01', null);
insert into `ts_todo` values ('36', '1', '3', '2012-04-26', 'hgjhjhj', '1', '2012-04-26 14:34:22', null);
insert into `ts_todo` values ('37', '1', '5', '2012-04-26', 'jhjhjhj', '1', '2012-04-26 14:35:03', null);
insert into `ts_todo` values ('38', '1', '1', '2012-04-26', 'ssdsd', '1', '2012-04-26 14:38:37', null);
insert into `ts_todo` values ('39', '1', '1', '2012-04-26', 'ssdsd', '1', '2012-04-26 14:39:45', null);
insert into `ts_todo` values ('40', '1', '1', '2012-04-26', 'ssdsd', '1', '2012-04-26 14:40:20', null);
insert into `ts_todo` values ('41', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:43:53', null);
insert into `ts_todo` values ('42', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:45:23', null);
insert into `ts_todo` values ('43', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:46:47', null);
insert into `ts_todo` values ('44', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:47:37', null);
insert into `ts_todo` values ('45', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:48:07', null);
insert into `ts_todo` values ('46', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:48:56', null);
insert into `ts_todo` values ('47', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:49:24', null);
insert into `ts_todo` values ('48', '1', '1', '2012-04-26', 'ffffdf', '1', '2012-04-26 14:49:39', null);
insert into `ts_todo` values ('49', '1', '1', '2012-04-26', 'rerr', '1', '2012-04-26 15:01:04', null);
insert into `ts_todo` values ('50', '1', '1', '2012-04-26', 'rerr', '1', '2012-04-26 15:03:17', null);
insert into `ts_todo` values ('51', '1', '5', '2012-04-26', 'vbvbvv', '1', '2012-04-26 15:04:32', null);
insert into `ts_todo` values ('52', '8', '4', '2012-04-26', 'new features', '1', '2012-04-26 15:29:26', null);
insert into `ts_todo` values ('53', '8', '3', '2012-04-30', 'tuesday', '1', '2012-04-30 09:24:58', null);
insert into `ts_todo` values ('54', '8', '3', '2012-04-30', 'applebees', '1', '2012-04-30 09:27:36', null);
insert into `ts_todo` values ('55', '8', '2', '2012-04-30', 'sdgg', '1', '2012-04-30 09:43:03', null);
insert into `ts_todo` values ('56', '1', '2', '2012-05-17', '1111', '1', '2012-05-17 10:47:08', null);
