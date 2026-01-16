<?php 
	declare(strict_types=1);
	namespace App\Model;

	use App\Core\ErrorHandling;

	use PDO;
	use PDOException;
	

	class UserModel{
		private PDO $userModel;

		function __construct(PDO $db){

			$this->userModel= $db;
		} 

	}