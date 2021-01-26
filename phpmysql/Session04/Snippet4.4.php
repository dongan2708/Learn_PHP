<?php
error_reporting(0);
$a = $_POST["empid"];
$b = $_POST["name"];
$c = $_POST["dept"];
$d = $_POST["email"];
echo "Your personal details", "<br>",
"empid : $a <br>",
"name : $b <br>",
"department name : $c <br>",
"email : $d <br>";
?>