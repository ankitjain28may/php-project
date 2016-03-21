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

  		<div class="row" id="main">
        <div class="col s12 m4 offset-m4">
          <div class="card blue-grey darken-1 z-depth-3">
            <div class="card-content white-text center">
              <span class="card-title">Login</span>
              <form method="post" action="home.php">
              <!--form fields-->

              <div>


                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="email" name="email" class="validate">
                  <label for="icon_prefix">Enter your email</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="icon_telephone" type="password" type="pass" class="validate">
                  <label for="icon_telephone">Password</label>
                </div>
                <br>
                <div class="row">
                  <input type="submit"class="waves-effect waves-light btn col m4 offset-m4 "></a>
                </div>
              </form>
            </div>
            <div class="card-action">
              <a href="register.php" >Register Now</a>
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