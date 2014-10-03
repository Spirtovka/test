<?php
	class Library {
		public $name, $kolvo, $author, $sql, $result;
		public function Add() {
			$sql = "INSERT INTO `lib_table` (`name`, `kolvo`, `author`)
			VALUES('$name','$kolvo','$author')";
			$result = mysql_query($sql);
		}
	}
?>