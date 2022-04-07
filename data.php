<?php

$conn =mysqli_connect("localhost", "root","","thebtcge_coinpayment");

if($conn->connect_error)
{
  die("Couldn't get into db". $conn->connect_error);
}
else {


  $result=mysqli_query($conn, "SELECT id,email,amount,payout_amount,status, updated_at, payment_time FROM payments WHERE status='success' AND amount>=0.002 ORDER BY id ASC");
  $data=array();

  while($row=mysqli_fetch_assoc($result))
  {
    $data[]=$row;
  }

  echo json_encode($data);


}
mysqli_close($conn);

 ?>
