<?
	class AddUser {
		public $add;

		public function Add() {
			$add = mysql_query("INSERT INTO `table_user` (`name`, `surname`, `age`, `id`) VALUES('$name', '$surname', '$age', '$id')");
		}
	}