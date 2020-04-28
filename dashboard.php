<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You have succesfully logged in. You will be redirected to the To-Do app in 6 seconds. Logout if you do not wish to do so.</p>
        <meta http-equiv = "refresh" content = "6; url = http://localhost/katieTD/index.html" />
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>