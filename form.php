<?php require 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>
<h1>Please fill out this Form!</h1>
<p>We look forward to hearing from you!</p>
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
	<form action="form.php" method="post">
		First Name: <input type="text" name="first_name" required="required" />
		<br />
		<br />
		Email: <input type="email" name="email" required="required" />
		<br />
		<br />
		Address: <input type="text" name="address" required="required" />
		<br />
		<br />
		
		<label><h2>Gender</h2></label>
		<p>
			<input type="radio" name="gender" id="gender1" value="male">Male
		</p>
		<p>
			<input type="radio" name="gender" id="gender2" value="female">Female
		</p>
			<label><h2>Favorite Beers</h2></label>
			<br />
		<p>
			<input type="checkbox" name="beer []" id="beer1" value="pilsner">pilsner
		</p>
		<p>
			<input type="checkbox" name="beer []" id="beer2" value="stout">stout
		</p>
		<p>
			<input type="checkbox" name="beer []" id="beer3" value="ipa">ipa
		</p>
		<p>
			<input type="checkbox" name="beer []" id="beer4" value="cider">cider
		</p>
		<br />
			Comments:<textarea name="comments"></textarea>
			<br />
			<br />
			<input type="submit" value="Click Me!" name="submit" />
		<br />
	</form>
	
	';
}

?>
<?php include 'includes/footer.php'; ?>