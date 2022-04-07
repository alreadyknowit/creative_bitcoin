<?php

$conn =mysqli_connect("localhost", "root","","thebtcge_coinpayment");

if($conn->connect_error)
{
  die("Couldn't get into dn". $conn->connect_error);
}
else {
  $result=mysqli_query($conn, "SELECT payment_time FROM payments");
  $data=array();

  while($row=mysqli_fetch_assoc($result))
  {
    $data[]=$row;
  }
  echo json_encode($data);
}













 ?>
