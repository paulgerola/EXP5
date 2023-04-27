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

<form action=login.php method=get style="Times New Roman;
font-size: 40;
color: black;
text-align: center;">
	ENTER YOUR FULLNAME: 
	<br>
	<input type=text name=fullname required style="  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;">
  	<br>
<form action=login.php method=get style="Times New Roman;
font-size: 40;
color: black;
text-align: center;">
	ENTER YOUR YEAR AND SECTION: 
	<br>
	<input type=text name=yr/section required style="  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;">
  	<br>
	<input type=submit value='Take Exam Now' name=btnsub style="width: 50%;
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
	$_SESSION['full']=$_GET['fullname'];
	header("Location:question1.php");
}
?>

</body>