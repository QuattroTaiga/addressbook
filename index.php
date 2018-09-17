<?php
  include '/includes/header.php';
  include '/includes/footer.php';
  include '/includes/nav.php';
  include '/functions/table.php';
  include '/functions/addCon.php';
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
        <td><button type="submit" name="btn-edit" ><a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';documnet.getElementById('fade').style.display='block'">Edit</a></button>|<button type="submit" name="delete-btn">Delete</button></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

<div id="light" class="light_content">
  <h1>Edit Contact</h1>
  <div style="text-align: center">
    <div>
      <label for="FirstName">First Name:</label>
      <input type="text" name="FirstName" placeholder="First Name" value="<?php echo $fetched_row['FirstName']; ?>" required>
    </div>
    <div>
      <label for="LastName">Last Name:</label>
      <input type="text" name="LastName" placeholder="Last Name" value="<?php echo $fetched_row['lastName']; ?>" required>
    </div>
    <div>
      <label for="Email">Email:</label>
      <input type="text" name="Email" placeholder="Email" value="<?php echo $fetched_row['Email']; ?>" required>
    </div>
    <div>
      <label for="Address">Address:</label>
      <input type="text" name="Address" placeholder="Address" value="<?php echo $fetched_row['Address']; ?>" required>
    </div>
    <div>
      <label for="Telephone">Telephone:</label>
      <input type="text" name="Telephone" placeholder="Telephone" value="<?php echo $fetched_row['Telephone']; ?>" required>
    </div>
  </div>

  <div style="text-align: center;">
    <button type="submit" name="update-btn" align="center">Update</button>
    <button><a  align="center"  href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';documnet.getElementById('fade').style.display='none'">Close</a></button>
  </div>
</div>

<div id="fade" class="dark_overlay"></div>
