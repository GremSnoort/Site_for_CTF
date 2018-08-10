<?php require_once("includes/conn1.php"); ?>
<?php

session_start();

if(!isset($_SESSION["session_username"])):
header('Location: http://cp18366.tmweb.ru/login.php');
else:
?>
<?php include("includes/header.php"); ?>

<a></a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <style type="text/css">
 

    table {
    	 
    // border-collapse: collapse; /* Отображать двойные линии как одинарные */
      vertical-align:top;
      
	width: 100vh; /* высота секции равна высоте области просмотра */
     opacity: 1;
  /*   background="img/banner.jpg";*/
      margin: auto; 
font: 20px arial;

   }
   th {
   	
   	 text-align: center;
  font-weight: normal;
  color: #FFFFFF;
  padding: 10px 15px;
}
td {
  color: #808080;
  border-top: 1px solid #778899;
  padding: 10px 15px;
}
tr,td:nth-child(2n) { text-align: center;background: #2F4F4F;}
    th {
  
     text-align: center; /* Выравнивание по левому краю */
       vertical-align:top;
    }
    td, th {
    	 text-align: center;
     border: 1px solid #200; /* Параметры границы */
     border-color: #000000;
     padding: 4px; /* Поля в ячейках */
    } 
  </style>
  

<div id="RT">
  
  
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
                     <li><a href="intropage.php"><h4> Start Page  </h4></a></li><br>
                    </ul>
                </nav>
                   
                    
                 
				<!-- /main nav -->
				
            </div>
        </header>
  
  
  
  
  


  
  
							
							
  
  
	
  
   </div> 


<section id="facts" class="facts">

			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
		<h2 style="font-family:Arial Black">
							read this</h2> <br>
                          
                          <h1 align=center >					

                       <h1 align=left>  Dear Business person , This letter was specially selected <br>
to be sent to you . We will comply with all removal <br>
requests . This mail is being sent in compliance with <br>
Senate bill 1619 ; Title 9 ; Section 306 . Do NOT confuse <br>
us with Internet scam artists . Why work for somebody <br>
else when you can become rich as few as 30 weeks . <br>
Have you ever noticed how many people you know are <br>
on the Internet and more people than ever are surfing <br>
the web . Well, now is your chance to capitalize on <br>
this . We will help you increase customer response <br>
by 180% and deliver goods right to the customer's doorstep <br>
. You can begin at absolutely no cost to you ! But <br>
don't believe us ! Mrs Simpson of Idaho tried us and <br>
says "I've been poor and I've been rich - rich is better" <br>
! This offer is 100% legal ! We beseech you - act now <br>
! Sign up a friend and you'll get a discount of 90% <br>
. Warmest regards ! Dear Sir or Madam ; This letter <br>
was specially selected to be sent to you ! If you are <br>
not interested in our publications and wish to be removed <br>
from our lists, simply do NOT respond and ignore this <br>
mail . This mail is being sent in compliance with Senate <br>
bill 1916 , Title 7 ; Section 309 . This is not a get <br>
rich scheme ! Why work for somebody else when you can <br>
become rich as few as 62 weeks . Have you ever noticed <br>
nobody is getting any younger plus people love convenience <br>
. Well, now is your chance to capitalize on this . <br>
We will help you sell more and deliver goods right <br>
to the customer's doorstep . You can begin at absolutely <br>
no cost to you ! But don't believe us ! Mr Anderson <br>
who resides in Texas tried us and says "I was skeptical <br>
but it worked for me" ! We assure you that we operate <br>
within all applicable laws ! For God's sake, order <br>
now . Sign up a friend and you get half off . Cheers <br>
!  <br><br><br></h1>
             <h3> <span class="nubex1">P.S. Нашёл письмо у Дока на почте, так-то спам, но может пригодиться.</span><br><br></h3>

 
 </div>
     </div>
                  </div>
              </div>
  </section>
<?php include("includes/footer.php"); ?>
<?php endif; ?>