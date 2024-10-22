<?php
require_once("util-db.php");
require_once("model-events-by-meet.php");

$pageTitle = "Events by Meet";
include "view-header.php";
$selections = selectEventsByMeet($_POST['mid']);
include "view-events-by-meet.php";
include "view-footer.php";
?>
