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
			$link =  mysql_connect('localhost', 'root', '');
			mysql_select_db('user-base',$link);
			$add_table = AddUser::Add();
			if ($add_my) {
				echo "Данные успешно добавлены в таблицу...";
			}
			else {
			echo "Данные не добавлены в таблицу..." . mysql_error();
			}
		}
	?>
</body>
</html>