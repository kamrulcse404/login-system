<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Controllers\UserController;
$pageTitle = 'User Login';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUser = new UserController();
    $newUser->userLogin($_POST);
}

ob_start();
require_once __DIR__ . '/../views/action/login.form.view.php';
$content = ob_get_clean();

require_once __DIR__ . '/../views/layout.view.php';