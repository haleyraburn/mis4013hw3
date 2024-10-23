<?php
require_once("util-db.php");
require_once("model-meets-by-swimmer.php");

$pageTitle = "Meets by Swimmer";
include "view-header.php";
$meets = selectMeetsBySwimmer($_GET['mid']);
include "view-meets-by-swimmer.php";
include "view-footer.php";
?>
