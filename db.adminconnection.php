<?php
// Include the database configuration
require_once 'connect.php';

if(isset($_POST['customerID'])){
  $customerID = $_POST['customerID'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $streetName = $_POST['streetName'];
  $usa = $_POST['usa'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];

  $reciverName = $_POST['reciverName'];
  $reciverPhone = $_POST['reciverPhone'];
  $des_country = $_POST['des_country'];
  $rev_address = $_POST['rev_address'];
  $province = $_POST['province'];


  $weight = $_POST['weight'];
  $shippingMethod = $_POST['shippingMethod'];
  $price = $_POST['price'];
  $trackingNumber = $_POST['trackingNumber'];

  $reciverAddress = $rev_address.", ".$des_country.", ".$province;
  $customerAddress = $streetName.", ".$state.", ".$zip." ".$usa;
}
$cstmt = $conn->prepare("INSERT INTO CUSTOMER(customerID, fname, lname, Address, Phone) value(?,?,?,?,?)");
$cstmt ->bind_param("issssd",$customerID, $firstName, $lastName, $customerAddress, $phone);
$cstmt ->execute();


$rstmt = $conn->prepare("INSERT INTO LOCATION (trackingNum, receiverName, reciverPhone, receiverAddress, price, region, cityOrcountry)
VALUES (?, ?, ?, ?, ?, ?, ?)");
$rstmt->bind_param("ssdsdss", $trackingNumber, $reciverName, $reciverPhone, $reciverAddress, $price, $province, $des_country);
$rstmt->execute();

$pstmt = $conn->prepare("INSERT INTO SHIPPING(customerID, weight, shippingMethod,trackingNumber) value(?,?,?,?)");
$pstmt-> bind_param("idss",$customerID,$weight,$shippingMethod,$trackingNumber);

echo "Register successfully";
$cstmt->close();
$rstmt->close();
$pstmt ->close();
$conn ->close();



?>