<?php
function selectSwimmers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT swimmer_id, swimmer_name, swimmer_age, swimmer_gender FROM swimmer");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectMeetsBySwimmer($sid) {
  try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.meet_id, meet_name, meet_location, meet_daytime FROM meet m join event e on e.meet_id = m.meet_id where e.swimmer_id=?");
        $stmt->bind_param("i", $iid);
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
