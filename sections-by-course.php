<?php
require_once("util-db.php");
require_once("model-sections-by-course.php");

$pageTitle = "Sections by Course";
include "view-header.php";
$selections = selectSectionsByCourse($_POST['cid']);
include "view-sections-by-course.php";
include "view-footer.php";
?>
