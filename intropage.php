<?php

session_start();

if(!isset($_SESSION["session_username"])):
header('Location: http://cp18366.tmweb.ru/login.php');
else:
?>
	
<?php include("includes/header.php"); ?>



<style> 

a.button18 { 


position: relative; 
display: inline-block; 
width: 4em; 
height: 2em; 
line-height: 2em; 
vertical-align: middle; 
text-align: center; 
text-decoration: none; 
color: #fff; 
outline: none; 
border-radius: 5px; 
box-shadow: 0 0 0 1px #ddd inset, 0 1px 1px #fff; 
} 
a.button18:hover { 
background: #dcdcdc linear-gradient(#FF6347, #66CDAA); 
box-shadow: 0 0 0 1px #aaa inset, 0 1px 1px #aaa; 
} 
a.button18:active { 
background: none; 
box-shadow: 0 0 0 1px #bbb inset, 0 1px 3px rgba(0,0,0,.5) inset, 0 1px 2px #fff; 
} 

#popup{
	width:550px;
	background:#fff;
	padding:30px;
	position:fixed;
	top:50%;
	left:50%;
	border-radius:3px;
	box-shadow:0 3px 3px rgba(0,0,0,0.5),inset 0 0 60px rgba(0,0,0,0.2);
	color:#565656;
	z-index:1000;
	margin-left:-275px;
	display:none;
}
#popup h3{
	font-size:16px;
	font-weight:bold;
}
#popup p{
	margin:6px 0;
}
#close_popup{
	width:14px;
	height:16px;
	background: url(../img/close.png) no-repeat;
	cursor:pointer;
	position:absolute;
	top:15px;
	right:15px;
}
#overlay{
	background:#000;
	position:fixed;
	top:0;
	left:0;
	height:100%;
	width:100%;
	opacity:0.5;
	z-index:999;
	display:none;
	
}


</style> 




<div id="welcome">
  
  
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
                     <li><a href="rating_table.php"><h4> Rating  </h4></a></li><br>
                    </ul>
                </nav>
                   
                    
                 
				<!-- /main nav -->
				
            </div>
        </header>
  <!DOCTYPE html>
<html>
  <head><script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/popup.js"></script></head>
  <div id="parent"> 



<div id="child"></div><center> 
    <a></a><br><br><br><br><br>
  <a href="http://cp18366.tmweb.ru/task_1.php" class="button18" tabindex="0"target="_blank" >1</a> 

<a href="https://www.dropbox.com/s/zul5whbbn4wt70w/encryption.zip?dl=0" class="button18" tabindex="0" target="_blank" >2</a> 
<a href="http://cp18366.tmweb.ru/task_3.php" class="button18" tabindex="0"target="_blank" >3</a> 
<a href="http://cp18366.tmweb.ru/task_4.php" class="button18" tabindex="0" target="_blank">4</a> 
<a href="http://cp18366.tmweb.ru/task_5.php" class="button18" tabindex="0" target="_blank">5</a><br><br> 
<a href="http://cp18366.tmweb.ru/task_6.php" class="button18" tabindex="0" target="_blank">6</a> 
<a href="http://cp18366.tmweb.ru/task_7.php" class="button18" tabindex="0" target="_blank">7</a> 
<a href="http://cp18366.tmweb.ru/task_8.php" class="button18" tabindex="0" target="_blank">8</a> 
<a href="https://www.dropbox.com/s/5e0z3fewndgrolc/LongDay.rar?dl=0" class="button18" tabindex="0" target="_blank">9</a> 
<a href="http://cp18366.tmweb.ru/css.php" class="button18" tabindex="0" target="_blank">10</a>
<a href="http://cp18366.tmweb.ru/task_11.php" class="button18" tabindex="0" target="_blank">11</a> 
<a href="http://cp18366.tmweb.ru/task_12.php" class="button18" tabindex="0" target="_blank">12</a> <br><br> 
<!--<a href="#" class="button18" tabindex="0">13</a> 
<a href="#" class="button18" tabindex="0">14</a> 
<a href="#" class="button18" tabindex="0">15</a><br><br><br> 
-->
<input type="image" src="../img/guru.png"  width="50" height="50" id="show_popup">

    </center> 

</div>
<!-- /main nav -->

<div id="popup">
	<h3>Пояснения к заданиям</h3>
	<p>3)
Я не Цезарь, не могу делать 13 дел одновременно, помоги мне с этим.</p>
<p>4) 
Это как в детстве ,надо найти отличия.</p>
<p>6)
Я скоро буду отсуткивать SOS, если ты мне не поможешь. 
Док отсавил подсказку , может это поможет, но в письме было 64 символа, может у нее есть другое свойство?</p>
	<p>	7) 
Нашел открытку в архивах Дока, интересно, как она туда попала?</p>
<p>9)
Ты можешь что-нибудь с этим сделать?


</p>
<p>10)Сейчас на сайтах много навящевых всплывающих окон, ты не поверишь, но раньше они тоже были. Я точно помню здесь оно было!  </p>
	
	<p>11)Похоже, Док изобрел какой-то новый метод кодировки. </p>
	<p>12)Нашел письмо у Дока на почте, так-то спам, но может пригодится.</p><div id="close_popup"></div>
	</div>
 <div id="overlay"></div> </html>
  
<div class="carousel-caption"> 
<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">WELCOME, <span><?php echo $_SESSION['session_username'];?>! </span></h2> 
<p data-wow-duration="1000ms" class="wow slideInLeft animated" ><a href="logout.php">Log out </a></p> 
<h3 data-wow-duration="1000ms" class="wow slideInRight animated" ><a href="userpage.php"> <span class="color">Start! </span></a></h3> 


<ul class="social-links text-center"> 
<li><a href="https://vk.com/katejones29" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li>
<li><a href="https://vk.com/annlet" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li> 
<li><a href="https://vk.com/ivladslav" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a></li> 

</ul> 

 <style>
@keyframes bounce {

0%, 20%, 60%, 100% {
-webkit-transform: translateY(0);
transform: translateY(0);
}
40% {
-webkit-transform: translateY(-20px);
transform: translateY(-20px);
}
80% {
-webkit-transform: translateY(-10px);
transform: translateY(-10px);
}
}
input:hover {
animation: bounce 1s;
}
	

</style>


</div> 





</div>

	
<?php include("includes/footer.php"); ?>
	
<?php endif; ?>

