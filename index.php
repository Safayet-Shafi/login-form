<?php
 session_start();
 include("connection.php");
 include("function.php");

 $user_data=check_login($con)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my website</title>
</head>
<body>

    <h1>This is index page</h1>
    <a href="logout.php">Logout</a> 
    <br>
    Hello,<?php echo $user_data['user_name']; ?>  
</body>
</html>
