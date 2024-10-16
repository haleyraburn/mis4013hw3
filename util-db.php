<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'misoucr3_hw3user', 'pXcbd0ZC)8kK', 'misoucr3_mis4013hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
