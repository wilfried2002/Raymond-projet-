<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script language="javascript" src="script.js"></script>

    <title>formulaire contact 1</title>
</head>
<body>
    <form method="post">
      <div class="wrapper">
      <div id="cercle">
         <!-- inserer un bouton ici qui doit permettre d'ouvrir l'explorateur de fichier afin de mettre une image -->
        <img src="new_registration.png" id="image"></img>
      </div>
      <div class="box1">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" placeholder="votre nom"><br>
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br>
        <label for="tel">Tel :</label>
        <input type="number" name="tel" id="tel" placeholder="votre telephone"><br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" placeholder="votre email"><br>


        <!-- insertion des differents bouton -->

         <input type="submit" value="Annuler << " id="btn1">
         <input type="submit" value=">> Enregistrer" id="btn2">

      </div>
      
    </div>
   </form>
</body>
</html>