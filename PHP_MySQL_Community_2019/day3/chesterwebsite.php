<?php
require_once('./functionLibrary.php');
//require_once('./function2.php');

checkSession();
renderHeadAdv("My special website");
echo generateNavbar('practice.html','black');
?>

<p>This is my content</p>


<?php
renderFoot();
?>