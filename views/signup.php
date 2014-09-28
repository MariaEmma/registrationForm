<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signup page</title>
	

</head>
<body>

<div id="container">
	<h1>Signup</h1>
	
<?php
	echo form_open('main/signup_validation');
	echo validation_errors();

	echo "<p>Email: ";
	echo form_input('email', $this->input->post('email'));
	echo "</p>";

	echo "<p>Password: ";
	echo form_password('password');
	echo "</p>";
	
	echo "<p>Confirm Password: ";
	echo form_password('cpassword');
	echo "</p>";

	echo "<p>";
	echo form_submit('signup_submit','Signup');
	echo "</p>";

	echo form_close();

?>


</div>

</body>
</html>