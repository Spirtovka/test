<?
include('add.php');
header('Content-Type: text/html; charset=utf-8');
?>
<html>
<head>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="name"><br>
		<input type="text" name="surname"><br>
		<input type="text" name="age"><br>
		<input type="text" name="id" value="<?mt_rand();?>"><br>
		<input type="submit" name="connect" value="Connect">
		<input type="submit" name="add_user" value="Add">
	</form>
	<?
		$connect = $_POST['connect'];
		$name = $_POST['name'];
		$surname = $_POST['age'];
		$id = $_POST['id'];
		$add_user = $_POST['add_user'];
		if (isset($connect)) {
			$link = mysql_connect('localhost', 'root', '');
			if (!$link) {
				echo "Ошибка подключения к MySQL...";
			}
			else {
				echo "Подключено к MySQl...".'<br>';
			}
		$db = mysql_select_db('user-base',$link);
			if (!$db) {
				echo 'Ошибка подключения к БД...';
			}
			else {
				echo "Подключено к БД...";
			}
		}
		if (isset($add_user)) {
			$add_table = new AddUser();
			if (!$add) {
				die ('Данные не добавлены в таблицу...' . mysql_error());
				var_dump($add);
			}
			else {
				$add_table->Add;
				echo "Данные успешно добавлены в таблицу...";
			}
		}
	?>
</body>
</html>