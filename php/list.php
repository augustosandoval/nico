<!DOCTYPE html>
<html>
<head>
<title>User List</title>
</head>
<body>
    <h1 align=center>User Records</h1>
    <table align="center" border="1px" style="width:600px; line-height:40px;"> 
    <tr>
    <th colspan="6"><h2>User Records</h2></th>
    </tr>
    <th>Name</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Us Citizen</th>
    <th>ID</th>
    <th>Select</th>
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

$sql = "SELECT Name, Age, Sex, US_Citizen, ID FROM users";
$result=$conn->query($sql);

if ($result->num_rows>0) {
    while($row=$result->fetch_assoc()) {
        $line = "<tr>"
        $line .= "<td><input type='radio' id='html' name='selectrow' value=' . $row["ID"] . '></td>"
        $line .= "<td>" . $row["Name"] . "</td>"
        $line .= "<td>" . $row["Age"] . "</td>"
        $line .= "<td>" . $row["Sex"] . "</td>"
        $line .= "<td>" . $row["US_Citizen"] . "</td>"
        $line .= "<td>" . $row["ID"] . "</td>"

        

        echo $line


        //echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["Sex"] . "</td><td>" . $row["US_Citizen"] . "</td><td>" . $row["ID"] . "</td></tr>";
    }
echo "</table>";

} else {
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



