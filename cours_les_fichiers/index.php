<?php 
//-----------------------TP PHP TABLEAUX ----------------------------
//------------------------EXO1-----------------------------------------------
/*
$tab=array();
for($x=0; $x< 4;$x++){
$tab[$x] = mt_rand(000000, 999999);
}
for($i=0; $i<count($tab);$i++ ){
echo 'le numero est ' .$tab[$i]. '<br>';

}
var_dump($tab);

//-----------------------------------------------------------------------------

//-------------------------EXO2-----------------------------------------------
$myarr=[1,2,3,[1,2,3]];

echo $myarr[3][0];

//----------------------------------------------------------------------------------


//-------------------------EXO3-----------------------------------------------
$Chaussure = [ 
	'Marque'=> 'Nike' , 
	'Modele' =>'sneakers', 
	'PointuresDisponibles' => [39,40,41
	] ];

    var_dump($Chaussure['PointuresDisponibles']);

    for($x=0;$x < (count($Chaussure['PointuresDisponibles'])); $x++){
        echo '<br>'. $Chaussure['PointuresDisponibles'][$x] . '<br>';

    }

//----------------------------------------------------------------------------------


//-------------------------EXO4-----------------------------------------------
$key=0;
$tab=array();
for($x=100;$x<=120;$x++){
    for($y=65;$y<=90;$y++){
       
        $tab[$key]= $x . chr($y);
          $key+=1;

    }
}

$j=0;
$compte= round(count($tab) /25);
echo '<table border=2px><tr>';

while($j<count($tab)){

    for($i=0; $i<=$compte;$i++){
       
    if(($j+$i)>=count($tab) ){ break;}


        echo '<td>'. $tab[$i+$j] .'</td>';


    }
    echo '</tr>';
    $j=$j+$compte;
    
}

echo '</table>';
//----------------------------------------------------------------------------------
*/
echo dirname("./data/text.txt") . PHP_EOL;
?>
