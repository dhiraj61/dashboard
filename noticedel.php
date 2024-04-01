<?php
require('connection.php');
$id=$_GET['id'];

$sql="delete from notification where name='$id'";

if(mysqli_query($con,$sql)){
    echo "<script>alert('data deleted successfully')</script>";
    
    echo "<script>window.open('notice.php','_self')</script>";
}
?>
