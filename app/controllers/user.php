<?php
require_once '../app/core/Controller.php';


class User extends Controller {
    
    private $user;

    public function __construct()
    {
       $this->user = $this->model('UserModel');
       $this->userModel = new userModel();
    }

    public function index  () {

    }
    public function createUser ($firstname = '', $lastname = '', $email= '', $password = '') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->userModel->addUser($firstname, $lastname, $email, $password);
    }
    


}