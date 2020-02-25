<?php
include_once __DIR__ . '/../main/Controller.php';

class TasksController extends Controller
{
    private $taskModel;

    public function __construct()
    {
        $this->taskModel = new Task();
    }

    public function index()
    {
        return $this->view('tasks/index', $this->all('tasks'));
    }

    public function show($id)
    {
        return $this->view('tasks/show', $this->one('tasks', $id));
    }

    public function create()
    {
        return $this->view('tasks/create');
    }

    public function save()
    {
        $this->taskModel->save();
    }

    public function edit($id)
    {
        $task = $this->taskModel->find('tasks', $id);
        return $this->view('tasks/edit', $task);
    }

    public function update($id)
    {
        $this->taskModel->update($id);
        header('Location: http://todolist.test/tasks/index');
    }
}
