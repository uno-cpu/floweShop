<?php

// Application settings
define('APP_NAME', '404: Flower Not Found');
define('APP_VERSION', '1.0.0');
define('BASE_URL', 'http://localhost/flowershop');

// Session settings
define('SESSION_NAME', 'flowershop_session');
define('SESSION_LIFETIME', 3600); // 1 hour

// Pagination
define('ITEMS_PER_PAGE', 10);

// Upload settings
define('UPLOAD_PATH', __DIR__ . '/../public/assets/images/');
define('MAX_FILE_SIZE', 2 * 1024 * 1024); // 2MB
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png', 'webp']);

// Rate limiting (login)
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOCKOUT_TIME', 15 * 60); // 15 minutes in seconds

// Error reporting (set to 0 before demo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>