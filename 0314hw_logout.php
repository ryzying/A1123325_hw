<?php
session_start();
session_destroy();
header("Location:0314hw_login.php");
exit();