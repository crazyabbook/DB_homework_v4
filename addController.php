<?php
include "functionsDB.php";
addClass($_POST['class_number'], $_POST['class_leter'], $_POST['teacher']);
header("Location: website.php");
?>