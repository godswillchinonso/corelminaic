<?php 
	declare(strict_types=1);
	namespace App\Core;

	use PDO;
	use PDOException;

	use App\Core\ErrorHandling;

	class Database{

		public ?PDO $connect=null;
		private static $db_host="localhost";
		private static $db_user="root";
		private static $db_password="";
		private static $db_name="boilerplate";
		private static $charset="utf8mb4";


		



		public function connection():PDO 
		{
			try {
				$dsn="mysql:host=".self::$db_host.",dbname=".self::$db_name.";charset=".self::$charset;
				$this->connect= new PDO($dsn, self::$db_user, self::$db_password);

				//set error reporting
				$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				return $this->connect;


			} catch (PDOException $e) {
				ErrorHandling::logErrorToCustomFile($e);
				die("Opps!!! An error occurred trying to connect to the database server. Please try again later.");
			}
		}
	}



	