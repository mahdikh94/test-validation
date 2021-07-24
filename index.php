<?php
require "./vendor/autoload.php";

use App\Controllers\RegisterController;

$registerController = new RegisterController();
$registerController->check_validation();
echo "\r";
say_hello();


