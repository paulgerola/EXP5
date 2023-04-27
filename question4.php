<body style="background-image: linear-gradient(to right, #00ff00, #ffff00);">

<center>
	<img src="udm.png" style="width: 200;height: 200;">
</center>

<h1 style="font-family: Times New Roman;
font-size: 60;
color: black;
text-align: center;
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: black;
margin-top: 5%;">

	UDM EXAMINATION
</h1>


<?php
	session_start();
	if (empty($_SESSION['full']))
	{
		print "Sorry <a href=login.php>Login first</a>";
		exit();

	}
?>

<form action=question4.php method=get style="font-family: Times New Roman;
font-size: 40;
color: black;
text-align: center;">
	In which museum can you find Leonardo Da Vinci’s Mona Lisa?
	<br>
	<p>
	<input type=radio value='The Louvre Museum' name=q4 style="width: 2em;
	height: 2em;">The Louvre Museum
	<input type=radio value='Metropolitan Museum' name=q4 style="width: 2em;
	height: 2em;">Metropolitan Museum of Art
	<p><input type=submit value='Next Question' name=btnsub style="width: 50%;
  background-color: #ff0000;
  font-family: Times New Roman;
  font-size: 20;
  color: whitesmoke;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;"> 
</form>

<?php 
if (isset($_GET['btnsub'])) 
{
	session_start();
	$_SESSION['q4']=$_GET['q4'];
	header("Location:question5.php");
}
?>