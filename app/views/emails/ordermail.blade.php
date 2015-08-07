<!--This is a blade template that goes in email message to site administrator-->
<?php
//get the first name
$full_name = Input::get('inputFullname'); //first_name
$phone_number = Input::get('inputPhone');
$email = Input::get ('inputEmail'); //email
$Product_name = Input::get ('inputProductName');
$ProductQty = Input::get ('inputProductQty');
$message = Input::get ('inputMessage');
// $date_time = date("F j, Y, g:i a");
// $userIpAddress = Request::getClientIp();
?> 

<h1>Someone is making an order.... </h1>

<p>
	Full name: <?php echo ($full_name); ?> <br>
	Phone number: <?php echo($phone_number);?><br>
	Email address: <?php echo ($email);?> <br>
	Product name: <?php echo ($Product_name);?> <br>
	Product quantity: <?php echo ($ProductQty);?> <br>
	Message: <?php echo ($message);?><br>
</p>