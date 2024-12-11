<?php
require_once 'points.php';

if (isset($_POST['action']) && $_POST['action'] == 'add_points') {
    addPoints(POINTS_PER_ACTIVITY);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamification System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Complite</h1>

        <div class="profile">
            <h2>Your Current Points</h2>
            <p class="points"><?php echo getPoints(); ?> Points</p>
        </div>

        <form method="POST" class="action-form">
            <button type="submit" name="action" value="add_points">Complete Activity and Earn Points</button>
        </form>
    </div>
</body>
</html>
