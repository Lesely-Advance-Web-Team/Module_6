<?php
  // get the data to insert into the db
   $title = $_POST["title"];
   $author = $_POST["author"];
   $location = $_POST["location"];
   $date = $_POST["date"];
   $description = $_POST["description"];

   // insert the data with the sql query
   include_once 'db_connect.php';
   $sql = "INSERT INTO posts (title, author, location, date, description) VALUES ('" . $title . "','" . $author . "','" . $location . "','" . $date . "','" . $description . "',)";
$result = mysqli_query($conn, $sql);
   

   // redirect to homepage
   header("Location: index.php");
?>