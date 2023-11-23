<?php

  $con = new mysqli('localhost','root','','zoomato');

  if(!$con){
    die(mysqli_error($con));
  }
  
 

?>