<?php
include_once __DIR__ . '/../models/User.php';
include_once __DIR__ . '/../main/Method.php';


class Task extends Method
{
    //Save Inside Database
    public function save()
    {
        if (isset($_POST['add'])) {

            $title = $_POST['title'];
            $email = $_POST['email'];
            $text = $_POST['text'];

            if (!empty($title && $email && $text)) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                    $user = new User();
                    $user_id = $user->authUser()[0];

                    $tasks = new Database();
                    $tasks->saveRecords('tasks', $title, $email, $text, $user_id);

                    session_start();

                    $_SESSION['success'] = 'Your task has created successfully!' . '<a class="btn btn-success btn-xs" style="float: right;color: #F1F1F1" href="http://todolist.test/tasks/index">Ok</a>\'';
                    header('Location: http://todolist.test/tasks/index');
                } else {
                    $_SESSION['create_error'] = 'Write correct email!';
                    header('Location: http://todolist.test/tasks/create');
                }
            } else {
                $_SESSION['create_error'] = 'Fill all fields, please!';
                header('Location: http://todolist.test/tasks/create');
            }


        }
    }


    //Get all tasks
    public function all()
    {
        $tasks = new Database();
        $tasks->getAll('tasks');
    }

    //Update task
    public function update($id)
    {
        if (isset($_POST['update'])) {

            $newtitle = $_POST['title'];
            $newemail = $_POST['email'];
            $newtext = $_POST['text'];

            if (!empty($newtitle && $newemail && $newtext)) {
                $task = new Database();
                $task->uptodate('tasks', $newtitle, $newemail, $newtext, $edited, $id);
            }
        }
    }
}






