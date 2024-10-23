<?php
require_once("util-db.php");
require_once("model-meets.php");

$pageTitle = "Meets";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertMeet($_POST['mName'], $_POST['mLocation'], $_POST['mDayTime'])) {
        echo '<div class="alert alert-success" role="alert"> Meet added. </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error. </div>';
      }
    break;
        case "Delete":
      if (deletedMeet($_POST['mName'])) {
        echo '<div class="alert alert-success" role="alert"> Meet deleted. </div>';
      } else {
        echo '<div class="alert alert-danger" role="alert"> Error. </div>';
      }
    break;
  }
}

$meets = selectMeets();
include "view-meets.php";
include "view-footer.php";
?>
