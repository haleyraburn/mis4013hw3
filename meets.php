<?php
require_once("util-db.php");
require_once("model-meets.php");

$pageTitle = "Meets";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertMeet($_POST['mName'], $_POST['mLocation'], $_POST['mDayTime']);
    break;
  }
}

$meets = selectMeets();
include "view-meets.php";
include "view-footer.php";
?>
