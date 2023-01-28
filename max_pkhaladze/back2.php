<?php
  $servername = "localhost";
  $username = "root";
  $password = "rootroot";
  $dbname = "myDBP1234";
  $table = "people_named";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT id, api_id, name, birth_year FROM $table";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td class='px-4 py-2'>" . $row["id"]. "</td>";
          echo "<td class='px-4 py-2'>" . $row["api_id"]. "</td>";
          echo "<td class='px-4 py-2'>" . $row["name"]. "</td>";
          echo "<td class='px-4 py-2'>" . $row["birth_year"]. "</td>";
          echo "</tr>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();