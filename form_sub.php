<?php
  echo "<script> alert('req is not working') </script>";
  require 'connect.php';  
  echo "<script> alert('req works') </script>";      
  if (isset($_POST['submit'])){
      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $gen=$_POST['gender'];
      $webmail=$_POST['webmail'];
      $ph=$_POST['ph'];
      $hostel=$_POST['hostel_choice'];
  }
  echo "<script> alert('datas assigned') </script>";
  $query="INSERT into hostel_info VALUES('$name','$roll', '$gen','$webmail','$ph', '$hostel')";
  mysqli_query($conn, $query);
  echo "<script> alert('Data added Successfully') </script>";
?>
Click here to 
<a href="/">
    Home Page
</a>