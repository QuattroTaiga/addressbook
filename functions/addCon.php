<?php
include ("../config/db.php");
?>


<?php

if(isset($_POST[addsave-btn]))
{
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$telephone = $_POST['Telephone'];
$address = $_POST['Address'];
$email = $_POST['Email'];
$sql_query = "INSERT INTO entries (FirstName,LastName,Telephone,Address,Email) VALUES ('$firstname','$lastname','$telephone','$address','$email')";
}

?>


<?php

if(isset($POST[update-btn]))
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
if(isset($POST[delete-btn]))
{
 $sql_query = "UPDATE entries SET Status= 'Disabled' WHERE ID='someid'";/* needs to be changed*/
}

?>