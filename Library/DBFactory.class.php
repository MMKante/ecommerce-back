<?php
	namespace Library;

	class DBFactory {
		public static function MySQLPDO() {
			$db = new \PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8','root','');
			$db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

			return $db;
		}
		public static function MySQLMySQLi() {
			return new \MySQLi('localhost','rapblonc_distribution','distribution123','rapblonc_distribution');
		}
	}