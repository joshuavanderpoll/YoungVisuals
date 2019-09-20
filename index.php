<?php

include "route.php";
include "private/classes/router.php";

$route = new Route();

$route->add('/', 'Home');
$route->add('/diensten', 'Services');
$route->add('/over-ons', 'About');
$route->add('/portfolio', 'Portfolio');
$route->add('/contact', 'Contact');

$route->submit();