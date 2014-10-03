<?
	class AddUser {
		public $add_my;
		public function Add() {
			$add_my = mysql_query("INSERT INTO `table_user` (`name`, `surname`, `age`, `id`) VALUES ('".$_POST['name']."','".$_POST['surname']."','".$_POST['age']."','".$_POST['id']."')");
		}
	}