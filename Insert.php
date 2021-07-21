<!DOCTYPE html>
<html>
<head>
<title>Insert</title>
</head>
<body>

<?php

$name=$_POST["name"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$uscitizen=$_POST["uscitizen"];

$servername="localhost";
$username="root";
$password="";
$dbname="database1";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die ("Connection Failed: " . $conn->connect_error);
} 

$sql="INSERT INTO user (Name, Age, Sex, US_Citizen)
VALUES ('$name', '$age', '$sex', '$uscitizen')";

if ($conn->query($sql)===TRUE) {
echo "User '$name' added successfully!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

<form action="list.php">
<input type="submit" value="Go to User List" />
</form>

</body>
</html>