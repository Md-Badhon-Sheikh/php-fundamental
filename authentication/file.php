<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<a href="logout.php">Logout</a>
<form action="#" method="post">
<div>Id<br/>
<input type="text" name="txtId" />
</div>

<div>Name<br/>
<input type="text" name="txtName" />
</div>

<div>email<br/>
<input type="text" name="email" />
</div>

<div>Phone<br/>
<input type="text" name="txtPhone" />
</div>
<div>
<input type="submit" name="btnSubmit" value="Submit"/>
</div>

</form>
<?php 
	Student::display_students();
?>

</body>
</html>