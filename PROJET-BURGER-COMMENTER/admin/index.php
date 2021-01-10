<!DOCTYPE html>
<html>
    <head>
        <title>Burger Code</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <body>
     <!------------------- LE LOGO ----------------------------------------------------->
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
       <!----- Le contenu--------------------------------------------------------------->
        <div class="container admin">
            <div class="row">
              <!-----------------------------LE TITRE + LE BOUTON LIENS VERS LA PAGE INSERT.PHP------------------------------------->
                <h1><strong>Liste des items   </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
                  <!----------------------------LE TABLEAU------------------------>
                  <thead>
                    <!---------------LA LIGNE DU HEAD----------->
                    <tr>
                      <!----------Colonne du HEAD-------------->
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Catégorie</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <!---------Fermeture du tableau------------------------------------->
                  <tbody>
                      <?php //-------------------- code PHP--------------------------------------------------------------
                        //----------require inclus les fichier database et si le fichier n'existe pas il arrete tout. 
                        require 'database.php';
                        // connection à la base de données .
                        $db = Database::connect();
                        // récupération des données dans la variable statetement
                                                        //ID..................................................LA CATEGORIE    AS           FROM ITEMP  LEFT IL PASSE SUR TOUTE LES LIGNES       LA CATEGORIE RELIER A ITEMS 
                        $statement = $db->query('SELECT items.id, items.name, items.description, items.price, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id ORDER BY items.id DESC');
                        //il va chercher une ligne dans la variable statement si il trouve il passe a la ligne suivante 
                       
                        while($item = $statement->fetch()) 
                        {
                            echo '<tr>';
                            // recupere le nom sur la base de données
                            echo '<td>'. $item['name'] . '</td>';
                            echo '<td>'. $item['description'] . '</td>';
                            echo '<td>'. number_format($item['price'], 2, '.', '') . '</td>';
                            echo '<td>'. $item['category'] . '</td>';
                            echo '<td width=300>';
                            // BOUTON LIENS VERTS VIEW.PHP POUT VOIRE L'ELEMENT
                            echo '<a class="btn btn-default" href="view.php?id='.$item['id'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo ' ';
                             // BOUTON LIENS VERS UPDATE.PHP POUR AJOUTER UN ELEMENT
                            echo '<a class="btn btn-primary" href="update.php?id='.$item['id'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo ' ';
                            // BOUTON LIENS VERS DELETE.PHP POUR SUPRIMER UN ELEMENT 
                            echo '<a class="btn btn-danger" href="delete.php?id='.$item['id'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
