
<?php
function encrypt($password)
		{
										
										$salt="#kiet@karmana#";
										$pass=$salt.$password.$salt;
										$encr=sha1($salt.sha1($pass));
										return $encr;
									
										
		}
		?>