<?php
require_once("util-db.php");
require_once("model-swimmers.php");

$pageTitle = "Swimmers";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertSwimmer($_POST['sName'], $_POST['sAge'], $_POST['sGender']);
    break;
  }
}
$swimmers = selectSwimmers();
include "view-swimmers.php";
include "view-footer.php"
?>
