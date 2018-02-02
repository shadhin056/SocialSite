<?php
       
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outzone";	
		
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    if(isset($_GET['email']) != "") {
        $delete = $_GET['email'];
        $delete = mysqli_query($conn, "DELETE FROM ophoto WHERE photo='$delete'");
        if($delete) {
            header("Location:profile.php#ami");
        } else {
            echo mysqli_error($conn);
        }
    }
?>