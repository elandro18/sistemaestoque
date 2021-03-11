<?php
	class loginController extends Controller {

		private $user;
		
		
		public function __construct(){
			parent::__construct();

    		$this->user = new Users();
			
			
		}
		public function index(){
			$data = array(
				'msg' => ''
			);

			if (!empty($_POST['number'])) {

				$unumber = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
				$upass = $_POST['password'];

				
				if ($this->user->verifyUser($unumber, $upass)) {
					$token = $this->user->createToken($unumber);
					$_SESSION['token'] = $token;

					header("Location:".BASE_URL);
					exit;
					
				}else{
					$data['msg'] = "Matrícula ou/e senha incorretos";
				}
			}

			$this->loadView('login', $data);
		}
		public function sair(){
			unset($_SESSION['token']);
			header("Location:".BASE_URL."login");
			exit;
		}

		public function adduser(){
			$data = array( 
				'menu'=>array(
					BASE_URL=>'voltar'
				)
			);
			$data['user'] = $this->user->checkLogin();

			//verificar se existe alguma matricula igual ok
			//cadastrar usuario ok 
			//verificar se cadastrou usuario fazendo uma checagem ok 
			$newUser = new Users();
			if (!empty($_POST['name']) && isset($_POST['name'])) {
				$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
				$user_number = filter_input(INPUT_POST, 'user_number', FILTER_DEFAULT);
				$user_pass = filter_input(INPUT_POST, 'user_pass', FILTER_DEFAULT);
				$user_pass = md5($user_pass);

				if($newUser->checkMat($user_number) == false){
					$newUser->addUser($name, $user_number, $user_pass);			
					if($newUser->checkMat($user_number)){
						header("Location:" .BASE_URL);
						exit;
					}else{
						$data['msg'] = 'Digite os campos corretamente.';
					}
				}else{
					$data['msg'] = 'Ja existe um funcionário com essa mátricula.';
				}
			}			
			$this->loadTemplate('adduser', $data);
		}
		public function profile(){
			$data = array( 
				'menu'=>array(
					BASE_URL=>'voltar'
				)
			);
			$data['user'] = $this->user->checkLogin();

			
			$this->loadTemplate('profile', $data);
		}
	}

?>