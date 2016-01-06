<?PHP


$host="sql210.lockernerd.co.uk";
$user="lnw_16618010";
$password="thejunan";

$dbname = "lnw_16618010_theju";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO clients (name, email,phone)
VALUES ('Doe', 'john@example.com',902399)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
