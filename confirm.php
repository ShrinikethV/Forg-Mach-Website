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

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $radio=$_POST['ra'];
    $likes=$_POST['sel'];
    $website=implode(",",$_POST['chk']);
    $txtar=$_POST['txtar'];
    $sql = "INSERT INTO resp VALUES ('$first_name','$last_name','$radio','$likes','$website','$txtar')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
  echo "<link rel='stylesheet' type='text/css' href='Homepage.css' />";
echo "<div class=\"wholetop\"><h1> Thank you for your response, ".$first_name."!"
."<br><br>Redirect back to the <a href=\"Homepage.html\"> home page </a></div>";
?>