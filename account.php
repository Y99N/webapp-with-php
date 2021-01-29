<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Account</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            Mysite
        </div>
        <div class="links">
            <div class="link">
                <a href="../../php/logout.php">Log Out</a>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="c1">
            <hr style="width: 80%;">
            <a href="../../php/friends.php">Friends</a><br>
            <hr style="width: 80%;">
            <a href="../../php/remove.php">Remove your Account</a><br>
        </div>
        <div class="Mainc">
            <?php
                echo $_SESSION['fn']." Welcome to your empty account!!!!";
            ?>
        </div>
        <div class="c2"></div>
    </div>
    
</body>
</html>