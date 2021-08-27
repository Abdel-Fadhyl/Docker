<?php

$servname = "database";
$dbname = "HDocker";
$user = "root";
$pass = "root";
$dbconnexion = new PDO("mysql:host={$servname}; dbname={$dbname}", $user, $pass);
$sql = "SELECT ID, Username, Email,password FROM Users";
$stmt = $dbconnexion->query($sql);

try {
    $stmt = $dbconnexion->query($sql);
    if ($stmt === false) {
        die("Synchronisation ratée");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$reponse = $dbconnexion->prepare("SELECT * FROM Users");
$reponse->execute(); 
$donnees = $reponse->fetch();

try {
  echo json_encode($donnees['ID']);
  echo json_encode($donnees['Username']);
  echo json_encode($donnees['Email']);
  echo json_encode($donnees['password']);
  if ($donnees === false) {
      die("Synchronisation ratée");
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>