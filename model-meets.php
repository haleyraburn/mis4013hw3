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
?>
