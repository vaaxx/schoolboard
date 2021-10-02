<?php

class Csmb extends Controller
{
    public function index()
    {
        $schoolName = 'csmb';
        $schoolStudents = $this->model->getAllStudentsForSchool($schoolName);

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/school.php';
        require APP . 'view/_templates/footer.php';
    }
}
