<!DOCTYPE html>
<html>
<body>

<?php

echo parellsenar(20) . "<br>";

function parellsenar($num){
    return $num%2==0?"parell":"senar";
}

compta();

function compta(){
    for($i=0;$i<=10;$i+=2){
        echo $i . "<br>";
    } 
}

comptapar(12);

function comptapar($par){
    for($i=0;$i<=$par;$i+=2){
        echo $i . "<br>";
    } 
}

echo grau(55);

function grau($nota){
    if ($nota>=60) return "primera divisio";
    else if ($nota>45 and $nota<60) return "segona divisio";
    else if ($nota>33 and $nota<45) return "tercera divisio";
    else return "reintenta";
}
echo "<br>";

echo isbitten();

function isBitten(){
    return rand(0,1);
}
?>

</body>
</html> 