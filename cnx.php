<?php

$user="root";
$mdp="";
$db="connexion";
$server="localhost";

$link=mysql_connect($server,$user,$mdp,$db);
if($link)
{
    echo("connection etablie");
}
else{
    die(mysql_connect_error());
}


?>
