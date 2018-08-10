<?php session_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php
if(isset($_SESSION["session_username"])){
header('Location: http://cp18366.tmweb.ru/intropage.php');
exit();
     // redirect();      
      //echo 'window.location.href="'http:\\cp18366.tmweb.ru\intropage.php'";';	
	}
	if(isset($_POST["login"])){
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
	$numrows=mysql_num_rows($query);  
	if($numrows!=0)
 {
while($row=mysql_fetch_assoc($query))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
if($username == $dbusername && $password == $dbpassword)
 {	
    $_SESSION['session_username']=$username; 
  
header('Location: http://cp18366.tmweb.ru/intropage.php');
exit();
   // redirect();
   
	}
	} else {
	//  $message = "Invalid username or password!";
	
	echo  "Invalid username or password!";
 }
	} else {
    //$message = "All fields are required!";
      echo  "All fields are required!";
	}
	}
	?>


 
 
 
<?php include("includes/header.php"); ?>

 <style>
 input.button{
 	
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.08);
-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.08);
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.08);
color: #fff;
display:block;
width:100px;
text-align: center;
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
padding: 8px 16px;
margin: 20px auto;
text-decoration: none;
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
-webkit-transition: background-color 0.1s linear;
-moz-transition: background-color 0.1s linear;
-o-transition: background-color 0.1s linear;
transition: background-color 0.1s linear;
}
input.button {
background-color: rgb( 43, 153, 91 );
border: 1px solid rgb( 33, 126, 74 );
}

input.button:hover {
background-color: rgb( 75, 183, 141 );
}
 	input.input{
	border-radius: 4px;
	background-color:#fff;
	color:#000;
}

input.input:hover{
	background-color:#DCDCDC;
}
div.ram{
	color:#fff;

background-color: rgb( 75, 183, 141 );
padding: 50px;
width:450px;
border-radius: 16px;
}
 </style>
  
<div class="container mlogin">
<div id="login">
  
  <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
				

                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="navbar" >
                       
                        <br><li><a href="index.html"><h4>  Main Page  </h4></a></li><br>
                    
                    </ul>
                </nav>
                   
                    
                 
				<!-- /main nav -->
				
            </div>
        </header>
  
  <div class="carousel-caption"><center><div class="ram"><center>
<h1 data-wow-duration="700ms" data-wow-delay="500ms" class="but" >LOG IN</h1>
<form action="" id="loginform" method="post"name="loginform">
<p data-wow-duration="1000ms" class="wow slideInLeft animated" ><label for="user_login"><span style="font-family:Arial Black" class="par">Username</span><br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p data-wow-duration="1000ms" class="wow slideInRight animated" ><label for="user_pass"><span style="font-family:Arial Black" class="par">Password</span><br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
	<input class="button" name="login"type= "submit" value="Log In"></center></div></center>
  
  
							
							<ul class="social-links text-center">
								<li><a href="https://vk.com/katejones29" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li>
								<li><a href="https://vk.com/annlet" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li>
								<li><a href="https://vk.com/ivladslav" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li>
                              
							</ul>
  
  
	
   </form>
   </div> 
 </div>
  </div>
<?php include("includes/footer.php"); ?>