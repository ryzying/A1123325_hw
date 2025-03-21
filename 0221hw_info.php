<?php
$uName = $_POST["uName"];
$uEmail = $_POST["uEmail"];
$uPhone = $_POST["uPhone"];
$uDOB = $_POST["uDOB"];
$uAge = $_POST["uAge"];
$uGender = $_POST["uGender"];
$uRange = $_POST["uRange"];
$uComment = $_POST["uComment"];



echo "Your name is: " . $uName . "<br>";
echo "Your email is: " . $uEmail . "<br>";
echo "Your phone number is: " . $uPhone . "<br>";
echo "Your date of birth is: " . $uDOB . "<br>";
echo "Your age is: " . $uAge . "<br>";
echo "Your gender is: " . $uGender . "<br>";
echo "You like this page: " . $uRange . "<br>";

echo "Your special requests or notes:" . nl2br($uComment) . "<br>";