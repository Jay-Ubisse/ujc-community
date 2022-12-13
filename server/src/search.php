<?php
    session_start();
    require "../config/connect.php";

    $userPersonalData = $_SESSION['login'];
    $searchTerm = $_POST['searchTerm'];

    $searchQuery = "SELECT * FROM users WHERE NOT code = {$userPersonalData['code']} AND (name LIKE '%{$searchTerm}%' OR name LIKE '%{$searchTerm}%') ";
    $searchQueryResult = $dbcon->query($searchQuery);
    $output = "";
    if($searchQueryResult->num_rows > 0){
        include "data.php";
    }else{
        $output .= 'Nenhum usuário encontrado.';
    }
    echo $output;
?>