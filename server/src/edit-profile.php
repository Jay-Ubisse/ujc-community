<?php
    require "../config/connect.php";
    session_start();
    $userPersonalData = $_SESSION["login"];

    $code = $userPersonalData["code"];
    $name = $_POST["name"];
    $course = $_POST["course"];
    $level = $_POST["level"];
    $email = $_POST["email"];
    $cell1 = $_POST["cell1"];
    $cell2 = $_POST["cell2"];
    $bio = $_POST["bio"];

    $targetDir = "../../client/img/profile/";
    $imageName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $imageName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){

        // carregar a imagem para o servidor
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){

            // inserir a imagem na base de dados
            $alterPersonalDataQuery = "UPDATE users SET name = '$name', course = '$course', level = '$level', email = '$email', image='$imageName', cell1 = '$cell1', cell2 = '$cell2', bio = '$bio' WHERE code = '$code'";
            $personalDataResult = $dbcon->query($alterPersonalDataQuery);
            if($personalDataResult === true) {
                // getting user personal data
                $fetchPersonalDataQuery = "SELECT * FROM users where code = $code";
                $personalDataResult = $dbcon->query($fetchPersonalDataQuery);
                $personalDataRow = $personalDataResult->fetch_assoc();
       
               //getting user social media data
               $fetchUserSocialQuery = "SELECT * FROM social where code = $code";
               $userSocialResult= $dbcon->query($fetchUserSocialQuery);
               $userSocialRow = $userSocialResult->fetch_assoc();
       
               //creating session with the data fetched from the database
               $_SESSION['socialMedia'] = $userSocialRow;
               $_SESSION["login"] =  $personalDataRow;
               header("location: ../../client/pages/my-profile/");
           } else {
              $_SESSION["edit-error"] = "Ops... Ocorreu um erro! Volte a tentar.";
              header("location: ../../client/pages/edit-profile/");
           }
        }else{
            $_SESSION["edit-error"] = "Desculpe, ocorreu um erro ao carregar a imagem. Tente de novo.";
            header("location: ../../client/pages/edit-profile/");
        }
    }else{
        $_SESSION["edit-error"] = 'Apenas ficheiros com as extensões JPG, JPEG, PNG sao permitidos.';
        header("location: ../../client/pages/edit-profile/");
    }
?>