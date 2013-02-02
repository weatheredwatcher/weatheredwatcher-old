<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS (DEVELOPMENT BRANCH)
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];


$active_group = ENVIRONMENT;
//$active_group = 'development';
$active_record = TRUE;

$db['production']['hostname'] = $mysql_config['hostname'];
$db['production']['username'] = $mysql_config['username'];
$db['production']['password'] = $mysql_config['password'];
$db['production']['database'] = $mysql_config['name'];
$db['production']['dbdriver'] = "mysql";
$db['production']['dbprefix'] = "";
$db['production']['pconnect'] = TRUE;
$db['production']['db_debug'] = FALSE;
$db['production']['cache_on'] = FALSE;
$db['production']['cachedir'] = "";
$db['production']['char_set'] = "utf8";
$db['production']['dbcollat'] = "utf8_general_ci";
$db['production']['swap_pre'] = "";
$db['production']['autoinit'] = TRUE;
$db['production']['stricton'] = FALSE;


$db['development']['hostname'] = 'localhost';
$db['development']['username'] = 'root';
$db['development']['password'] = '';
$db['development']['database'] = 'weatheredwatcher';
$db['development']['dbdriver'] = "mysql";
$db['development']['dbprefix'] = "";
$db['development']['pconnect'] = TRUE;
$db['development']['db_debug'] = FALSE;
$db['development']['cache_on'] = FALSE;
$db['development']['cachedir'] = "";
$db['development']['char_set'] = "utf8";
$db['development']['dbcollat'] = "utf8_general_ci";
$db['development']['swap_pre'] = "";
$db['development']['autoinit'] = TRUE;
$db['development']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */