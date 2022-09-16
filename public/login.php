<?php

$pageTitle = 'User Login';


ob_start();
require_once __DIR__ . '/../views/action/login.form.view.php';
$content = ob_get_clean();

require_once __DIR__ . '/../views/layout.view.php';