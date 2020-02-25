<?php

include __DIR__ . '/../models/User.php';
include __DIR__ . '/../main/Controller.php';


class UsersController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function register()
    {
        $this->user->registration();
        return $this->view('users/register');
    }

    public function login()
    {
        return $this->view('users/login');
    }

    public function checkLogin()
    {
        $result = $this->user->login();

        if ($result) {
            return $this->view('tasks/index', $this->all('tasks'), $this->all('users'));
        } else {
            return $this->view('users/login');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: http://todolist.test/tasks/index');
    }

}