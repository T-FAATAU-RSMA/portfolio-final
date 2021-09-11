<?php
  // Definis les constantes et les variables
  define('LOGIN','admin');
  define('PASSWORD','admin1234');
  $errorMessage = '';
 
  // test l'envoi
  if(!empty($_POST)) 
  {
    // donner les identifiant
    if(!empty($_POST['login']) && !empty($_POST['password'])) 
    {
      // est les mêmes constantes
      if($_POST['login'] !== LOGIN) 
      {
        $errorMessage = 'Mauvais login !';
      }
        elseif($_POST['password'] !== PASSWORD) 
      {  
        $errorMessage = 'Mauvais password !';
      }
        else
      {
        // démarre la session
        session_start();
        // On enregistre 
        $_SESSION['login'] = LOGIN;
        // On redirige vers le fichier index_admin.php
        header('Location:index_admin.php');
        exit();
      }
    }
      else
    {
      $errorMessage = 'Entrez vos identifiants !';
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Formulaire d'authentification</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <fieldset>
        <legend>Identifiez-vous</legend>
        <?php
          // Soucis ?
          if(!empty($errorMessage)) 
          {
            echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
          }
        ?>
       <p>
          <label for="login">Login :</label> 
          <input type="text" name="login" id="login" value="" />
        </p>
        <p>
          <label for="password">Password :</label> 
          <input type="password" name="password" id="password" value="" /> 
          <input type="submit" name="submit" value="Confirmer" />
        </p>
      </fieldset>
    </form>
  </body>
</html>

