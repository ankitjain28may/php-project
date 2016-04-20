<?php
session_start();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$username=$_POST['branch'];
$mob=$_POST['college'];
include 'Registration module/class.register.php';
$ob= new register();
$result=$ob->_register($name,$email,$username,$password,$mob);
if($result=='ERROR')
{
  $_SESSION['error']="Error in Registration";
}
}
if(isset($_SESSION['start']))
die('Already Logged in');

?>



<!DOCTYPE html>
  <html>
    <head>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/stylee.css"/>

       <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title></title>

        
    </head>

    <body>


      <!--<nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
        </nav>-->

          <h5 style="color:red; text-align:center;" >
            <?php if(isset($_SESSION['error']))
            echo $_SESSION['error']; ?>
          </h5>


      <div class="row" id="main">
        <div class="col s12 m4 offset-m4">
          <div class="card blue-grey darken-1 z-depth-3">
            <div class="card-content white-text center">
              <span class="card-title">Registration</span>
              <form method="post" action="register.php">
              <!--form fields-->
                <div class="input-field">
                  <i class="material-icons prefix">verified_user</i>
                  <input id="icon_prefix" type="text" name="name" class="validate" value="<?php if(isset($_POST['submit'])) echo $name; ?>">
                  <label for="icon_prefix">Enter your name</label>
                  <p style="color:red; text-align:center;" >
                    <?php if(isset($_SESSION['name']))
                    echo $_SESSION['name']; ?>
                  </p>
                </div>

                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="email" name="email" value="<?php if(isset($_POST['submit'])) echo $email; ?>" class="validate">
                  <label for="icon_prefix">Enter your email</label>
                  <p style="color:red; text-align:center;" >
                    <?php if(isset($_SESSION['email']))
                    echo $_SESSION['email']; ?>
                  </p>
                </div>

                <div class="input-field">
                  <i class="material-icons prefix">label</i>
                  <input id="icon_prefix" type="text" name="branch" value="<?php if(isset($_POST['submit'])) echo $username; ?>" class="validate">
                  <label for="icon_prefix">Enter your username</label>
                  <p style="color:red; text-align:center;" >
                    <?php if(isset($_SESSION['username']))
                    echo $_SESSION['username']; ?>
                  </p>
                </div>

                <div class="input-field">
                  <i class="material-icons prefix">label</i>
                  <input id="icon_prefix" type="text" name="college" value="<?php if(isset($_POST['submit'])) echo $mob; ?>" class="validate">
                  <label for="icon_prefix">Enter your Mobile Number</label>
                  <p style="color:red; text-align:center;" >
                    <?php if(isset($_SESSION['mob']))
                    echo $_SESSION['mob']; ?>
                  </p>
                </div>


                <div class="input-field">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="icon_telephone" type="password" name="pass" value="<?php if(isset($_POST['submit'])) echo $password; ?>" class="validate">
                  <label for="icon_telephone">Password</label>
                  <p style="color:red; text-align:center;" >
                    <?php if(isset($_SESSION['password']))
                    echo $_SESSION['password']; ?>
                  </p>
                </div>
                 
                 
                <br>
                <div class="row">
                  <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn col m4 offset-m4 "></a>
                </div>
              </form>
            </div>
            <div class="card-action">
              <a href="index.php" >Login</a>
              <a href="#" class="right">Forgot Password</a>
            </div>
          </div>
        </div>
      </div>
            







      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  <?php
  unset($_SESSION['name']);
  unset($_SESSION['email']);
 unset($_SESSION['username']);
 unset($_SESSION['mob']);
 unset($_SESSION['password']);
 unset($_SESSION['error']);
          
  ?>