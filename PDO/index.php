<!DOCTYPE html>
<html>
<head>
<title>Php et mySQL</title>
<meta charset= "utf-8" />
</head>
<body>
<?php
    $serveur = "localhost";
    $login = "snir";
    $pass = "makyous33";
    
    try{
        $connexion = new PDO("mysql:host=$serveur;dbname=vtt", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion à la base de donnees';
        
        $sql = 'SELECT randonneur.nom, randonneur.prenom
        FROM randonneur';
       
        
        $post = $connexion->query($sql);
        $post->setFetchMode(PDO::FETCH_ASSOC);
        $resultats=$post->fetchAll();

     echo '<pre>';
     print_r($resultats);
     echo '<pre>';


    }

  catch(PDOException $e){
      echo 'Echec de la connexion' .$e->getMessage();
  }
  echo '<table border=2px><tr>
  <td>Nom</td>
  <td>Prenom</td>';
  foreach($resultats as $resultat){
    
    echo '
    </tr>
    <td>' .$resultat['nom'].'</td>
    <td>'.$resultat['prenom'].'</td>
   
    </tr>'
   ;


  }
 echo '</table>';
  
  
  
  


?>
</body>
</html>