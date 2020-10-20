<?php


class CategoryModel  { 
    public function __construct()
    {   
        require_once '../app/db.php';

        $this->db = new PDO(DB_DSN, DB_USER, DB_PWD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
    }

    public $timestamps = ['created_at', 'updated_at'];

    protected $fillable = [
     'title',
     'description'
    ];

    public function addCategory($title, $description)
    {
        $query =  "INSERT INTO `categories` (`title`, `description`)
                    VALUES ('$title', '$description')";
    $sth = $this->db->prepare($query);
    $sth->execute([
        $title,
        $description,
    ]);
        if ($result = $this->db->query($query))
        {
            return true;
        } else
            die($this->db->error);
    }

}