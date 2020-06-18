<?php
$conn_string="host=ec2-35-171-31-33.compute-1.amazonaws.com port=5432
 dbname=d4421tlcng5l4j
 user=npgoaimxwihxbg password=448d571324508b1215c8c2a3747682d9d150ff3e85b61cbc087cd7e87b9e5c32";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass'".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if($row==1)
{
	echo "Login success";
}
else
{
	echo "Login Failed";
}
?>
