<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
</head>
<body>
<form action="insert.php" method="post">
<label for="name">Name: </label><br>
<input type="text" id="name" name="name"><br><br>

<label for="age">Age: </label><br>
<input type="number" id="age" name="age" min="1" max="99"><br>

<p>Sex: </p>
<input type="radio" id="male" name="sex" value="Male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="sex" value="Female">
<label for="female">Female</label><br>

<p>Us Citizen: </p>
<input type="radio" id="yes" name="uscitizen" value="YES">
<label for="yes">Yes</label><br>
<input type="radio" id="no" name="uscitizen" value="NO">
<label for="no">No</label><br><br>

<input type="submit">


</form>
</body>
</html>