<?php
	$conn = mysql_connect("localhost","root","");
	$db      = mysql_select_db("animxDB",$conn);
?>

<?php if (isset($_POST['html'])) { $created = time(); $sql = "INSERT INTO templates ( html, created) VALUES ( '$_POST['html']', $created)"; if (mysqli_query($conn, $sql)) { echo 'done'; } else { die("Error:" . mysqli_error($conn)); } }
?>