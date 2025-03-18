<?php
include "functionsDB.php";
deleteByID($_GET["id"]);
header("Location: website.php");
?>