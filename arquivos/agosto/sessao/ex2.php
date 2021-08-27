<?php
//Murilo ramalho da mata
require_once("config.php");
session_unset($_SESSION["nome"]);
echo $_SESSION["nome"];
session_destroy();
?>