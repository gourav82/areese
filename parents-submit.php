<?php
include 'database/database.php';
if(isset($_POST))
{	 
	 $first_name = $_POST['first_name']; 
	 $last_name = $_POST['last_name']; 
	 $password = $_POST['password'];
	 $email = $_POST['email'];
	 $mobile = $_POST['mobile_number'];
	 $class = $_POST['class'];
	 $stream = $_POST['stream'];

	 $sql = "INSERT INTO `parents-registration` (`first_name`, `last_name`,`password`, `email`, `mobile_number`, `class`, `Stream`)
	 VALUES ('$first_name', '$last_name', '$password', '$email', '$mobile', '$class', '$stream')";
	 if (mysqli_query($conn, $sql)) {
	 } else {
		echo "Error: " . $sql  .' '. mysqli_error($conn);
	 }
	 mysqli_close($conn);
	 
	 $to      = 'areesegurukulam@gmail.com';
     $subject = "Student registration";
     $message = "Name : $name,Password: $password, Email: $email,Mobile Number: $mobile, Class: $class, Stream: $stream";
     $headers = 'From: sarchintu@gmail.com' . "\r\n" .
    'Reply-To: info@areese.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

     //mail($to, $subject, $message, $headers);
}

?>
