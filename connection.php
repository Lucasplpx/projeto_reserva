<?php

try{

    $url = 'mysql:dbname=projeto_reservas;host=localhost';
    $user = 'root';
    $pass = '';

    $pdo = new PDO($url, $user, $pass);


}catch(PDOException $e){
    echo 'Erro: '.$e->getMessage();
}
?>