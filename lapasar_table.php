<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
<?php
$servername = "localhost";
$username = "zibeline";
$password = "zibeline";
$dbname = "zibeline";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, address, qty, price FROM book";
$result = $conn->query($sql);
$total = 0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "</td><td>". $row["name"]. "</td><td>". $row["address"]. "</td></tr>";
        $total += $row["qty"] * $row["price"];
    }
    echo "<tr><td></td><td><b>grand total:</b></td><td><b> RM". $total. "</b></td></tr>";
} else {
    echo "0 results";
}

$conn->close();
?>
    </tbody>
  </table>
</div>

</body>
</html>
