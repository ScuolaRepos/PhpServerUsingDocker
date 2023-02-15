<?php
// Create connection
$conn = mysqli_connect("mysqlHost", "root", "giovanni", "demo");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$query = 'SELECT * FROM blogs';

$result = mysqli_query($conn, $query);

echo "<h1>SQL Content</h1>";
while($rec = mysqli_fetch_assoc($result)) {
    echo '<h2>' . $rec['title'] . '</h2>';
    echo '<h2>' . $rec['content'] . '</h2>';
    echo '<h2>' . $rec['data'] . '</h2>';
    echo '<hr>';
}

?>