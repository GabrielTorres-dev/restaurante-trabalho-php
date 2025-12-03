<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "cadastroclientes";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Erro ao conectar ao banco: " . mysqli_connect_error());
}
?>
