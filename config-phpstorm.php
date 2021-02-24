<?php

require './version-static.php';
$db = DB2::getinstance();

$totoSQL = "INSERT INTO ";
// dans Database -> "+" -> data source -> mysql -> advance -> server time zone -> UTC

$db->exec($totoSQL);
