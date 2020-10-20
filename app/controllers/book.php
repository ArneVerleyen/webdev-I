<?php
require_once '../app/core/Controller.php';


class Book extends Controller {
    public function __construct()
    {
       $this->book = $this->model('BookModel');
       $this->bookModel = new bookModel();
    }

    public function index() {
        $this->view('home/book');
    }

    public function createBook ($voornaam = '', $achternaam = '',  $adres = '', $email= '',  $datum = '')
    {   
        $voornaam = $_GET['voornaam'];
        $achternaam = $_GET['achternaam'];
        $adres = $_GET['adres'];
        $email = $_GET['email'];
        $datum = $_GET['datum'];
        $this->bookModel->addBooking($voornaam, $achternaam, $adres, $email, $datum);
        $this->view('home/book');
    }

    public function read()
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