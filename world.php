<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country= $_GET['country'];
$context=$_GET['context'];
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

if($context=='cities'){
  $stmt= $conn->query("SELECT cities.name,cities.district, cities.population FROM cities JOIN countries ON cities.country_code=countries.code WHERE countries.name LIKE '%$country%';");
  $city_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
}
elseif(isset($country)){
  $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%';");
  $cntry_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


require 'hello.php';

?>