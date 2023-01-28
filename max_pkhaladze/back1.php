<?php
  //connect to database
  $servername = "localhost";
  $username = "root";
  $password = "rootroot";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) 
  {
      die("Connection failed: " . $conn->connect_error);
  }

  //check if database exists
  $sql = "CREATE DATABASE IF NOT EXISTS myDBP1234";
  if ($conn->query($sql) === TRUE) 
  {
      echo "მონაცემთა ბაზა შექმნილია" . "  /  ";
  } else {
      echo "Error creating database: " . $conn->error . "  /  ";
  }

  //select the database
  $conn->select_db("myDBP1234");

  //check if table exists
  $table = "people_named";
  $sql = "CREATE TABLE IF NOT EXISTS $table (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      api_id INT(6) NOT NULL,
      name VARCHAR(30) NOT NULL,
      height VARCHAR(30) NOT NULL,
      mass VARCHAR(30) NOT NULL,
      hair_color VARCHAR(30) NOT NULL,
      skin_color VARCHAR(30) NOT NULL,
      eye_color VARCHAR(30) NOT NULL,
      birth_year VARCHAR(30) NOT NULL,
      gender VARCHAR(30) NOT NULL
  )";

  if ($conn->query($sql) === TRUE) 
  {
      echo "ცხრილი შექმნილია" . "  /  ";
  } else {
      echo "Error creating table: " . $conn->error . "  /  ";
  }


  if(isset($_POST['search']))
  {
    $api_id = $_POST['search'];
    $url = "https://swapi.dev/api/people/".$api_id."/";
    $data = file_get_contents($url);
    $char = json_decode($data);


    $name = $char->name;
    $height = $char->height;
    $mass = $char->mass;
    $hair_color = $char->hair_color;
    $skin_color = $char->skin_color;
    $eye_color = $char->eye_color;
    $birth_year = $char->birth_year;
    $gender = $char->gender;

    $sql = "INSERT INTO $table (api_id, name, height, mass, hair_color, skin_color, eye_color, birth_year, gender)
    VALUES ('$api_id', '$name', '$height', '$mass', '$hair_color', '$skin_color', '$eye_color', '$birth_year', '$gender')";


    if ($conn->query($sql) === TRUE) 
    {
      echo "ახალი ჩანაწერი დამატებულია" . "  ";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error . "  ";
    }
  }
  
      