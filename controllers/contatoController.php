<?php
class contatoController extends Controller {

private $user;

public function __construct(){
    parent::__construct();

    $this->user = new Users();
 
       
    if (!$this->user->checkLogin()) {
        header("Location:".BASE_URL."login");
        exit;
    }
}

public function index(){
    $data = array( 
        'menu'=>array(
            BASE_URL=>'voltar'
        )
    );
    $data['user'] = $this->user->checkLogin();

    
    $this->loadTemplate('contato', $data);
    
}
}
?>