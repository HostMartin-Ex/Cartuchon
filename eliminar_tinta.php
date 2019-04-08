<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "cartuchon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM tintas WHERE id='$_POST[Dos]'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<?php
header ("Location: http://localhost/back/eliminar_ttc.php");
?>