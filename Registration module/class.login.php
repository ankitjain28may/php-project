<?php
@session_start();
require_once 'database.php';
class login
{

	private $login;
	private $password;
	private $key;

	function __construct()
	{
		$_SESSION['password']='';
		$_SESSION['login']='';
	}

	function _login($login,$password)
	{
		$bd = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		$this->login=trim($login);
		$this->password=trim($password);

		if(empty($this->login)) 
		{
			$this->key=1;
			$_SESSION['login']="Enter the login field";
		}
		elseif (ereg("^[@]{1}$",$this->login))
		{	
			if(filter_var($this->email,FILTER_VALIDATE_EMAIL)== false) 
			{
			$this->key=1;
			$_SESSION['login']="Enter correct Email address";
			}
		}

		
		if(empty($this->password)) {
			$this->key=1;
			$_SESSION['password']="Enter the password";
		}
		else
		{
			$password=md5($this->password);
		}


		if(true)
		{
			$query="SELECT * FROM login WHERE email='$this->login' or username='$this->login'";
			if ($result=$bd->query($query)) 
			{
				
				if ($result->num_rows>0) 
				{
					$row=$result->fetch_assoc();
					$login_id=$row['login_id'];
					$query="SELECT id FROM register WHERE id='$login_id' and password='$password'";
					$result=$bd->query($query);
					if ($result->num_rows>0)
					{
						$_SESSION['start']=1;
						header('Location: account.php');
					}
					else
					{
						$_SESSION['password']="Invalid Password";
					}
				}
				else
				{
					$_SESSION['login']="Invalid username or email";
				}
			}
			
		}
		else
		{
			return "ERROR";
		}
	}
}





?>