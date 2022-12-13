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
    
    $twitter = $_POST["twitter"];
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];
    $youtube = $_POST["youtube"];
    $github = $_POST["github"];
    $medium = $_POST["medium"];
    $site = $_POST["site"];


   // updating user personal data on database
   $alterPersonalDataQuery = "UPDATE users SET name = '$name', course = '$course', level = '$level', email = '$email', cell1 = '$cell1', cell2 = '$cell2', bio = '$bio' WHERE code = '$code'";
   $personalDataResult = $dbcon->query($alterPersonalDataQuery);

    // updating user social media data on database
    $alterSocialDataQuery = "UPDATE social SET twitter = '$twitter', facebook = '$facebook', instagram = '$instagram', youtube = '$youtube', github = '$github', medium = '$medium', site = '$site' WHERE code = '$code'";
    $socialDataResult = $dbcon->query($alterSocialDataQuery);

   if($personalDataResult === true && $socialDataResult === true) {
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
?>