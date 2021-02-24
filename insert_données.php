<?php



require './DB/version-static.php';
$db = DB::getinstance();

$userRequest = "INSERT INTO user (email, username, password) VALUES ('test@exemple.com', 'moi', 'azerty')";

if($db->exec($userRequest)) {
    $userId = $db->lastInsertId();
    $articleRequest = "INSERT INTO article (titre, contenu, user_fk) VALUES ('un titre', 'un contenu')";
    $db->exec($articleRequest);
}

