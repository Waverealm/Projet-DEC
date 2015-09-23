<?php
   session_start();

   include_once('../controller/interface_functions.php');
?>

<!DOCTYPE html>
<html>
	<head>
    	<title>Journal de bord</title> 
		<meta charset="utf-8">
      <meta name="author" content="Léa Kelly"> 
      <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<link rel="Stylesheet" href="../css and js/css_global.css" />
	</head>
	<body>

    	<div class="page">
         <div class="div_page_content" >

            <div class="header_global" >
               <div class="header_user" >
                  <?php showAppriopriateHeader() ?>
               </div>
               <a href="index.php"><img src="../images/logo.png" alt="Logo" /></a>
            </div>

            <div class="menu">
               <div class="container_titre_menu" >
                  <div class="titre_menu">Navigation</div>
                     <a href="URL">Manuel (à venir)</a>
   			      <div class="titre_menu">Collège</div>
                     <a href="http://depinfo2013.clg.qc.ca/">Depinfo</a><br>
                     <a href="http://www.clg.qc.ca/">Site officiel</a>
               </div>
            </div>

            <div class="titre">
                  <h3>Développeur(s)</h3>
            </div>

            <div id="content_developers">
               <img class="label_developers" src="../images/lea.png" alt="Logo" /><br></label>
               <label>Léa Kelly<br></label>
               <a href="mailto:kelly.lea56@gmail.com">kelly.lea56@gmail.com</a>
            </div>
            
         </div>

         <footer class="page_footer">
            <a href="about.php">À propos</a>
            <label>-</label>
            <a href="developers.php">Développeurs</a>
         </footer>

      </div>
	</body>
</html>