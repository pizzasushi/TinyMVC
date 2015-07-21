<? require_once 'app/config/config.php';

$url = "app/controllers$_SERVER[REQUEST_URI].php";
$url = preg_replace('/\?.*/', '', $url);
$url = preg_replace('/\..*/', '', $url);

// echo $url .".php" . "<br>";

if ( file_exists( $url . ".php" ) ) {
	//controller
    // require_once $url . ".php";
    //view
    // require_once $root . '/app/views/'. $pageName.'.view.php';
    $page = $url . ".php";
    require_once "app/controllers/index.php";
} else {
	if( $url == 'app/controllers/' ){
		$title = 'index page';
		require_once "app/controllers/index.php";
	} else {
		require_once "404.php";	
	}
}