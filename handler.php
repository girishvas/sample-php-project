<html>
<head>
<title>girish vas</title>
</head>
<body>
<h1>Enter your Name</h1>
<form action = "handler.php" method ="post">
<p>What is your Name : </p>
<input type = "text" name ="username">
<p>What is your favorite color : 
<input type = "radio" name ="favcolor" value = "r" />Red 
<input type = "radio" name ="favcolor" value = "g" />Green 
<input type = "radio" name ="favcolor" value = "b" />Blue
</p>

<input type ="submit" value ="submit"/>
</form>
<?php 
$strheading = "<h1>Hello"." ".$_POST["username"]."</h1>";
switch ($_POST["favcolor"])
{
	case "r" :
		$strbackgroundcolor = "rgb(255,0,0)";
		break;
	case "g" :
		$strbackgroundcolor = "rgb(0,255,0)";
		break;
	case "b" :
		$strbackgroundcolor = "rgb(0,0,255)";
		break;
	default:
		$strbackgroundcolor = "rgb(255,255,255)";
		break;
}
?>
</body>
</html>
<html>
<head>
</head>
<body style = "background: <?php echo $strbackgroundcolor ?>;">
<?php echo $strheading ?>
</body>
</html>