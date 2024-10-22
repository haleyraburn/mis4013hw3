<?php
require_once("util-db.php");
require_once("model-meets.php");

$pageTitle = "Meets";
include "view-header.php";
$meets = selectMeets();
include "view-meets.php";
include "view-footer.php";
?>
