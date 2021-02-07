<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "zibeline";
  $password = "zibeline";
  $dbname = "zibeline";
  $name = $_GET['name'];
  $address = $_GET['address'];
  if(isset($name) && isset($address) && $name != "" && $address != "") {
    // echo $_GET['name'];

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }

     $sql = "INSERT INTO book (name, address)
     VALUES ('$name', '$address')";

     if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }

     $conn->close();
  }

  ?>
<div class="container">
  <form>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <button type="submit" class="btn btn-default">Save</button>
  </form>
</div>

</body>
</html>
