<html>
<body>
<?php
$values =array("Lakshya" , "Pass");
$fname = $lname = $Gender = $password = $country = $mail= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$fname = test_input($_POST["firstname"]);
	
		$lname = test_input($_POST["lastname"]);
	
        if(isset($_POST['gender'])) {
		$Gender =$_POST["gender"];
		}
	
	$country = test_input($_POST["country"]);
	$mail = test_input($_POST["e-mail"]);
	
		$password = test_input($_POST["password"]);
    
}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(empty($_POST["firstname"]) or empty($_POST["password"]) or empty($_POST["lastname"]) or empty($_POST["password"])  or empty($_POST["gender"])) {
	echo 'one of the required field is empty';
}
else {
if ($fname == $values[0] and $password == $values[1]) {
 echo 'LOG IN SUCEESSFULL<br>';
 echo 'Welcome:' . $fname . "<br>" ; 
 echo 'Your Last Name is:' . $lname . "<br>"; 
 echo 'your Password is:' . $password . "<br>" ; 
 echo 'your Country is:' . $country . "<br>" ; 
 echo 'your e-mail is:' . $mail . "<br>" ; 
 echo 'your gender is: ' . $Gender . "<br>" ; 
}
else {
		 echo 'either name or password is incorrect';
}
}
?>

</body>
</html>