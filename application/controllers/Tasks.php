<?php

class Tasks extends CI_Controller {

    public function index()
    {
        $page = 'tasks';
        $data['title'] = ucfirst($page);
        view_loader($page);
    }
    public function insert()
    {
        session_start();
        $userId = $_SESSION['id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $description = $_POST['description'];
            $date = $_POST['date'];
            $task = $this->task_model->inser_task($description, $date, $userId);
            header("location:index");
        }
    }

    public function show_tasks()
    {
        session_start();
        $userId = $_SESSION['id'];
        $tasks = $this->task_model->get_user_tasks_of_today($userId);
        foreach ($tasks as $task) {
            echo $task['content']."<br>";
        }
    }

}