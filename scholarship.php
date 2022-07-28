<?php 
include 'database/database.php';

if(isset($_POST))
{	 
	 $name = $_POST['Name'];
	  $mobile = intval($_POST['Mobile']);
	 $father_name = $_POST['father-name'];
	 $father_mobile = intval($_POST['father-mobile']);
	$email = $_POST['EmailId'];
	 $class = $_POST['Class'];
	 $stream = $_POST['Stream'];
	 $state = $_POST['state'];
	 $father_nm = '`father-name`';
	 $father_mob = '`father-mobile`';
// 	$sql = "INSERT INTO `scholarship`(`name`, `email`, `father-name`, `father-mobile`, `mobile`, `class`, `stream`, `pincode`)
// 	 VALUES ([$name],[$email],[$father_name],[$father_mobile],[$mobile],[$class],[$stream],[$state])";
// 	INSERT INTO `scholarship`(name,mobile,$father_nm,$father_mob,email,class,stream,state)
// 	 VALUES ('$name','$mobile','$father_name','$father_mobile','$email','$class','$stream','$state')";
 $sql = "INSERT INTO `scholarship` (`name`, `email`, `father-name`, `father-mobile`, `mobile`, `class`, `stream`, `pincode`)
VALUES ('', '', '', NULL, '', '', '', ''), ('$name', '$email', '$father_name', '$father_mobile', '$mobile', '$class', '$stream', '$pincode')";
	 if (mysqli_query($conn, $sql)) {
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	 
	 $to      = 'areesegurukulam@gmail.com';
     $subject = "Student registration";
     $message = "Name : $name, Email: $email,Password: $password,Mobile Number: $mobile, Class: $class, Stream: $stream";
     $headers = 'From: sarchintu@gmail.com' . "\r\n" .
    'Reply-To: info@areese.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}

?>