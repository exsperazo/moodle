<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'postgres://hfqgecaffghnbh:08baccd35c9f427c86c211ab1a75bfcd3692f2dd7d2a39439cd01352247aa300@ec2-54-152-175-141.compute-1.amazonaws.com:5432/dfu1m6169uqjlh';
$CFG->dbname    = getenv('DATABASE_NAME');
$CFG->dbuser    = getenv('DATABASE_USER');
$CFG->dbpass    = getenv('DATABASE_PASSWORD');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
