<?php

  function dbConnect() 
  {
     try
     {
       return new PDO('mysql:host=localhost;dbname=journal de bord', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
     }
     catch (Exception $e)
     {
      die('Erreur : ' . $e->getMessage());
     }
  }


  function getUser($bdd, $email) 
  {
        $query = $bdd->prepare("CALL SELECT_USER(?)");
 
        $query->bindParam(1, $email, PDO::PARAM_STR);

        $query->execute();
        $result = $query->fetchAll();

        $query->closeCursor();
 
        return $result;
  }


  function countUsersSpecificEmail ($bdd, $email)
  {

      $query = $bdd->prepare("CALL COUNT_USER_SPECIFIC_EMAIL(?)");

      $query->bindParam(1, $email, PDO::PARAM_STR);

      $query->execute();
      $email_free=($query->fetchColumn()==0)?1:0;

      $query->closeCursor();

      return $email_free;
  }

  function registerUser($bdd, $email, $last_name, $first_name, $pass, $user_type)
  {
        $query = $bdd->prepare("CALL INSERT_USER(?,?,?,?,?)");

        $query->bindParam(1, $email, PDO::PARAM_STR);
        $query->bindParam(2, $last_name, PDO::PARAM_STR);
        $query->bindParam(3, $first_name, PDO::PARAM_STR);
        $query->bindParam(4, $pass, PDO::PARAM_STR);
        $query->bindParam(5, $user_type, PDO::PARAM_STR);

        $query->execute();
        $query->CloseCursor();
  }

  function registerTrainee($bdd, $email, $admission_number)
  {
          $query = $bdd->prepare("CALL INSERT_STAGIAIRE(?,?)");

          $query->bindParam(1, $email, PDO::PARAM_STR);
          $query->bindParam(2, $admission_number, PDO::PARAM_STR);

          $query->execute();
          $query->CloseCursor();
  }

  function registerResponsible($bdd, $email, $resp_type)
  {
          $query = $bdd->prepare("CALL INSERT_RESPONSABLE(?,?)");

          $query->bindParam(1, $email, PDO::PARAM_STR);
          $query->bindParam(2, $resp_type, PDO::PARAM_STR);

          $result = $query->execute();
          $query->CloseCursor();

          return $result;
  }

  function createTraineeship ($bdd, $email, $traineeship_place)
  {
          $query = $bdd->prepare("CALL INSERT_STAGE(?,?)");

          $query->bindParam(1, $traineeship_place, PDO::PARAM_STR);
          $query->bindParam(2, $email, PDO::PARAM_STR);

          $query->execute();
          $query->CloseCursor();
  }

  function createJournal ($bdd, $access, $email)
  {
          $query = $bdd->prepare("CALL INSERT_JOURNAL(?,?)");

          $query->bindParam(1, $access, PDO::PARAM_STR);
          $query->bindParam(2, $email, PDO::PARAM_STR);

          $query->execute();
          $query->CloseCursor();
  }

  function selectNumJournal ($bdd)
  {
       if( isset($_SESSION[ 'email_usager' ]) )
       {
            $query = $bdd->prepare("CALL SELECT_NUMJOURNAL(?)");

            $query->bindParam(1, $_SESSION[ 'email_usager' ], PDO::PARAM_STR);

            $query->execute();
            $result = $query->fetchAll();
            $query->CloseCursor();

            return $result;
       }
  }

  function postInJournal ($bdd, $contentAM, $contentPM, $currentDate, $journalNumber)
  {
      $query = $bdd->prepare("CALL INSERT_PUBLICATION(?,?,?,?)");

      $query->bindParam(1, $contentAM, PDO::PARAM_STR);
      $query->bindParam(2, $contentPM, PDO::PARAM_STR);
      $query->bindParam(3, $currentDate, PDO::PARAM_STR);
      $query->bindParam(4, $journalNumber, PDO::PARAM_STR);

      $query->execute();
      $query->CloseCursor();
  }

  // NE MARCHE PAS
  /*
  function countUserTodayPublication ($bdd, $currentDate, $journalNumber)
  {
      $query = $bdd->prepare("CALL COUNT_SPECIFIC_CURRENT_PUBLICATION(?,?)");

      $query->bindParam(1, $currentDate, PDO::PARAM_STR);
      $query->bindParam(2, $journalNumber, PDO::PARAM_STR);

      $query->execute();
      $query->CloseCursor();

      $already_posted =($query->fetchColumn()==1)?1:0;

      $query->closeCursor();

      return $already_posted;
  }*/

?>


