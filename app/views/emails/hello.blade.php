<!--This is a blade template that goes in email message to site administrator-->
<?php
//get the first name
$first_name = Input::get('inputFullname'); //first_name
// $last_name = Input::get ('last_name');
$phone_number = Input::get('inputPhone');
$email = Input::get ('inputEmail'); //email
// $subject = Input::get ('subject');
$message = Input::get ('inputMessage');
// $date_time = date("F j, Y, g:i a");
// $userIpAddress = Request::getClientIp();
?> 

<h1>We been contacted by.... </h1>

<p>
	First name: <?php echo ($first_name); ?> <br>
	Phone number: <?php echo($phone_number);?><br>
	Email address: <?php echo ($email);?> <br>
	Message: <?php echo ($message);?><br>
</p>