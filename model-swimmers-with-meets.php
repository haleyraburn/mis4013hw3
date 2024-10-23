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

function insertSwimmer($sName, $sAge, $sGender) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO swimmer (swimmer_name, swimmer_age, swimmer_gender) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $sName, $sAge, $sGender);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSwimmer($sName, $sAge, $sGender, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update swimmer set swimmer_name  = ?, swimmer_age = ?, swimmer_gender = ? where swimmer_id = ?");
        $stmt->bind_param("sssi", $sName, $sAge, $sGender, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteSwimmer($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from swimmer where swimmer_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

?>
