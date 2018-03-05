<?php
$servername = "localhost";
$username = "admin_PPDemoUser";
$password = "MyHairyBalls88";
$dbname = "admin_PPDemo";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "SELECT * FROM SoPerthweblog_options";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["option_id"]. " - Name: " . $row["option_name"]. " - Value " . $row["option_value"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
