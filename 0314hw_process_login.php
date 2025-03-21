<?php
session_start();
?>
<title>Login Status</title>
<h1>Login Status Page</h1>
<?php
$valid_users = ["admin" => "a1123325", "nukim" => "nukim11233"];
$userName = $_POST["userName"];
$userPwd = $_POST["userPwd"];
if (isset($valid_users[$userName]) && $valid_users[$userName] == $userPwd) {
    echo "Welcome " . $userName . " to the system";
    $_SESSION["check"] = 1;
    $cookiedate = strtotime("+10 seconds", time());
    setcookie("userName", $userName, $cookiedate);
    header("Location:0314hw_welcome.php");
} else {
    echo "Invalid username or password";
    header("Refresh: 2; URL=0314hw_login.php");
}