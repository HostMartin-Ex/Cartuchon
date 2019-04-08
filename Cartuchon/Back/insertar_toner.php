<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "cartuchon";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO toner (Marca)
VALUES ('$_POST[Marca2]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully toner";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<?php
header ("Location: http://localhost/back/insertar_ttc.php");
?>