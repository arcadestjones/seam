<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodleuser';
$CFG->dbpass    = 'moodle93493';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => false,
);

$CFG->wwwroot   = 'http://54.251.253.197';
$CFG->dataroot  = '/vol/web/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

$CFG->passwordsaltmain = 'bp!~iYQTR7ih#kuoy,R_^-R1y!hly8H';

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
