<?php require './header.php'; ?>
<p>Bienvenue sur la page d'accueil !</p>
<?php
require_once('./data.php');
foreach($eleves as $eleve){
    echo '
    <table>
    <thead >
        <tr style="background-color: #333 color: #fff">
            <th colspan="2" style="background-color: #333 ;color: #fff">'. $eleve['nom'] .'</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid #333">'. $eleve['note'] .'</td>
            <td style="background-color:#00FF00">'. $eleve['appreciation'] .'</td>
        </tr>
    </tbody>
</table>
    ';
}


?>
<?php require './footer.php'; ?>