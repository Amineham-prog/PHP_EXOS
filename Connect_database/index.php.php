<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
</head>

<body>
    
    <table border=1>
   <?php
        $servername = "localhost";
        $username = "root";
        $password = "sio";
        $dbname = "video";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM Film";
        // On teste si la requête sql ne provoque pas une erreure
        if ( !($result = mysqli_query($conn,$sql) ) )
        {
            die("Erreur dans la requete: " . mysqli_error($conn));
        }
        //On teste si la requete retourne des résultats
        if (mysqli_num_rows($result) > 0) {
        // On exploite chaque ligne de résultat
            while( $row = mysqli_fetch_row($result) ) {
                echo "<tr>";
                    echo  "<td>".$row[1]."</td>";
                    echo  "<td><img src=images/". $row[5]."></td>";
                    echo  "<td>".$row[4]."</td>";
                echo "</tr>";
            }
        } else {
            echo "0 résultat";
        }
        mysqli_close($conn);
    ?>
    
    </table>
    
    


</body>
</html>
