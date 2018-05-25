<?php
	// echo "Name: ".$_POST['name']."<br>";
	// echo "Email: ".$_POST['email']."<br>";
	// echo "Address: ".$_POST['address']."<br>";
	// echo "Password: ".$_POST['password']."<br>";
	// echo "CPassword: ".$_POST['cpassword'];

	if ($_POST['name']) {
		
		if ($_POST['email']) {
			
			if ($_POST['address']) {
					
					if ($_POST['password']) {
						
						if ($_POST['cpassword']) {
							
							if ($_POST['password'] == $_POST['cpassword']) {
								
								echo "Your form has been successfully";
							}
							else{
								echo "Your Password doesn't match";
							}
						}
						else{
							echo "You have to ";
						}
					}
				}	
		}
	}
?>