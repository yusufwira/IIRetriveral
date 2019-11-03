<?php 
	$id = $_GET['id'];
	//print_r($id);
	$servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "spk_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM karyawan WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


header("Location:http://localhost/spk-project/karyawan.php");

 ?>