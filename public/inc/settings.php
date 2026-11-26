<?php
setlocale(LC_TIME, "nl_NL");
date_default_timezone_set('Europe/Amsterdam');


// maak een verbinding met mysql en selecteer een database
switch( $_SERVER['HTTP_HOST'] ) {
	case 'cmm_lessen.dragonet.dev' :
					define( 'DB_USERNAME',	'debug' );
					define( 'DB_PASSWORD',	'debug' );
					define( 'DB_DATABASE',	'debug' );
					define( 'DB_HOST', 		'mariadb' );
					ini_set('display_errors', 1);
				    define('SITE_PATH', 	'http://cmm_lessen.dragonet.dev/lessen/dag7/practice/');
				    define('DEBUG', 		false);
				break;
				
	case 'news' :
					define( 'DB_USERNAMEE',	'debug' );
					define( 'DB_PASSWORD',	'debug' );
					define( 'DB_DATABASE',	'debug' );
					define( 'DB_HOST', 		'mariadb' );
				    define('SITE_PATH', 	'http://news/');
				    define('SITE_NAME', 	'Nieuwsberichten systeem');
				    define('DEBUG', 		true);
				break;
				
}	
