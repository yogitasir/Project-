<?php

  $con = new mysqli('localhost','root','','forum');

  if(!$con){
    die(mysqli_error($con));
  }
 

?>