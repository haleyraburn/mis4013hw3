<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('24.248.253.76', 'haleyraburn', 'OUprincess56', 'mis4013haleyraburn3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
