<?php
session_start();

require("./connDB.php");

$username = $_POST["username"];
$password = $_POST["passw"];


$database = new Database();
$db = $database->connessione();

$query= "SELECT * FROM utenti WHERE username='$username' AND password='$password'  " ;


$x = $db->prepare($query);
$x->execute();

if($x->rowcount()==1) //se la risposta dalla tabella contiene una riga vuol dire che il login è andato a buon fine
{
 $_SESSION["username"]=$username;
 echo("<script>alert('you are logged!')</script>");
 echo("<script>window.location = 'index.html';</script>");
 
 

}
else {

    echo("<script>alert('credentials wrong! ')</script>");
    echo("<script>window.location = 'login.html';</script>");
}












?>