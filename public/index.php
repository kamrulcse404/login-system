<?php

$pageTitle = "Login System";

ob_start();

require_once __DIR__ . '/../views/action/index.view.php';

$content = ob_get_clean();

require_once __DIR__ . '/../views/layout.view.php';