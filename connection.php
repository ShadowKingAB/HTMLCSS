<?php
$con = mysqli_connect("localhost","root","","to_help");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

//this is the right pattern for inserting any toupe in a relation
// $qry = "insert into registration(name, email, gender, phone_number, password) values('Pritam Halder', 'pritamhalder02@gmail.com','m',0123456789,'pritamda')";
// $result = mysqli_query($con, $qry);
?>