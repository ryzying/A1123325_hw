<title>Check Form</title>
<h1>Check Form Page</h1>
<?php
session_start();
if (!isset($_SESSION["check"])) {
    header("Location:0314hw_login.php");
    exit;
}
if (isset($_COOKIE["userName"])) {
    echo "Welcome, " . $_COOKIE["userName"] . " to the system!";
} else {
    echo "Welcome, " . $_SESSION["userName"] . " to the system!";
}
?>
<hr>
<?php
$uName = $_POST["uName"];
$uPass = $_POST["uPass"];
$uEmail = $_POST["uEmail"];
$uPhone = $_POST["uPhone"];
$uDOB = $_POST["uDOB"];
$uAge = $_POST["uAge"];
$uColor = $_POST["uColor"];
$uLike = $_POST["uLike"];
$uGender = $_POST["uGender"];
$uInterest = $_POST["uInterest"];
$uCity = $_POST["uCity"];
$uComment = $_POST["uComment"];
echo "Your name is:" . $uName . "<br>";
echo "Your password is:" . $uPass . "<br>";
echo "Your Email is:" . $uEmail . "<br>";
echo "Your phone number is:" . $uPhone . "<br>";
echo "Your date of birth is:" . $uDOB . "<br>";
echo "Your age is:" . $uAge . "<br>";
echo "Your color is:" . $uColor . "<br>";
echo "Your like is:" . $uLike . "<br>";
echo "You live in:" . $uCity . "<br>";

$x = count($uInterest);
if ($x == 0) {
    echo "You have no interests" . "<br>";
} else {
    for ($i = 0; $i < $x; $i++) {
        echo "Your interests total are: " . $uInterest[$i] . "<br>";
    }
}
echo "<br>";
echo "Your comments:" . nl2br(htmlentities($uComment));
?>
<hr>
<a href="0314hw_logout.php">Logout</a>