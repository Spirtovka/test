<?
header('Content-Type: text/html; charset=utf-8');
include 'add.php';
?>
<html>
<head>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="name"><br>
		<input type="text" name="surname"><br>
		<input type="text" name="age"><br>
		<input type="text" name="id" value="<?echo mt_rand();?>"><br>
		<input type="submit" name="add_user" value="Add">
	</form>
	<?
		$add_user = $_POST['add_user'];
		if (isset($add_user)) {
			$add_table = new AddUser();
			if ($add_table->add_my) {
				$add_table->Add();
				echo "Данные успешно добавлены в таблицу...";
			}
			else {
			die ('Error: ');
			}
		}
	?>
</body>
</html>