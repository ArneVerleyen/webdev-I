<?php


class Optreden_CategoryModel { 

    public function __construct()
    {   
        require_once '../app/db.php';

        $this->db = new PDO(DB_DSN, DB_USER, DB_PWD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
    }


    public $timestamps = ['created_at', 'updated_at'];

    protected $fillable = ['optreden_id', 'category_id'];

}