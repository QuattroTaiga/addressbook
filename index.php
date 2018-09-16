

<link rel="stylesheet" href="css/css.css">
<?php
  include '/includes/header.php';
  include '/includes/nav.php';
  include '/includes/footer.php';
  include '/functions/table.php';
?>

  <table>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Address</th>
        <th scope="col">Number</th>
        <th scope="col">Email</th>
        <th scope="col">Functions</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_row($result_set)) { ?>
      <tr>
        <th scope="row"><?php echo $row[0];?></th>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        <td>Edit|Delete</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
