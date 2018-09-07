<?php
  include './config/db.php';

  $sql_query = 'SELECT * FROM entries';
  $query = mysqli_query($conn,$sql_query);
  $result_set = mysqli_query($conn, $sql_query);

?>
