<?php
 // connection a travers la methode mysqli

// $user="root";
// $mdp="";
// $bd="gestion_contact";
// $serveur="localhost";

// $link = mysqli_connect($serveur,$user,$mdp,$bd);
// if ($link)
// {
//    echo "connexion etablit";
    
// }
// else
// {
//     die (mysqli_connect_error());
// }

//connection via la methode PDO     

$bduser= "root";
$bdpass="";

    $link = new PDO('mysql:host=localhost; dbname=gestion_contact',$bduser,$bdpass );
    if ($link)
    {
       echo "connexion etablit";
    }
    else
    {
        die (mysqli_connect_error()); 
        //ERREUR A REGARDER (ICI JE DOIT UTILISER UNE METHODE PDO)
    }
?>
