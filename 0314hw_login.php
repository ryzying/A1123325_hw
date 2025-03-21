<?php
session_start();
if (isset($_SESSION["userName"])) {
    header("Location: 0314hw_welcome.php");
    exit;
}
?>
<title>Login Page</title>
<h1>Welcome to the Login Page</h1>
<h2>Please login to use the system!</h2>
<form action="0314hw_process_login.php" method="post">
    Please input your username: <input type="text" name="userName" placeholder="Username"><br />
    Please input your password: <input type="password" name="userPwd" placeholder="Password"><br />
    <input type="submit" value="Submit">
    <input type="reset" value="Reset"><br />
    <hr>

    <?php
    date_default_timezone_set("Asia/Taipei");
    echo time();
    echo "<br/>";
    echo "Time now:";
    echo date("Y-m-d H:i:s");
    //header("Refresh:1");
    ?>
</form>