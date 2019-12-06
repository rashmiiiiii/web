<?php
require('includes/config.php');
if (isset($_POST['price']))
$b_price=$_POST['price'];
$query="UPDATE book SET b_price='$price' WHERE b_nm='$b_nm'";
    


			mysqli_query($conn,$query) or die("Can't execute...");
			header("location:update.php");

?>