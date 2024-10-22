<?php
require_once("util-db.php");
require_once("model-swimmers.php");

$pageTitle = "Swimmers";
include "view-header.php";
$swimmers = selectSwimmers();
include "view-swimmers.php";
include "view-footer.php"
?>
