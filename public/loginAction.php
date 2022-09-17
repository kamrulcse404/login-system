<?php

$pageTitle = 'Login Success';

ob_start();
require_once __DIR__ . '/../views/action/login.view.php';

$content = ob_end_clean();

require_once __DIR__ . '/../views/layout.view.php';