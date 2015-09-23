<?php 
   session_start();
   
   session_destroy();
   unset( $_SESSION );
   
   header('Location: ../view/index.php');
?>