<?php
include __DIR__ . '/../main/Method.php';

class User extends Method
{
    public $is_admin = 1;

    public function registration()
    {
        if (isset($_POST['register'])) {
            $user_name = $_POST['username'];
            $password = $_POST['password'];

            if (!empty($user_name && $password)) {
                $register = new Database();
                $register->register('users', $user_name, $password);

                $query = mysqli_query($this->conn, "select * from  users where  name = '$user_name' and password = '$password'");
                $result = mysqli_fetch_array($query);

                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['auth'] = $result['id'];

                header('Location: http://todolist.test/tasks/index');
            } else {
                $_SESSION['register_error'] = 'Fill all fields, please!';
            }
        }
    }

    public function login()
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if (empty($user_name) || empty($password)) {
            $_SESSION['login_error'] = 'Fill all fields, please!';
        } else {
            $query = mysqli_query($this->conn, "select * from  users where  name = '$user_name' and password = '$password'");
            $result = mysqli_fetch_array($query);

            if ($result == null) {
                $_SESSION['login_error'] = 'Wrong login or/and password. Try again!';
            } else {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['auth'] = $result['id'];
                return $result;
            }
        }
    }


    public function isAdmin()
    {
        if (isset($_SESSION['auth'])) {
            $query = mysqli_query($this->conn, "select * from  users WHERE id = " . $_SESSION['auth'] . " and role = $this->is_admin");
            $result = mysqli_fetch_array($query);
            return $result ? true : false;
        } else {
            return false;
        }
    }

    public function authUser()
    {
        if (isset($_SESSION['auth'])) {
            $query = mysqli_query($this->conn, "select * from  users WHERE id = " . $_SESSION['auth']);
            $result = mysqli_fetch_array($query);
            return $result;
        } else {
            return false;
        }
    }

}
