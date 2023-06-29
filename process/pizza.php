<?php 

    include_once("conn.php");

    $method = $_SERVER["REQUEST_METHOD"];

    if($method == "GET") {

        $massasQuery = $conn->query("SELECT * FROM massas;");

        $massas = $massasQuery->fetchAll();

        $bordasQuery = $conn->query("SELECT * FROM bordas;");

        $bordas = $bordasQuery->fetchAll();

        $saboresQuery = $conn->query("SELECT * FROM sabores;");

        $sabores = $saboresQuery->fetchAll();

    } else if($method == "POST") {

    }
?>