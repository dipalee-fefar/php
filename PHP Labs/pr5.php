//WAP to print class of result based on percentage using switch statement (i.e. less
//than 40% -> Fail, 40% to 50% -> Pass Class, 50% to 60% -> Second Class, 60% to
//70% -> First Class, above 70% -> Distinction)*/

<?php
if(isset($_GET['num1'])&& isset($_GET['num2']) && isset($_GET['num3']) && isset($_GET['num4']) && isset($_GET['num5'])){
$n1 = $_GET['num1'];
$n2 = $_GET['num2'];
$n3 = $_GET['num3'];
$n4 = $_GET['num4'];
$n5 = $_GET['num5'];
$total = n1+n2+n3+n4+n5;
$n = ($total)/5;
if($n1>=40 && $n2>=40 && $n3>=40 && $n4>=40 && $n5>=40){
	print("pass");
switch ($n) {
	case 1:
		if($n>=70)
		{
			print("Distinction");
		}
		break;
	case 2:
		if($n>=60)
		{
			print("First class");
		}
		break;
	case 3:
		if($n>=50)
		{
			print("Second class");
		}
		break;
	case 4:
		if($n>=40)
		{
			print("Pass class");
		}
		break;
	
	default:
		print("Faill");
}
}

}
	
?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<form>
	Enter marks-1:
	<input type="text" name="num1"><br/>
	Enter marks - 2:
	<input type="text" name="num2"><br/>
	Enter marks -3:
	<input type="text" name="num3"><br/>
	Enter marks-4:
	<input type="text" name="num4"><br/>
	Enter marks-5:
	<input type="text" name="num5"><br/>
	<input type="submit" id="submit">
	</form>
</body>
</html>