<?php
    require "../config/connect.php";
    session_start();

    if (isset($_POST['code']) || isset($_POST['password'])) {
        $_code = $_POST["code"];
        $_password = hash("sha256", $_POST["password"]);

        // getting user personal data
        $fetchPersonalDataQuery = "SELECT * FROM users where code = $_code";
        $personalDataResult = $dbcon->query($fetchPersonalDataQuery);

        if ($personalDataResult->num_rows == 0) {
            $_SESSION['auth'] = "Código de usuário inválido!";
            header("location: ../../client/pages/login");
        } else {
            $personalDataRow = $personalDataResult->fetch_assoc();
            $pass =  $personalDataRow['password'];

            if ($pass !== $_password) {
                $_SESSION['auth'] = "Palavra-passe inválida!";
                header("location: ../../client/pages/login");
            } else {

                //getting user social media data
                $fetchUserSocialQuery = "SELECT * FROM social where code = $_code";
                $userSocialResult= $dbcon->query($fetchUserSocialQuery);
                $userSocialRow = $userSocialResult->fetch_assoc();

                //creating session with the data fetched from the database
                $_SESSION['socialMedia'] = $userSocialRow;
                $_SESSION["login"] =  $personalDataRow;
                header("location: ../../client/pages/home");
            }
        }
        $dbcon->close();
}
