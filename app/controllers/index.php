<?
if( $page ){
	require_once $url . ".php";
	require_once "app/views/header.view.php";
	require_once $root . '/app/views/'. $pageName.'.view.php';
} else {
	require_once "app/views/header.view.php";
}

require_once "app/views/footer.view.php";