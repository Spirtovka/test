<?
	class AddUser {
		private $link;
		public function __construct() {
			$link =  mysql_connect('localhost', 'root', '');
			mysql_select_db('user-base',$link);
		}
		public $add_my = true;		
		public function Add() {
			$add_my = mysql_query("INSERT INTO `table_user` (`name`, `surname`, `age`, `id`) VALUES ('".$_POST['name']."','".$_POST['surname']."','".$_POST['age']."','".$_POST['id']."')");
		}
	}