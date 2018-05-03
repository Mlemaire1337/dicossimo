<?php

$bdd = new PDO('mysql:host=localhost;dbname=dicossimo;charset=utf8', 'root', '');

$pdoStat = $bdd->prepare('INSERT INTO a VALUES(NULL , :word, :content)');

$pdoStat->bindValue(':word',$_POST['word'],PDO::PARAM_STR);
$pdoStat->bindValue(':content',$_POST['content'],PDO::PARAM_STR);

$insertOK = $pdoStat->execute();
if($insertOK){
    $message = "le mot a bien été ajouté";
}else{
    $message = "echec de l'insertion";
}
?>