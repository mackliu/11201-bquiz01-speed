<?php
//$BASEDIR=$_SERVER['DOCUMENT_ROOT'];
$BASEDIR=__DIR__;
session_start();

function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url){
    header("location:".$url);
}

function q($sql){
    $pdo=new PDO("mysql:host=localhost;charset=utf8;dbname=db13",'root','');
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}



?>