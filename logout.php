<body style="background-image: linear-gradient(to right, #00ff00, #ffff00);">

<center>
	<img src="udm.png" style="width: 200;height: 200;">
</center>
<br>
<br>
<?php 
session_start();
if (isset($_SESSION['full']))
	{
	print "GOODBYE " .  $_SESSION['full'] .  " !!!THANK YOU FOR TAKING THE EXAM AND ALSO CONGRATULATIONS!!!";
	session_unset();
	}
else
	header ("Location: login.php");
?>