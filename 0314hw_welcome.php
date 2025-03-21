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
<title>Welcome Page</title>
<h1>Welcome Page</h1>
<form action="0314hw_check_form.php" method="post">
    Please enter your name: <input type="text" name="uName" placeholder="Name"><br>
    Please enter your password: <input type="password" name="uPass" placeholder="Password"><br>
    Please enter your email: <input type="email" name="uEmail" placeholder="Email"><br>
    Please enter your phone number: <input type="tel" name="uPhone" placeholder="Phone"><br>
    Please enter your date of birth: <input type="date" name="uDOB"><br>
    Please enter your age: <input type="number" name="uAge" placeholder="Age"><br>
    Please select your color: <input type="color" name="uColor"><br>
    Please select how you like the webpage: <input type="range" name="uLike"><br>
    Please select your gender: Male<input type="radio" name="uGender" value> Female<input type="radio" name="uGender"
        value><br>
    Please select your interests: Working<input type="checkbox" name="uInterest[]" value="work"> Sleep<input
        type="checkbox" name="uInterest[]" value="sleep"> Eat<input type="checkbox" name="uInterest[]" value="eat"><br>
    Please select your city: <select name="uCity">
        <option value="taipei">Taipei</option>
        <option value="taichung">Taichung</option>
        <option value="kaohsiung">Kaohsiung</option>
    </select><br>
    Please enter your comments: <textarea name="uComment" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset"><br>
</form>
<hr>
<a href="0314hw_logout.php">Logout</a>