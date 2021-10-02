<?php

class Home extends Controller
{

    public function index()
    {
        $students = $this->model->getAllStudents();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function students($studentId)
    {
        if (isset($studentId)) 
        {
            $student = $this->model->getStudentDetails($studentId);

            require APP . 'view/_templates/header.php';
            require APP . 'view/student.php';
            require APP . 'view/_templates/footer.php';
        }
    }
}
