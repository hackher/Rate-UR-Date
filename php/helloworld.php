
<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1'); 

if ($_POST['submit'] == "submit")
{
	$punctual= $_POST ['punctual'];
	$hygiene= $_POST ['hygiene'];
	$dress= $_POST ['dressstyle'];
	$mannerism= $_POST ['mannerism'];
	$chemistry= $_POST ['chemistry'];
	$pay= $_POST ['pay'];
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hackher";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO datingru (punctuality, hygiene, dress, manner, chemistry, pay)
VALUES ('$punctual', '$hygiene', '$dress', '$mannerism', '$chemistry', '$pay')";

if (mysqli_query($conn, $sql)) { 
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
