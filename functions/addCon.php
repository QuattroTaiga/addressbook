<?php
include ("../config/db.php");



<?php
/*
if(isset($_POST[btn-addsave]))
{
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$telephone = $_POST['Telephone'];
$address = $_POST['Address'];
$email = $_POST['Email'];
$sql_query = "INSERT INTO entries (FirstName,LastName,Telephone,Address,Email) VALUES ('$firstname','$lastname','$telephone','$address','$email')";
}

*/

?>


<?php
if(isset($_GET['btn-edit']))
{
$sql_query="SELECT * FROM entries WHERE ID=".$_GET['edit-btn'];
$result_set=mysqli_query($connect,$sql_query);
$fetched_row=mysqli_fetch_array($result_set);
    
}

?>






<?php

if(isset($_POST[btn-update]))
{
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$telephone = $_POST['Telephone'];
$address = $_POST['Address'];
$email = $_POST['Email'];
$sql_query = "UPDATE entries SET FirstName='$firstname',LastName='$lastname',Telephone='$telephone',Address='$address',Email='$email' WHERE ID='someid'"/* needs to be changed*/;   
       
}

?>


<?php
/* needs to be changed*/
if(isset($_POST[btn-delete]))
{
 $sql_query = "UPDATE entries SET Status= 'Disabled' WHERE ID='someid'";/* needs to be changed*/
}

?>


?>