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

	$full = $_SESSION['full'];
	$q1 = $_SESSION['q1'];
	$q2 = $_SESSION['q2'];
	$q3 = $_SESSION['q3'];
	$q4 = $_SESSION['q4'];
	$q5 = $_SESSION['q5'];
	$q6 = $_SESSION['q6'];
	$q7 = $_SESSION['q7'];
	$q8 = $_SESSION['q8'];
	$q9 = $_SESSION['q9'];
	$q10 = $_SESSION['q10'];
	
	$a=0;
	$b=0;
	$c=0;
	$d=0;
	$e=0;
	$score;
	if ($q1=="Rome")
		{
			$a=1;
			$a1="Correct";
		}
	else
		{
		$a=0;
		$a1="Incorrect";
		}
	
	if ($q2=="The Philippine Constitution")
	{
		$b=1;
		$b1="Correct";
	}
	else
		{
		$b=0;
		$b1="Incorrect";
		}
	if ($q3=="Mauna Loa")
	{
		$c=1;
		$c1="Correct";
	}
	else
		{
		$c=0;
		$c1="Incorrect";
		}
	if ($q4=="The Louvre Museum")
	{
		$d=1;
		$d1="Correct";
	}
	else
		{
		$d=0;
		$d1="Incorrect";
		}
	if ($q5=="Asia")
	{
		$e=1;
		$e1="Correct";
	}
	else
		{
		$e=0;
		$e1="Incorrect";
		}
	if ($q6=="Alexander Graham Bell")
	{
		$f=1;
		$f1="Correct";
	}
	else
		{
		$f=0;
		$f1="Incorrect";
		}
	if ($q7=="Leo")
	{
		$g=1;
		$g1="Correct";
	}
	else
		{
		$g=0;
		$g1="Incorrect";
		}
	if ($q8=="6")
	{
		$h=1;
		$h1="Correct";
	}
	else
		{
		$h=0;
		$h1="Incorrect";
		}
	if ($q9=="A Mathematician")
	{
		$i=1;
		$i1="Correct";
	}
	else
		{
		$i=0;
		$i1="Incorrect";
		}
	if ($q10=="Grand Canyon, USA")
	{
		$j=1;
		$j1="Correct";
	}
	else
		{
		$j=0;
		$j1="Incorrect";
		}
	
	
	$score = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j;

	print "<table border=1 cellpadding='20' align='center' bordercolor='black'>
	<tr><td style='font-family: Times New Roman;font-size: 30;color: black;text-align: center;'>STUDENT'S NAME:<td style='font-family: Times New Roman;font-size: 30;color: black;text-align: center;'>$full<td style='font-family: Times New Roman;font-size: 30;color: black;text-align: center;'>STATUS 
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>1. In which Italian city can you find the Colosseum?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q1<td style='font-family: Times New Roman;font-size: 20;color: black;'>$a1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>2. Which is the fundamental law of the Philippines?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q2<td style='font-family: Times New Roman;font-size: 20;color: black;'>$b1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>3. What is the largest active volcano in the world?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q3<td style='font-family: Times New Roman;font-size: 20;color: black;'>$c1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>4. In which museum can you find Leonardo Da Vinci’s Mona Lisa? <td style='font-family: Times New Roman;font-size: 20;color: black;'>$q4<td style='font-family:Times New Roman;font-size: 20;color: black;'>$d1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>5. What is the largest continent in size?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q5<td style='font-family: Times New Roman;font-size: 20;color: lack;'>$e1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>6. Which famous inventor invented the telephone?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q6<td style='font-family: Times New Roman;font-size: 20;color: black;'>$f1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>7. If you are born on the 15th of August, which star sign are you?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q7<td style='font-family: Times New Roman;font-size: 20;color: black;'>$g1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>8. How many sides has a Hexagon?<td style='font-family: Times New Roman;font-size: 20;color:black;'>$q8<td style='font-family: Times New Roman;font-size: 20;color: black;'>$h1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>9. What was Euclid?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q9<td style='font-family: Times New Roman;font-size: 20;color: black;'>$i1
	<tr><td style='font-family: Times New Roman;font-size: 20;color: black;'>10. What is the largest canyon in the world?<td style='font-family: Times New Roman;font-size: 20;color: black;'>$q10<td style='font-family: Times New Roman;font-size: 20;color: black;'>$j1
	
	</table>";
	print "<p style='font-family: Times New Roman;font-size: 50;color: black;text-align: center;'>TOTAL SCORE: $score";
	
	if ($score > 4)
		print "<p style='font-family: Times New Roman;font-size: 30;color: blue;text-align: center;'><b>YOU PASSED</b></p>";
	else
		print "<p style='font-family: Times New Roman;font-size: 30;color: red;text-align: center;'><b>YOU FAILED (BETTER LUCK NEXT TIME)</b></p>";
	?>
	
	<p><a href=logout.php style="font-family: Times New Roman;
	font-size: 40;
	color: whitesmoke;
	text-decoration: none;
	padding: 10px;
	border: solid;
	border-color: #ff0000;
	border-radius: 10px;
	background-color: #ff0000;
	margin-left: 42%;">
	LOGOUT</a>
