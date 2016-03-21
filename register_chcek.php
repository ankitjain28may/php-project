<?php

session_start();
$user=$_POST['name'];
$email=$_POST['email'];
$pass=md5($_POST['pass']);
$branch=$_POST['branch'];
$college=$_POST['college'];


if(filter_var($email,FILTER_VALIDATE_EMAIL)== true)
{
	//connect the database

	require 'mysqli_connect.php';

	//create the table in a databse

	$query="CREATE TABLE IF NOT EXISTS account_info (
		mem_id int primary key auto_increment unique not null,
		name varchar(255) not null,
		email varchar(255) unique not null,
		college varchar(255) not null,
		branch varchar(255) not null
		 ) ENGINE=INNODB;";
	//run the query

	if($db->query($query)) //if true
	{
  		
  		//query created

		$query="CREATE TABLE IF NOT EXISTS login_info (
			mem_id int primary key auto_increment unique not null,
			email varchar(255) unique not null,
			pass varchar(255) not null,
			same_id int not null,
			FOREIGN KEY (same_id) REFERENCES account_info(mem_id)
			 ) ENGINE=INNODB;";

		if($db->query($query))
		{ //if true second table created

			//checking for the email

			$query="SELECT * FROM account_info WHERE email='$email'";
			$result=$db->query($query) or die("Query in not executed");

			if($result->num_rows>0) // if email is found in database
			{
				//already registered

				$_SESSION['error']="Already registered with this email";
				header('Location: register.php');

			}
			else
			{
				//Register him/her

				$query="INSERT INTO account_info VALUES(null, '$user', '$email', '$college', '$branch' )"; // values are inserted
				$result=$db->query($query) or die("Query in not executed for insertion your values"); // Query is run

				$query= "SELECT mem_id FROM account_info WHERE email='$email'"; 
			
				$result= $db->query($query);

				$row = $result->fetch_assoc();
	        	$col= $row["mem_id"];

	        	$query="INSERT INTO login_info VALUES(null, '$email', '$pass', '$col')";
	        	if($db->query($query))
	        	{
	        		$_SESSION['active']=1;
	        		$_SESSION['succes']=1;
	        		header('Location: home.php');
	        	}
	        	else
	        	{
	        		$_SESSION['error']="Your data is not stored in the second table";
	        		header('Location: register.php');
	        	}


			}
		}
		else
		{
			$_SESSION['error']="Query not run to create second table";
			header('Location: index.php');
		}
	}
	else
	{
		$_SESSION['error']="Query not run to create first table";
		header('Location: index.php');
	}
}
else
{
	$_SESSION['error']="Incorrect Email Id";
	header('Location: register.php');
}




?>