<?php
/**
 * Created by PhpStorm.
 * User: Christophe
 * Date: 22/03/2016
 * Time: 15:32
 */


session_start();
if(!isset($_SESSION['vol_email'])){
    header("Location: volunteerlogin.php");
}


echo "<script>alert('Thank you for completing the survey!');</script>";




?>


<!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8">
    <title>Thank you for submitting the survey!</title>
</head>
<body>
    <a href="volunteerhub.php">Back to Hub</a>
</body>
</html>
