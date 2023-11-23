<?php

  $con = new mysqli('localhost','root','','course');

  if($con){
    echo 'database is connected successfully';
  }
 else{
    die(mysqli_error($con));
 }

?>