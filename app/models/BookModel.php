<?php

class BookModel { 
    public function __construct()
    {   
        require_once '../app/db.php';

        $this->db = new PDO(DB_DSN, DB_USER, DB_PWD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
    }

    public $timestamps = ['created_at', 'updated_at'];

    protected $fillable = ['voornaam', 'achternaam', 'adres', 'email',  'datum'];
    
    public function addBooking($voornaam, $achternaam, $adres, $email, $datum)
    {   $datum = strtotime($datum);
        $datum = date('Y-m-d H:i:s', $datum);
        $query =  "INSERT INTO `booking` (`voornaam`, `achternaam`, `adres`, `email`, `datum`)
                    VALUES ('$voornaam', '$achternaam', '$adres', '$email', '$datum')";
    $sth = $this->db->prepare($query);
    $sth->execute([
        $voornaam,
        $achternaam,
        $adres,
        $email,
        $datum,
    ]);
        if ($result = $this->db->query($query))
        {
            return true;
        } else
            die($this->db->error);
    }

}
