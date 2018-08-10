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
background: #dcdcdc linear-gradient(#2F4F4F, #3CB371); 
box-shadow: 0 0 0 1px #aaa inset, 0 1px 1px #aaa; 
} 
a.button18:active { 
background: none; 
box-shadow: 0 0 0 1px #bbb inset, 0 1px 3px rgba(0,0,0,.5) inset, 0 1px 2px #fff; 
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
                       
                        <br><li><a href="index.html"><h4>Main Page</h4></a></li>
                       <br><li><a href="rating_table.php"><h4>Rating</h4></a></li>
                    </ul>
                </nav>
                   
                    
                 
				<!-- /main nav -->
				
            </div>
        </header>
  
  
  <div id="parent"> 



<div id="child"></div><center> 
    <a></a><br><br><br><br> 
  <a href="https://www.dropbox.com/s/uml8ytq6azcn27i/%D1%8D%D0%BB.rar?dl=0" class="button18" tabindex="0"target="_blank" >1</a> 

<a href="https://www.dropbox.com/s/zul5whbbn4wt70w/encryption.zip?dl=0" class="button18" tabindex="0" target="_blank" >2</a> 
<a href="https://www.dropbox.com/s/zwte1s393628h0b/Android%20script.docx?dl=0" class="button18" tabindex="0"target="_blank" >3</a> 
<a href="https://www.dropbox.com/s/1ja7pouven68eok/%D0%A2%D0%B0%D1%81%D0%BA%D0%B8.rar?dl=0" class="button18" tabindex="0" target="_blank">4</a> 
<a href="https://www.dropbox.com/s/s3a12qskd36ru65/Back_to_the_future%5B218%5D.rar?dl=0" class="button18" tabindex="0" target="_blank">5</a><br><br> 
<a href="#" class="button18" tabindex="0">6</a> 
<a href="#" class="button18" tabindex="0">7</a> 
<a href="#" class="button18" tabindex="0">8</a> 
<a href="#" class="button18" tabindex="0">9</a> 
<a href="#" class="button18" tabindex="0">10</a><br><br> 
<a href="#" class="button18" tabindex="0">11</a> 
<a href="#" class="button18" tabindex="0">12</a> 
<a href="#" class="button18" tabindex="0">13</a> 
<a href="#" class="button18" tabindex="0">14</a> 
<a href="#" class="button18" tabindex="0">15</a>
    </center> 

</div>
  
  
<div class="carousel-caption"> 
<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">WELCOME, <span><?php echo $_SESSION['session_username'];?>! </span></h2> 
<p data-wow-duration="1000ms" class="wow slideInLeft animated" ><a href="logout.php">Log out </a></p> 
<h3 data-wow-duration="1000ms" class="wow slideInRight animated" ><a href="userpage.php"> <span class="color">Start! </span></a></h3> 


<ul class="social-links text-center"> 
<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li> 

<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li> 
<li><a href="https://vk.com/annlet"><i class="fa fa-dribbble fa-lg"></i></a></li> 
<li><a href="https://vk.com/ivladslav"><i class="fa fa-dribbble fa-lg"></i></a></li> 

</ul> 



</div> 




</div>
	
<?php include("includes/footer.php"); ?>
	
<?php endif; ?>

