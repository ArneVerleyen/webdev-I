<?php


class UserModel { 
    public function __construct()
    {   
        require_once '../app/db.php';

        $this->db = new PDO(DB_DSN, DB_USER, DB_PWD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
    }

    public $timestamps = ['created_at', 'updated_at'];

    protected $fillable = ['firstname', 'lastname', 'email', 'password'];

    public function addUser($firstname, $lastname, $email, $password)
    {
        $query =  "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`)
                    VALUES ('$firstname', '$lastname', '$email', '$password')";
    $sth = $this->db->prepare($query);
    $sth->execute([
        $firstname,
        $lastname,
        $email,
        $password
    ]);
        if ($result = $this->db->query($query))
        {
            return true;
        } else
            die($this->db->error);
    }
   
}