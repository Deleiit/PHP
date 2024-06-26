<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Connexion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--<link rel="icon" type="image/png" href="favicon.png" />-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>

body {
  font-family: Calibri,  sans-serif;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color:#eee;
}

.form-connexion {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-connexion .form-connexion-heading,
.form-connexion .checkbox {
  margin-bottom: 10px;
}
.form-connexion .checkbox {
  font-weight: 400;
}
.form-connexion .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-connexion .form-control:focus {
  z-index: 2;
}
.form-connexion input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-connexion input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
</head>

<body>

    <div class="container">
      
      <form class="form-connexion" action="verifier.php" method=post>
        <h2 class="form-connexion-heading">Connexion</h2>
        <label for="identifiant" class="sr-only">
          Identifiant
        </label>
        <input 
          name="identifiant" type="text" id="identifiant" 
          class="form-control" placeholder="Votre identifiant" required autofocus>
          <br>
        <label for="mot_de_passe" class="sr-only">
          Mot de passe
        </label>
        <input name="mot_de_passe" type="password" id="mot_de_passe" class="form-control" placeholder=" Mot de passe" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
          Valider
        </button>
        <br>
         <?php
         if (isset($_SESSION['erreur_connexion'])) {
          echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['erreur_connexion'], ENT_QUOTES, 'UTF-8') . '</div>';
          unset($_SESSION['erreur_connexion']);
        }
         ?>
      </form>
      
    </div> <!-- /container -->
  </body>
  </html>