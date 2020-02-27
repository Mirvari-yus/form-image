<?php 
	$new_name = '';
	if (isset($_POST['submit'])) {
		$file_name = $_FILES['file']['name'];
		$file_tmp = $_FILES['file']['tmp_name'];
		
		$new_name = 'image'.rand(10,100).'.jpg';	
		move_uploaded_file($file_tmp, '../images/'.$new_name);

		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		echo "<h1>".$name.' '.$surname.'<br>'.$email."</h1>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PROFILE</title>
	<link rel="stylesheet" href="form.css">
</head>
<body>
	<img src="../images/<?=$new_name?>" alt="">
</body>
</html>