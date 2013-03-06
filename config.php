<?php if ( !defined( 'HABARI_PATH' ) ) { die( 'No direct access' ); }
Config::set( 'db_connection', array(
	'connection_string'=>'mysql:host=localhost;dbname=gazelle_test',
	'username'=>'root',
	'password'=>'root',
	'prefix'=>'habari__'
));

// Config::set('locale', 'en-us');
?>
