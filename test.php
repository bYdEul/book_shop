<?php
    $conn=mysqli_connect("192.168.3.9","root","123456");
    if($conn){
        echo"ok";
    }else{
        echo"error";    
    }
?>