<?php
  if(!$_POST['page']) die("0");

  $page = $_POST['page'];
  $url = $page.'.php';

  if(file_exists($url))
    echo file_get_contents($url);

  else echo '<h4>There is no such page!</h4>';
?>
