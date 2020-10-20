<?php


class OptredenModel { 
    public function __construct()
    {   
        require_once '../app/db.php';

        $this->db = new PDO(DB_DSN, DB_USER, DB_PWD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        
    }

    public $timestamps = ['created_at', 'updated_at'];

    protected $fillable = ['title', 'text', 'location', 'date', 'user_id'];

    public function addOptreden($title, $text, $location, $date, $user_id)
    {
        $query =  "INSERT INTO `optredens` (`title`, `text`, `location`, `date`, `user_id`)
                    VALUES ('$title', '$text', '$location', '$date', '$user_id')";
    $sth = $this->db->prepare($query);
    $sth->execute([
        $title,
        $text,
        $date,
        $date,
        $user_id
    ]);
        if ($result = $this->db->query($query))
        {
            return true;
        } else
            die($this->db->error);
    }



    public function findAllOptredens()
    {
        $optredens = array();
        $query = "SELECT * FROM `optredens` ";
        $sth = $this->db->prepare($query);

        $result = $this->db->query($query);
        if ($result)
        {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $optredens[] = array(
                    'id' => $row['id'],
                    'title' => $row['title'],
                    'text' => $row['text'],
                    'location' => $row['location'],
                    'date' => $row['date'],
                    'user_id' => $row['user_id'],
                );
            }
        } else
            echo($this->db->error);

        return $optredens;
    }


    public function findOptredenById($id)
    {
        $optreden = array();
        $query = "SELECT * FROM optredens LEFT JOIN users ON user_id = users.id RIGHT JOIN optreden_category on optreden_id = category_id WHERE optredens.id = '$id'";

        $result = $this->db->query($query);
        if ($result = $this->db->query($query))
        {
            $row = $result->fetch_assoc();
            $post = array(
                'id' => $row['id'],
                'title' => $row['title'],
                'text' => $row['text'],

            );

            $result->close();
        } else
            die($this->db->error);
        return $post;
    }

    public function findCategoryById ($id) {
        $category ='';
        $query = "SELECT description FROM categories WHERE categories.id = '$id";
        $result = $this->db->query($query);
        return $result;
    }
}