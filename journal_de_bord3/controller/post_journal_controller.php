<?php

   session_start();

   include_once('../model/queries.php');

   $bdd = dbConnect();
   $i = 0;
   $journalNumber = selectNumJournal($bdd);
   $date = date('Y-m-d');
   $error_fieldsempty = NULL;
   $error_alreadypost = NULL;

   /*$already_posted = countUserTodayPublication ($bdd, $date, $journalNumber[0]["NumJournal"]);*/

    if( isset( $_POST[ 'morning_content' ] ) && isset( $_POST[ 'afternoon_content' ] ) )
   {
   		$contentAM = $_POST['morning_content'];
      $contentPM = $_POST['afternoon_content'];
   }

	 if (empty($contentAM) || empty($contentPM) && !$already_posted)
    {
        $error_fieldsempty = "Veuillez remplir les deux champs de texte.";
        $i++;
    }

    /*if ($already_posted)
    {
        $error_alreadypost = "Vous avez déjà posté aujourd'hui.";
        $i++;
    }*/

    if ($i == 0)
   {
   	  postInJournal($bdd, $contentAM, $contentPM, $date, $journalNumber[0]["NumJournal"]);

      $_SESSION[ 'posted' ] = true;

      header('Location: ../view/index_trainee.php');
   }

   else 
   {
   		$_SESSION[ 'erreurs_journal' ] = $error_fieldsempty;  /*.'\n'.$error_alreadypost*/
      header('Location: ../view/post_journal_view.php');
   }

 ?>