<?php require_once("includes/conn1.php"); ?>
<?php
$res=mysql_query("SELECT * FROM string");
while($row=mysql_fetch_array($res))
{
//echo $row['password']."<br>";
//echo $row['username']."<br>";
}
?>
<?php 
if(isset($_POST["userpage"]))
{
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query =mysql_query("SELECT * FROM string WHERE username='".$username."' AND password='".$password."'");
	$numrows=mysql_num_rows($query);  
	if($numrows!=0)
                 {
                 while($row=mysql_fetch_assoc($query))
                 {
                	$dbnumber=$row['username'];
                    $dbanswer=$row['password'];
                    
                 }
                         if($username == $usernadbme && $password == $dbpassword)
                         {
                           header('Location: http://cp18366.tmweb.ru/intropage.php');
                          echo "true"."<br>";
                          // redirect();
   
	                      }
	                      else{echo "kek!"."<br>";}
         	} 
                  else
               	{
	//  $message = "Invalid username or password!";
	
          	echo  "Invalid nuber or answer!"."<br>";
                 }
  	} 
	else 
	{
    //$message = "All fields are required!";
      echo  "All fields are required!"."<br>";
	}
	}
	?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Задания</title>
		</head>
		
<body style="color: #E09D0D">





<div class="container mlogin">
<div id="login">
  
  <div class="carousel-caption">
<h1 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" >Проверка заданий</h1>
<form action="" id="loginform" method="post"name="loginform">
<p data-wow-duration="1000ms" class="wow slideInLeft animated" ><label for="user_login"><span class="color">Номер задания</span><br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p data-wow-duration="1000ms" class="wow slideInRight animated" ><label for="user_pass"><span class="color">Ответ</span><br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p> 
	<p background: #f47c20;  data-wow-duration="1000ms" class="wow slideInLeft animated" class="submit"><input class="button" name="login"type= "submit" value="Проверить"></p>
  
   </form>
   </div> 
 </div>
  </div>



</body>
</html>