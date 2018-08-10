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
                      <li><a href="userpage.php"><h4> Check answers!  </h4></a></li><br>
                    </ul>
                </nav>
                   
                    
                 
				<!-- /main nav -->
				
            </div>
        </header>
  
  
  
  
  


  <?php

$rows = 2; // количество строк, tr
$cols = 10; // количество столбцов, td

$table = '<table border="1">';
    
    //"!!!!!!!!!!!!!!!!!
    
    $NEWquery =mysql_query("SELECT * FROM check_ans WHERE 1");
	$NEWnumrows=mysql_num_rows($NEWquery);  
	if($NEWnumrows!=0)
 {
      
      $table .= '<th>'. '№' .'</th>';
    // for ($td=1; $td<=$cols; $td++){ 
	while($NEWrow=mysql_fetch_assoc($NEWquery))
 	{
	$NEWdbtaskN=$NEWrow['taskN'];
  	
      $table .= '<th>'. $NEWdbtaskN .'</th>';
     
     
	 }
       $table .= '</tr>';
       $table .= '<th>'. '19.11' .'</th>';
       $NEWquery =mysql_query("SELECT * FROM check_ans WHERE 1");
	
       while($NEWrow=mysql_fetch_assoc($NEWquery))
 	{
	
  	$NEWdbRes=$NEWrow['user1911'];
     
     if($NEWdbRes==100){ $table .= '<td style="background-color:green">OK</td>';}else{$table .= '<td>'. $NEWdbRes .'</td>';}
     
	 }
      $table .= '</tr>';
      $table .= '<th>'. '20.11' .'</th>';
       $NEWquery =mysql_query("SELECT * FROM check_ans WHERE 1");
	
       while($NEWrow=mysql_fetch_assoc($NEWquery))
 	{
	
  	$NEWdbRes=$NEWrow['user2011'];
     
      if($NEWdbRes==100){ $table .= '<td style="background-color:green">OK</td>';}else{$table .= '<td>'. $NEWdbRes .'</td>';}
     
	 }
     //}
      $table .= '</tr>';
      echo $table;
    }
    
    //!!!!!!!!!!!!!!!!!!


?>
  
							
							
  
  
	
  
   </div> 
 
 
<?php include("includes/footer.php"); ?>
<?php endif; ?>