<?php
require_once '../app/core/Controller.php';
class Admin extends Controller {
    public function index() {
        $this->view('admin/backoffice');
    }

    public function optredenLijst() {
        $this->view('admin/optreden/optredenLijst');
    }

    public function optredenDetail() {
        $this->view('admin/optreden/optredenDetail');
    }

    public function bookLijst() {
        $this->view('admin/booking/bookLijst');
    }

    public function bookDetail() {
        $this->view('admin/booking/bookDetail');
    }

    public function userLijst() {
        $this->view('admin/users/userLijst');
    }

    public function userDetail() {
        $this->view('admin/users/userDetail');
    }



}