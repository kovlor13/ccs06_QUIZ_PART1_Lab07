<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
// Session_Start(); essentially allows the user to resume an existing session via storing a data that can be  access across multiple pages or- 
// -request if ever needed by the said user,  as long it has the saame ID, for instance we can start a session where the program requires the user to input user name,
// we can make the id of the name simply "username" if we are ever gonna call on this we are gonna simple type the session Id along with the Session Command.
// in this app we used it to call the user's information such

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Enter your full name:<br />
		<input type="text" name="fullname" placeholder="Full Name" required />
		<br />

		Enter your Email:<br />
		<input type="email" name="email" placeholder="email"/>
		<br />

		Enter your Birthdate:<br />
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br />

		<input type="submit">
	</form>

</body>
</html>

<!-- DEBUG MODE -->``
<pre>
<?php
var_dump($_SESSION);
?>
</pre>
