<?php
    require 'connect.php';
    $sql = "SELECT * FROM register";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $mail_val= $row['Webmail Id'] ;
        }
    return $mail_val;
}
?>