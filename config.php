<?php if ( !defined( 'HABARI_PATH' ) ) { die( 'No direct access' ); }
Config::set( 'db_connection', array(
	'connection_string'=>'mysql:host=us-cdbr-east-03.cleardb.com;dbname=heroku_cf1b0e9ad4a94c3',
	'username'=>'b25faa768feb4e',
	'password'=>'f3115106',
	'prefix'=>'habari__'
));

// Config::set('locale', 'en-us');
?>
