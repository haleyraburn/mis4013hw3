<?php
function selectEventsByMeet($cid) {
  try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.meet_id, meet_name, meet_location, meet_daytime FROM meet m join event e on e.meet_id = m.meet_id where e.meet_id=?");
        $stmt->bind_param("i", $cid);
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
