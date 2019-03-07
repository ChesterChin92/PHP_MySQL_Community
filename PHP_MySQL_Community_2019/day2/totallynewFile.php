<?php

session_start();

if($_SESSION['mybucket']=="ali"){
  echo "You can view this page";
}
else
{
    echo "You are not Ali, pls login again.";
}

?>