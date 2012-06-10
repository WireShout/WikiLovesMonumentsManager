<?php
	//Server Files, Connect to MySQL variables
		$host = 'localhost'; //Default: Localhost
		$username = 'root'; //MySQL Database User
		$password = ''; //MySQL Database Password (PLEASE set one)
		$database = 'web-wikim_db1'; //Database Name
		$verifySalt = ''; //This should be a random 8 or more character alpha-numeric string for encryption purposes.
	@mysql_connect($host,$username,$password) or die('Wiki Loves Monument\'s Submission and Voting System is offline.');
	@mysql_select_db($database) or die('We are having an issue locating the database...');
	//Clear Variables to be careful
		$host = '';
		$username = '';
		$password = '';
		$database = '';
?>