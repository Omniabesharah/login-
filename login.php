<style> 
body{

background-image:url("");

 }
</style>



<?php 


ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);







 print"<h1 align='center'  style='background-color:#FFCCCC'> <br > Login Form </h1> <br/ >";



// Check if the form has been submitted.
if ( isset ($_POST['submit'])) {
			session_start();
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];

			$_SESSION['loggedin'] = time();

	// Handle the form.
	if ( (!empty ($_POST['username'])) && (!empty ($_POST['password'])) ) {
	
		if ( ($_POST['username'] == $_POST['username']) && ($_POST['password'] == $_POST['password']) ) { // Okay.
	
			// Do session stuff.
			
			// Redirect the user to the welcome page!
		header ('Location: RobotC.php');
			exit();
		
		} else { // Not okay.
	
			print '<p>The submitted username and password do not match those on file!<br />Go back and try again.</p>';
		
		}
	
	} else { // Forgot a field.
	
		print "<p style='background-color:#FFCCCC'>Please make sure you enter both a username and a password!<br/>Go back and try again.</p>";
		
	}

} else { 

	// Display the form.
	print '<form action="login.php" method="post"  align="center"    style="background-color:#FFCCCC"><p>
<br ><br >Username: <input type="text"  name="username" placeholder="Enter Username" size="50" /><br >
	Password:  <input    type="password" name="password" placeholder="Enter Pass"  size="50" /><br >
	<br />
	<input type="submit" name="submit" value="Log In" /></p>
	</form>';

}

print '</div>';

?>




