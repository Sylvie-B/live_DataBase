<?php
require 'version-object.php';
require 'version-static.php';
require './class/Utilisateurs.php';
require './class/Clients.php';
require './class-static/Utilisateurs-static.php';
require './class-static/Clients-static.php';


// création de la connection
$database = new DbConnect('localhost', 'live', 'root', '');
$link = $database->getDbLink();

$utilisateurs = new Utilisateurs($link);
$clients = new Clients($link);

$utilisateursStatic = new UtilisateursStatic();
$clientsStatic = new ClientsStatic();
