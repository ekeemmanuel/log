<?php
/**
 * Created by PhpStorm.
 * User: 1600558
 * Date: 17/03/2017
 * Time: 15:16
 */
$fnam=$_POST['fullname'];
$user=$_POST['username'];
$password = $_POST['pass'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>submit</title>
</head>
<body>

         <?php
         echo "Your Full Name is {$fnam}. <br> Your username is {$user}. <br> Your password is {$password}.";
         ?>
<p>Click to return to <a href="index.php">login</a> page</p>
</body>

</html>