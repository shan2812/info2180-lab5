<?php

$country = $_GET['country'];
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

if (isset($country) || !empty($country)){
  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo '<ul>';
 foreach ($results as $row){
  echo '<li>'. $row['name'] . $row['continent'] . $row['independence'] $row['head_of_state'] . '</li>';
 }
 echo '</ul>';
}
if (isset($country) || !empty($country)){
  $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
  $stmt = $conn->query("SELECT name FROM countries JOIN cities");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo '<ul>';
 foreach ($results as $row){
  echo '<li>'. $row['name'] . $row['district'] . $row['population'] . '</li>';
 }
 echo '</ul>';
}
?>
