<?php
/**
 * Created by PhpStorm.
 * User: 1600558
 * Date: 17/03/2017
 * Time: 15:03
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        a{
            border: 1px solid;
            
        }
    </style>
</head>
<body>
            <form method="post" action="submit.php">
                <table align="center">
                    <tr>
                        <td>
                            <label for="username"> Username:</label>
                        </td>
                        <td>
                            <input type="text" name="username" placeholder="Enter Username"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">  Password:</label>
                        </td>
                        <td>
                            <input  type="password" name="pass" placeholder="Enter Password"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                           <a href="submit.php">
                        </td>
                    </tr>
                </table>



            </form>
</body>
</html>