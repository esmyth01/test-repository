<?php require 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>
<h1>Contact Us</h1>
<p>Why? Because we care!</p>
<?php

if(isset($_POST['submit'])){
//if there's data, show the form
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('esmyth01@seattlecentral.edu', 'test subject',$message);
	
	echo 'Thank you for your email!';

}else{
//show the form
	echo '
	<form action="contact.php" method="post">
	First Name: <input type="text" name="first_name" required="required" />
	<br />
	Email: <input type="email" name="email" required="required" />
	<br />
	Comments:<textarea name="comments"></textarea>
	<input type="submit" value="Click Me!" name="submit" />
	<br />
	</form>
	
	';
}

?>
<?php include 'includes/footer.php'; ?>