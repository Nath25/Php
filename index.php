<?php
 function writeSecretSentence (string $paramAnimal, string $paramLocation):string
 {
    $phrase = "";
    if (is_numeric ($paramAnimal) and is_numeric($paramLocation))
    {
        $phrase = "vos paramètres ne sont pas alphanumérique";
    }
    else
    {  
        $phrase = $paramAnimal . " s'incline face à " . $paramLocation;
    } 
    

    return $phrase;
 }
 
 echo  writeSecretSentence ("serpent", "lune") ;
 ?>
