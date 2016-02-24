<?php

/**
 * Configuration
 * Created by Group 1 SIT715 Assignment3
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 */

error_reporting(0);
ini_set("display_errors", 0);

/**
 * Configuration for: URL
*/

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
define('URL_LENCO',URL_PROTOCOL . URL_DOMAIN. "/public/" );
define('URL_UPLOADS',URL_PROTOCOL . URL_DOMAIN. "/public/"."uploads/" );

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');
define('DB_NAME', 'ad_6758d4b325ee744');
define('DB_USER', 'b3c2ce8ff3ba2c');
define('DB_PASS', '9dafbbad');
define('DB_CHARSET', 'utf8');
