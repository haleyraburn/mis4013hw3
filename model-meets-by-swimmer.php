<?php
function selectMeetsBySwimmer($iid) {
  try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.meet_id, meet_name, meet_location, meet_daytime FROM meet m join event e on e.meet_id = m.meet_id where e.swimmer_id=?");
        $stmt->bind_param("i", $sid);
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
