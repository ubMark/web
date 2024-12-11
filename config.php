<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'online_learning_gamification');
define('DB_USER', 'root');
define('DB_PASS', '');

define('POINTS_PER_ACTIVITY', 10);

define('DISPLAY_ERRORS', true);

if (DISPLAY_ERRORS) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
?>
