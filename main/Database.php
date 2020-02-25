<?php
include_once __DIR__ . '/MainController.php';


class Database extends MainController
{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $db = 'ella_db';
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function saveRecords($tbName, $tTitle, $tEmail, $tText, $user_id)
    {
        mysqli_query($this->conn, "insert into $tbName(title, email, text, user_id) values('" . $tTitle . "','" . $tEmail . "' ,'" . $tText . "','" . $user_id . "' )");
    }

    public function getAll($tbName)
    {
        $query = mysqli_query($this->conn, "select * from $tbName");
        $result = mysqli_fetch_all($query);
        return $result;
    }

    public function find($tbName, $t_id)
    {
        $query = mysqli_query($this->conn, "select * from $tbName where id = $t_id");
        $result = mysqli_fetch_array($query);
        return $result;
    }

    public function register($tbName, $uname, $upassword)
    {
        mysqli_query($this->conn, "insert into $tbName(name,password) values('" . $uname . "','" . $upassword . "')");
    }

    public function uptodate($tbName, $utitle, $umail, $utext, $edited, $u_id)
    {
        mysqli_query($this->conn, "UPDATE $tbName SET  title = '$utitle', email = '$umail', text = '$utext', edited = '1' WHERE id ='$u_id'");
    }

}

?>
