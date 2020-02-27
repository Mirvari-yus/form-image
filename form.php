<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORM</title>
	<link rel="stylesheet" href="form.css">
</head>
<body>
	<form action="profile.php" method="POST" enctype="multipart/form-data">
		<div class="form-inline">
			<input class="col-6 inp" type="text" name="name" placeholder="Name" value="">
			<input class="col-6 inp" type="text" name="surname" placeholder="Surname">
			<br><br>
			<input class="col-12 inp input-email" type="email" name="email" placeholder="Email">
			<br><br>
			<input class="col-6 inp-btn" type="file" name="file">
			<input class="col-6 inp-btn" type="submit" name="submit" value="SUBMIT">
		</div>
	</form>

</body>
</html>
