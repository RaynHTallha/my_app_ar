<?php
include "dbh.inc.php";

$sql = "SELECT uidUsers, emailUsers FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["uidUsers"]. " " . $row["emailUsers"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
