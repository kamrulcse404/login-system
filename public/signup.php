<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\Controllers\UserController;


$pageTitle = 'User SignUp';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUser = new UserController();
    $newUser->userRegDataStore($_POST);
}


ob_start();
require_once __DIR__ . '/../views/action/signup.form.view.php';
$content = ob_get_clean();

require_once __DIR__ . '/../views/layout.view.php';