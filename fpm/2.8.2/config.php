<?php
# -- BEGIN LICENSE BLOCK ---------------------------------------
#
# This file is part of Dotclear 2.
#
# Copyright (c) 2003-2013 Olivier Meunier & Association Dotclear
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK -----------------------------------------
if (!defined('DC_RC_PATH')) { return; }

// Database driver (mysql, mysqli, pgsql, sqlite)
define('DC_DBDRIVER', $_ENV['DC_DBDRIVER'];);

// Database hostname (usually "localhost")
define('DC_DBHOST', $_ENV['DC_DBHOST'];);

// Database user
define('DC_DBUSER', $_ENV['DC_DBUSER'];);

// Database password
define('DC_DBPASSWORD', $_ENV['DC_DBPASSWORD'];);

// Database name
define('DC_DBNAME', $_ENV['DC_DBNAME'];);

// Tables' prefix
define('DC_DBPREFIX', isset($_ENV['DC_DBPREFIX']) ? $_ENV['DC_DBPREFIX'] : 'dc_');

// Persistent database connection
define('DC_DBPERSIST', isset($_ENV['DC_DBPERSIST']) ? $_ENV['DC_DBPERSIST'] : false);

// Crypt key (password storage)
define('DC_MASTER_KEY', $_ENV['DC_MASTER_KEY'];);


// Admin URL. You need to set it for some features.
define('DC_ADMIN_URL', $_ENV['DC_ADMIN_URL'];);

// Admin mail from address. For password recovery and such.
define('DC_ADMIN_MAILFROM', $_ENV['DC_ADMIN_MAILFROM'];);

// Cookie's name
define('DC_SESSION_NAME', isset($_ENV['DC_SESSION_NAME']) ? $_ENV['DC_SESSION_NAME'] : 'dcxd');

// Plugins root
define('DC_PLUGINS_ROOT', isset($_ENV['DC_PLUGINS_ROOT']) ? $_ENV['DC_PLUGINS_ROOT'] : dirname(__FILE__).'/../plugins');

// Template cache directory
define('DC_TPL_CACHE', isset($_ENV['DC_TPL_CACHE']) ? $_ENV['DC_TPL_CACHE'] : path::real(dirname(__FILE__).'/..').'/cache');


// If you have PATH_INFO issue, uncomment following lines
//if (!isset($_SERVER['ORIG_PATH_INFO'])) {
//	$_SERVER['ORIG_PATH_INFO'] = '';
//}
//$_SERVER['PATH_INFO'] = $_SERVER['ORIG_PATH_INFO'];


// If you have mail problems, uncomment following lines and adapt it to your hosting configuration
// For more information about this setting, please refer to http://doc.dotclear.net/2.0/admin/install/custom-sendmail
//function _mail($to,$subject,$message,$headers)
//{
//	socketMail::$smtp_relay = 'my.smtp.relay.org';
//	socketMail::mail($to,$subject,$message,$headers);
//}
