<?php
function selectMeets() {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("SELECT meet_id, meet_name, meet_location, meet_daytime FROM meet");
  $stmt->execute();
  $result = $stmt->get_result();
  $conn->close();
  return $result;
} catch (Exception $e) {
  $conn->close();
throw $e;
}
}

function insertMeet($mName, $mLocation, $mDayTime) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("INSERT INTO `meet` (`meet_name`, `meet_location`, `meet_daytime`) VALUES (?, ?, ?)");
  $stmt->bind_param("ss", $mName, $mLocation, $mDayTime);
  $success = $stmt->execute();
  $conn->close();
  return $success;
} catch (Exception $e) {
  $conn->close();
throw $e;
}
}

function updateMeet($mName, $mLocation, $mDayTime, $mid) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("update `meet` set `meet_name` = ?, `meet_location` = ?, `meet_daytime` = ? where meet_id = ?");
  $stmt->bind_param("ssi", $mName, $mLocation, $mDayTime, $mid);
  $success = $stmt->execute();
  $conn->close();
  return $success;
} catch (Exception $e) {
  $conn->close();
throw $e;
}
}

function deletedMeet($mid) {
  try {
    $conn = get_db_connection();
  $stmt = $conn->prepare("delete from meet where meet_id=?");
  $stmt->bind_param("i", $mid);
  $success = $stmt->execute();
  $conn->close();
  return $success;
} catch (Exception $e) {
  $conn->close();
throw $e;
}
}
?>
