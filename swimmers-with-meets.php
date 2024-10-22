<?php
require_once("util-db.php");
require_once("model-swimmers-with-meets.php");

$pageTitle = "Swimmers with Meets";
include "view-header.php";
$instructors = selectSwimmers();
include "view-swimmers-with-meets.php";
include "view-footer.php"
?>
