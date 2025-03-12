<?php
session_start();

$_SESSION['nome'] = "Fabio Claret";

header("location:pagina2.php");

exit;
?>

