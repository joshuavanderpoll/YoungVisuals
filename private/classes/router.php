<?php

$whitelist = array(
    '127.0.0.1',
    '::1'
);

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
	    if(!headers_sent()) {
	        header("Status: 301 Moved Permanently");
	        header(sprintf(
	            'Location: https://%s%s',
	            $_SERVER['HTTP_HOST'],
	            $_SERVER['REQUEST_URI']
	        ));
	        exit();
	    }
	}
}

include "./private/functions.php";

class Home {
	public function __construct() {
		include "./private/views/header.php";
		include "./private/pages/home.php";
		include "./private/views/footer.php";
	}
}
class Services {
	public function __construct() {
		include "./private/views/header.php";
		include "./private/pages/diensten.php";
		include "./private/views/footer.php";
	}
}
class About {
	public function __construct() {
		include "./private/views/header.php";
		include "./private/pages/over-ons.php";
		include "./private/views/footer.php";
	}
}
class Portfolio {
	public function __construct() {
		include "./private/views/header.php";
		include "./private/pages/portfolio.php";
		include "./private/views/footer.php";
	}
}
class Contact {
	public function __construct() {
		include "./private/views/header.php";
		include "./private/pages/contact.php";
		include "./private/views/footer.php";
	}
}
class NotFound {
	public function __construct() {
		include "./private/views/header.php";
		include "./private/pages/404.php";
		include "./private/views/footer.php";
	}
}