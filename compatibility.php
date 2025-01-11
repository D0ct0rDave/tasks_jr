<?php

if (!function_exists('array_key_exists')) {
	function array_key_exists($key, $search) {
		if (in_array($key, array_keys($search))) {
			return true;
		}
		else {
			return false;
		}
	}
}

// for compatibility if magic_quotes are disabled

function add_magic_quotes($array) {
	foreach ($array as $k => $v) {
		if (is_array($v)) {
			$array[$k] = add_magic_quotes($v);
		} else {
			$array[$k] = addslashes($v);
		}
	}
	return $array;
} 

if (! function_exists('get_magic_quotes_gpc')) {
	function get_magic_quotes_gpc() {
		return true;
	}
}

if (!get_magic_quotes_gpc()) {
	$_GET    = add_magic_quotes($_GET);
	$_POST   = add_magic_quotes($_POST);
	$_COOKIE = add_magic_quotes($_COOKIE);
	$_REQUEST = add_magic_quotes($_REQUEST);
}

if (! function_exists('set_magic_quotes_runtime')) {
	function set_magic_quotes_runtime($new_setting) {
		return true;
	}
}

set_magic_quotes_runtime(0);

?>