<?php
    $servername="localhost";
    $user="root";
    $pass="yes";
    $db="test_db";
    //$conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);
    $conn = new mysqli('localhost', $user , $pass , $db );
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script> alert('afterdb') </script>";
    echo "<script> alert('Values added') </script>";
    //mysqli_query($conn, "CREATE TABLE IF NOT EXISTS hostel_info( name VARCHAR(255), roll_no INT, gender VARCHAR(255), WebmailId VARCHAR(255), phone_no BIGINT, hostel_choice VARCHAR(255)");
    echo "<script> alert('table is therer') </script>";
    $query="INSERT into hostel_info VALUES ('sdfd','23','sf','sfs','2343242','Jade')";
    if($query){
      echo "<script> alert('query accepted') </script>";
    }
    mysqli_query($conn,$query);
    //$conn->exec($query);
    echo "<script> alert('Data added Successfully') </script>";
?>