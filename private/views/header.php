<?php
$css = "main.css";
if($_SERVER['REQUEST_URI'] == "/") {
	$css = "public/css/home.css";
} else {
	if(strpos($_SERVER['REQUEST_URI'], "?")) {
		$css = "public/css/" . str_replace("/", '', substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "?"))) . ".css";
	} else {
		$css = "public/css/" . str_replace("/", '', $_SERVER['REQUEST_URI']) . ".css";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo getTitle(); ?></title>
	<meta charset="utf-8"/>
	<meta name="description" content="<?php echo getDescription(); ?>">
	<meta name="keywords" content="<?php echo getKeywords(); ?>">
	<meta name="author" content="<?php echo getAuthor(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel='manifest' href='manifest.json'>
    <link rel='canonical' href='https://youngvisual.nl/'>
	<link rel="stylesheet" href="public/css/reset.css">
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="public/css/fonts.css">
	<link rel="stylesheet" href="<?php echo $css; ?>">
	<meta name="theme-color" content="#2DCCD3"/>
	<link rel="shortcut icon" type="image/x-icon" href="./public/img/logo.ico"/>
	<link rel="apple-touch-icon" href="./public/img/logo.svg">
    <meta name='msapplication-TileImage' content='./public/img/logo.svg'>
    <meta name='msapplication-TileColor' content='#2DCCD3'>
	<meta name="msapplication-square310x310logo" content="./public/img/logo.svg">
</head>