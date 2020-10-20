<?php
require_once '../app/core/Controller.php';
class Optreden extends Controller {

    public function __construct()
    {
        $this->optreden = $this->model('OptredenModel');
       $this->optredenModel = new optredenModel();
    }

    public function index() {
        $optredens = $this->optredenModel->findAllOptredens();
        $data = $optredens;
        $this->view('home/optreden', $data);
    }
    public function createOptreden ($title = '', $text = '', $location= '', $date = '', $user_id ='') {
        $title = $_POST['title'];
        $text = $_POST['text'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $user_id = $_POST['user_id'];
        $this->optredenModel->addOptreden($title, $text , $location, $date , $user_id);
    }

    public function listOptredens () {
        $optredens = $this->optredenModel->findAllOptredens();
        $data = $optredens;
        $this->view('admin/optreden/optredenLijst', $data);
    }

    public function showOptreden()
    {
        // detailpagina van een post weergeven
    }

    public function update()
    {
        // aanpassen = zelfde template als maken maar data inladen via post id
    }

    public function delete()
    {
        // deleten van een post via Id
    }
}
