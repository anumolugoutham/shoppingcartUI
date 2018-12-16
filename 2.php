<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,cost,size FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "product name: " . $row["name"]."<br>";
 	echo "product cost: " . $row["cost"]. "<br>";
	 echo  "product size: " . $row["size"]."<br>"; 
    }
} else {
    echo "0 results";
}
$conn->close();
?>