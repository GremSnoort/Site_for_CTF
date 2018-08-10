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
							Novy_textovy_dokument_2</h2> <br>
                          
                          <h1 align=center >					
<h1 align=left >     
001000000000000000000010000010000000000000000000<br>
100000001000010000000000000000000000100001100000<br>
000001000010000000000000000001000000000000000000<br>
010000100000000000001001000000000000000001000000<br>
000000000000000000100000000000000010000000000000<br>
000000100000000100000000000000100000000000001<br>
<br></h1>
                            
                      
<h3> <span class="nubex1">P.S. Похоже, Док изобрел какой-то новый метод кодировки.</span><br><br></h3>
 
 </div>
     </div>
                  </div>
              </div>
  </section>
<?php include("includes/footer.php"); ?>
<?php endif; ?>