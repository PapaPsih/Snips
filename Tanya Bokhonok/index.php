<form method="post">
  <input type="submit" name="ok" value="OK">
</form>
<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'module'); //connect DB
if (mysqli_connect_errno()) {
  echo mysqli_connect_errno(); //check errors
}
if(isset($_POST['ok'])) {
  $sql = "LOAD DATA INFILE 'Z:/home/localhost/www/module/pricevlad_20160114_130853_Contr_7725-11CSV.csv'
  INTO TABLE data
  FIELDS TERMINATED BY ';'
  ENCLOSED BY '\"'
  LINES TERMINATED BY '\n'
  STARTING BY '\"'
  IGNORE 1 ROWS
  (internal_code, brand, name, vendor_code, price, rest_store_default, sum_rest);"; // load data from CSV file to DB with rows, which are in CSV
  $result = mysqli_query($mysqli, $sql); // query
  if(!$result)
    echo "error";
  else
    echo "stunningly";
}
$query = "SELECT * FROM data"; //output
$output=mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($output)){
  echo $row[internal_code];
  echo $row[brand];
  echo $row[name];
  echo $row[vendor_code];
  echo $row[price];
  echo $row[rest_store_default];
  echo $row[sum_rest];
}
mysqli_free_result($output);
mysqli_close($mysqli);

?>
