<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kanhawhp_geniemanager";

$data =  json_decode(file_get_contents('php://input'), True);
$data = json_encode($data);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO snapbill (data)
VALUES ('".$data."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php

/*$data = $_POST;

// Pull the JSON body out of the post
$input = json_decode(file_get_contents('php://input'), True);
 
// Take out the unique id of this webhook delivery
// This (or $input['body']['id']) can be used to ensure you only act on each event once
$uuid = $input['uuid'];
 
// Only take invoice state updates
if ($input['body']['path'] == '/invoice/update/state') {
  // Check that the invoice was marked as paid
  if ($input['body']['details'] == 'paid') {
    // Pull out the invoice number and total cents
    $number = $input['body']['invoice']['number'];
    $total_cents = $input['body']['invoice']['total_cents'];
 
    
  }
}*/
?>