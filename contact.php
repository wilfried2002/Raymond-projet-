<!DOCTYPE html> 
 <html lang="fr">
    <head>
        <title>Menu-Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>
          <div class="cadre">
               <header>
                     <div class="titre">
                           <marquee>Bienvenue Dans Vos Contacts</marquee>
                     </div>
                     <div class="rechercher"> 
                        <table>
                              <tr>
                                 <td><input type="search"  placeholder="rechercher un contact" class="search"></td>
                                 <td><input type="button" value="Ok" class="ok"></td>
                                 <td><input type="button" value="Ajouter un Contact" class="ajouter"></td>

                              </tr>
                        </table>
                     </div>
               </header> 
               <main>
                    <div class="infocont">
                            <table>
                                <tr class="menu">
                                    <th> Id</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Tèléphone</th>
                                    <th>Adress-email</th>
                                    
                                </tr>
                                <tr>
                                    <td class="barre"><div class=""></div></td>
                                    <td class="barre"><div class=""></div></td>
                                    <td class="barre"><div class=""></div></td>
                                    <td class="barre"><div class=""></div></td>
                                    <td class="barre"><div></div></td>
                                    </tr>
                                <tr> 

                                    <td class="id"><h2>1</h2></td>
                                    <td><p class="nom">Zemo</p></td>
                                    <td><p class="surname">raymond</p></td>
                                    <td><p class="tel">+237653723842</p></td>
                                    <td><p class="email">raymond@gmail.com</p></td>
                                    <td class="action"><input  type="submit" value="Editer" class="editer"></td>
                                    <td class="action"><input type="submit" value="Delete" class="supprimer"></td>
                                
                                </tr>
                                
                            </table>
                            
                    </div>
               </main>
          </div>
    </body>
 </html>