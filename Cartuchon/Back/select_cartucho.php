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

$sql = "SELECT id='$_POST[id]', Marca, Modelo FROM cartuchos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"].  $row["Marca"]. " " . $row["Modelo"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>