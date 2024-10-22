<?php
require_once("util-db.php");
require_once("model-meets-by-swimmer.php");

$pageTitle = "Meets by Swimmer";
include "view-header.php";
$courses = selectMeetsBySwimmer($_GET['id']);
include "view-meets-by-swimmer.php";
include "view-footer.php";
?>
