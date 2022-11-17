<?php
require "../../../server/config/connect.php";
session_start();

$userPersonalData = $_SESSION["login"];
$userSocialData = $_SESSION["socialMedia"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens - UJC Community</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    <link href="../../styles/output.css" rel="stylesheet">
    <script src="../../scripts/js/jquery-3.6.0.js"></script>
    <script src="../../scripts/js/global.js"></script>
</head>

<body>
    <h2>The XMLHttpRequest Object</h2>

    <div id="demo">
        <p>Let AJAX change this text.</p>
        <button type="button" onclick="loadDoc()">Change Content</button>
    </div>

    <script>
        function loadDoc() {
            const xhttp = new XMLHttpRequest();

            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.open("GET", "script.php");
            xhttp.send();
        }
    </script>
</body>

</html>