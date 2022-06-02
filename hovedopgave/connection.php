<?php
    $host = "wimac.dk.mysql";  
    $user = "wimac_dkmadogsu";  
    $password = '12345678910';  
    $db_name = "wimac_dkmadogsu";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

$mysqli= new mysqli ("wimac.dk.mysql", "wimac_dkmadogsu", "12345678910", "wimac_dkmadogsu") or die(mysqli_error($mysqli));

if(isset($_POST['save1'])){
    $title = $_POST['titel'];
    $action = $_POST['vejled'];
    $money = $_POST['penge'];
    $time = $_POST['tid'];
    $people = $_POST['personer'];


    $mysqli->query("INSERT INTO `morgenmad` (titel, vejled, penge, tid, personer) VALUES('$title', '$action', '$money', '$time', '$people') ") or
    die ($mysqli-> error);
}

$mysqli= new mysqli ("wimac.dk.mysql", "wimac_dkmadogsu", "12345678910", "wimac_dkmadogsu") or die(mysqli_error($mysqli));

if(isset($_POST['save2'])){
    $title = $_POST['titel'];
    $action = $_POST['vejled'];
    $money = $_POST['penge'];
    $time = $_POST['tid'];
    $people = $_POST['personer'];

    $mysqli->query("INSERT INTO `frokost` (titel, vejled, penge, tid, personer) VALUES('$title', '$action', '$money', '$time', '$people') ") or
    die ($mysqli-> error);
}

$mysqli= new mysqli ("wimac.dk.mysql", "wimac_dkmadogsu", "12345678910", "wimac_dkmadogsu") or die(mysqli_error($mysqli));

if(isset($_POST['save3'])){
    $title = $_POST['titel'];
    $action = $_POST['vejled'];
    $money = $_POST['penge'];
    $time = $_POST['tid'];
    $people = $_POST['personer'];


    $mysqli->query("INSERT INTO `aftensmad` (titel, vejled, penge, tid, personer) VALUES('$title', '$action', '$money', '$time', '$people') ") or
    die ($mysqli-> error);
}
$mysqli= new mysqli ("wimac.dk.mysql", "wimac_dkmadogsu", "12345678910", "wimac_dkmadogsu") or die(mysqli_error($mysqli));

if(isset($_POST['save4'])){
    $title = $_POST['titel'];
    $action = $_POST['vejled'];
    $money = $_POST['penge'];
    $time = $_POST['tid'];
    $people = $_POST['personer'];

    $mysqli->query("INSERT INTO `dessert` (titel, vejled, penge, tid, personer) VALUES('$title', '$action', '$money', '$time', '$people') ") or
    die ($mysqli-> error);
}