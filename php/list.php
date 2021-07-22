<!DOCTYPE html>
<html>
<head>
<title>User List</title>
</head>
<body>
<h1 align=center>User Records</h1>
<table align="center" border="1px" style="width:600px; line-height:40px;"> 
<tr>
<th colspan="4"><h2>User Records</h2></th>
</tr>
<tr>
<th>Name</th>
<th>Age</th>
<th>Sex</th>
<th>Us Citizen</th>
</tr>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database1";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die ("Connection Failed: " . $conn->connect_error);
} 

$sql="SELECT Name, Age, Sex, US_Citizen FROM User";
$result=$conn->query($sql);

if ($result->num_rows>0) {
while($row=$result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["Sex"] . "</td><td>" . $row["US_Citizen"] . "</td></tr>";
}
echo "</table>";
}else {
echo "0 results";
}
$conn->close();
?>
</table><br>
<form action="form.php" align=center>
<input type="submit" value="Add User" />
</form>


</body>
</html>



