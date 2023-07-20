<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "responses"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['sub'])) {

    $name = $_POST['name'];
    $mail=$_POST['mail'];
    $comms=$_POST['comms'];
    $sql = "INSERT INTO resp2 VALUES ('$name','$mail','$comms')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
  echo "<link rel='stylesheet' type='text/css' href='Homepage.css' />";
echo "<div class=\"wholetop\"><h1> Thank you for your response, ".$name."!"
."<br><br>Redirect back to the <a href=\"Homepage.html\"> home page </a></div>";
?>