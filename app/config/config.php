<?
require_once 'globals.php';
require_once $root . '/vendor/php-activerecord/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg){
	global $root;
	$cfg->set_model_directory( $root . '/app/models');
	$cfg->set_connections(array(
			'development' => "mysql://root:root@localhost/autodem"
		));
});