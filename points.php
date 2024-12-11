<?php
session_start();

define('POINTS_PER_ACTIVITY', 1);

if (!isset($_SESSION['points'])) {
    $_SESSION['points'] = 0;
}

function addPoints($points) {
    $_SESSION['points'] += $points;
}

function getPoints() {
    return $_SESSION['points'];
}
?>
