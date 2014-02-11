<?php 
function getURL() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] != 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
}

function getPageSlug() {
	$slug = $_SERVER['REQUEST_URI'];
	switch($slug) {
		case "/":
			$slug = "home";
			break;
	}
	$slug = str_replace(array('/','.php'), '', $slug);
	return $slug."_page";
}

function getMD5Hash($str) {
	return md5_file(dirname(__FILE__). DIRECTORY_SEPARATOR . $str);
}

?>