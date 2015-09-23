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
                     <?php showAppriopriateMenu(); ?>
                     <a href="URL">Manuel (à venir)</a>
			         <div class="titre_menu">Collège</div>
                     <a href="http://depinfo2013.clg.qc.ca/">Depinfo</a><br>
                     <a href="http://www.clg.qc.ca/">Site officiel</a>
               </div>
            </div>

            <div class="titre"><h1>Bienvenue sur le Journal de Bord !</h1></div>
            <div class="content"><?php showRegistrationSucceeded() ?></div>

         </div>

         <footer class="page_footer">
            <a href="about.php">À propos</a>
            <label> - </label>
            <a href="developers.php">Développeurs</a>
         </footer>

      </div>
	</body>
</html>

<?php

   if( isset($_SESSION[ 'info_connexion' ]) )
   {
      ?>
      <script>alert("<?php echo $_SESSION[ 'info_connexion' ]; ?>");</script>
      <?php
      unset($_SESSION[ 'info_connexion' ]);
   }

   if(isset($_SESSION[ 'email' ]) && isset($_SESSION[ 'last_name' ]) &&  isset($_SESSION[ 'first_name' ])) {

      unset($_SESSION[ 'email' ]);
      unset($_SESSION[ 'last_name' ]);
      unset($_SESSION[ 'first_name' ]);
   }

?>