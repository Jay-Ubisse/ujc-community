<?php
    require "../config/connect.php";
    session_start();

    if (isset($_POST['code']) || isset($_POST['password'])) {
        $_code = $_POST["code"];
        $_password = hash("sha256", $_POST["password"]);

        $check_query = "SELECT * FROM users where code = $_code";
        $check_result = $dbcon->query($check_query);

        if ($check_result->num_rows == 0) {
            $_SESSION['auth'] = "Código de usuário inválido!";
            header("location: ../../client/pages/login");
        } else {
            $row = $check_result->fetch_assoc();
            $pass = $row['password'];

            if ($pass !== $_password) {
                $_SESSION['auth'] = "Palavra-passe inválida!";
                header("location: ../../client/pages/login");
            } else {
                $_SESSION["login"] = $row;
                header("location: ../../client/pages/home");
            }
        }
        $dbcon->close();
}
