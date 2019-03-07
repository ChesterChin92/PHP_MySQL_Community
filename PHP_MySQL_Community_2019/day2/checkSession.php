<?php

session_start();
if($_SESSION['userType']=="murid"){
	echo "You are a student you cannot enter this page.";
}

if($_SESSION['userType']=="cikgu"){
	echo "You are a teacher you can use this module";
}
