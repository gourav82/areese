<!--<?php-->
<!--include 'database/database.php';-->
<!--if(isset($_POST))-->
<!--{	 -->
<!--	 $first_name = $_POST['first_name']; -->
<!--	 $last_name = $_POST['last_name']; -->
<!--	 $mobile = $_POST['mobile_number'];-->
<!--	 $email = $_POST['email'];-->
<!--	 $password = $_POST['password'];-->
<!--	 $class = $_POST['class'];-->
<!--	 $stream = $_POST['stream'];-->
<!--	 $promocode = $_POST['promo_code'];-->
<!--	 $authorize = $_POST['authorize'];-->
	 
<!--	 $sql = "INSERT INTO `registration` (`first_name`, `last_name`, `mobile_number`, `email`, `password`, `class`, `Stream`, `promo_code`, `authorize`, `user_refferal_code`)-->
<!--	 VALUES ('$first_name','$last_name','$mobile','$email','$password','$class','$stream','$promocode','$authorize','')";-->
<!--	 if (mysqli_query($conn, $sql)) {-->
<!--	 } else {-->
<!--		echo "Error: " . $sql  .' '. mysqli_error($conn);-->
<!--	 }-->
<!--	 mysqli_close($conn);-->
	 
<!--	 $to      = 'areesegurukulam@gmail.com';-->
<!--     $subject = "Student registration";-->
<!--     $message = "Name : $name, Email: $email,Password: $password,Mobile Number: $mobile, Class: $class, Stream: $stream";-->
<!--     $headers = 'From: sarchintu@gmail.com' . "\r\n" .-->
<!--    'Reply-To: info@areese.org' . "\r\n" .-->
<!--    'X-Mailer: PHP/' . phpversion();-->

     //mail($to, $subject, $message, $headers);
<!--}-->

<!--?>-->
