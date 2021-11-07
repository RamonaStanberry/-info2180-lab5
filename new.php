<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';


$country= $_GET['country'];
$context=$_GET['context'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$cntry_results = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>
<?php foreach ($cntry_results as $row): ?>
  <? $code= $row['code']; 
    var_dump($code);
  ?>
<?php endforeach; ?>
<?php if ($context==='cities'){
  $new_stmt= $conn->query("SELECT c.name,c.district, c.population FROM cities c join countries cs on c.country_code = cs.code WHERE c.country_code=JAM");
}?>
<?php if ($context===NULL) {?>
<br>
<table>
  <caption>List of Countries </caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>Continent</th>
      <th>Independence</th>
      <th>Head of State </th>
      
    </tr>
  </thead>  
  <tbody>
<?php foreach ($cntry_results as $row): ?>
  <tr>
    <td><?= $row['name']; ?></td>
    <td><?= $row['continent']; ?></td>
    <td><?= $row['independence_year']; ?></td>
    <td><?= $row['head_of_state']; ?> </td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php } ?>

<?php if ($context==='cities') {
  echo $context; ?>
<br>
<table>
  <caption>List of Cities </caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>District</th>
      <th>Population</th> 
    </tr>
  </thead>  
  <tbody>
  <?php foreach ($city_results as $row): ?>
  <tr>
    <td><?= $row['name']; ?></td>
    <td><?= $row['district']; ?></td>
    <td><?= $row['population']; ?></td>
  </tr>
  <?php endforeach; ?>
</tbody>
</table>
<?php } ?>



<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country= $_GET['country'];
$context=$_GET['context'];
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$cntry_results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<?php if ($context===NULL) {?>
<br>
<table>
  <caption>List of Countries </caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>Continent</th>
      <th>Independence</th>
      <th>Head of State </th>
      
    </tr>
  </thead>  
  <tbody>
<?php foreach ($cntry_results as $row): ?>
  <tr>
    <td><?= $row['name']; ?></td>
    <td><?= $row['continent']; ?></td>
    <td><?= $row['independence_year']; ?></td>
    <td><?= $row['head_of_state']; ?> </td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php } ?>

<?php if ($context==='cities') {?>
<br>
<table>
  <caption>List of Cities </caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>District</th>
      <th>Population</th> 
    </tr>
  </thead>  
  <tbody>
    <?php foreach ($cntry_results as $row): ?>
      <?php $code= $row['code'];
        $new_stmt= $conn->query("SELECT c.name,c.district, c.population FROM cities c join countries cs on c.country_code = cs.code WHERE c.country_code="+$code);
        $cities= $new_stmt->fetchAll(PDO::FETCH_ASSOC);
      ?> 
      <?php foreach($cities as $city): ?>
        <tr>
          <td><?= $city['name']; ?></td>
          <td><?= $city['district']; ?></td>
          <td><?= $city['population']; ?></td>
        </tr>
      <?php endforeach; ?>

    <?php endforeach; ?>
  </tbody>
</table>
<?php } ?>