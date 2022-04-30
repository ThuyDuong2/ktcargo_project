<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ktcargo";

if(isset($_POST['customerID'])){
  $customerID = $_POST['customerID'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $streetName = $_POST['streetName'];
  $usa = $_POST['usa'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  $phone = $_POST['phone'];
  $weight = $_POST['weight'];
  $trackingNumber = $_POST['trackingNumber'];
  $reciverName = $_POST['reciverName'];
  $price = $_POST['price'];
  $des_country = $_POST['des_country'];
  $rev_address = $_POST['rev_address'];
  $province = $_POST['province'];
  $reciverAddress = $rev_address.", ".$province;
  $customerAddress = $streetName.", ".$state.", ".$zip." ".$usa;
}




// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $pstmt = $conn->prepare("insert into customer(customerID, fname, lname, Address, Phone, packageWeight) value(?,?,?,?,?,?)");
    $pstmt ->bind_param("sssssd",$customerID, $firstName, $lastName, $customerAddress, $phone,$weight);
    $pstmt ->execute();

    echo "Register successfully";
    $pstmt ->close();
    $conn ->close();



?>
