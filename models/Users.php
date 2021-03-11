<?php

	class Users extends Model{

		public $info;

		public function verifyUser($number, $pass){
			
			$sql = "SELECT * FROM users WHERE user_number = :unumber AND  user_pass = :upass";
			$sql  = $this->db->prepare($sql);
			$sql->bindValue(":unumber", $number);
			$sql->bindValue(":upass", md5($pass));
			$sql->execute();

			if($sql->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		} 

		public function createToken($unumber){

			$token = md5(time().rand(0,9999).time().rand(0,9999));
			$sql = "UPDATE users SET user_token = :token WHERE user_number = :unumber";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":token", $token);
			$sql->bindValue(":unumber", $unumber);
			$sql->execute();

			return $token;
		}

		public function checkLogin(){
			$user = array();
			if(!empty($_SESSION['token'])){
				$token = $_SESSION['token'];

				$sql = "SELECT * FROM users WHERE user_token = :token";
				$sql = $this->db->prepare($sql);
				$sql->bindValue(":token", $token);
				$sql->execute();
				if ($sql->rowCount() > 0) {
					$this->info = $sql->fetch();
					$user = $this->info;
					array_push($user, true);
					return $user;
				}
			}
			array_push($user, false);
			return $user;
		}

		public function addUser($name, $user_number, $user_pass){
			$sql = "INSERT INTO users (name, user_number, user_pass) VALUES (:name, :user_number, :user_pass)";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":name", $name);
			$sql->bindValue(":user_number", $user_number);
			$sql->bindValue(":user_pass", $user_pass);
			$sql->execute();	

		}
		public function checkMat($user_number){
			$sql = "SELECT * FROM users WHERE user_number = :user_number";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":user_number", $user_number);
			$sql->execute();
			if($sql->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}
	}









?>