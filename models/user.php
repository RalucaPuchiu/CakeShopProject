<?php
include 'config.php';

$conn = open_db();

// close_db($conn);

$sql = "SELECT user_id, first_name, last_name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["user_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
  }
} else {
  echo "0 results";
}

return $result;
?>