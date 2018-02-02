<?php 
		


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";
$couu=$_POST['suggest999'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT COUNT(DISTINCT Email) FROM likedislike WHERE ofrom ='$couu' AND Email!='' AND odislike=1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row55 = mysqli_fetch_assoc($result)) {
       echo $row55['COUNT(DISTINCT Email)'];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);


?>