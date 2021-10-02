<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllStudents()
    {
        $sql = "SELECT s.id, s.name, c.name as school 
                FROM student s
                join school c on c.id = s.school_id";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getAllStudentsForSchool($schoolName)
    {
        $finalResultQuery = "";
        if($schoolName == 'csm'){
            $finalResultQuery = "case when AVG(g.grade) >= 7 then 'Pass' else 'Fail' end as final_result";
        }
        else {
            $finalResultQuery = "case when MAX(g.grade) > 0 then 'Pass' else 'Fail' end as final_result";
        }
        $sql = "SELECT s.id, s.name, 
                    AVG(g.grade) as avg_grade, 
                    GROUP_CONCAT( g.grade SEPARATOR ',') grade_list,
                    $finalResultQuery
                FROM student s
                join school c on c.id = s.school_id
                join grade g on g.student_id = s.id
                where c.name = '$schoolName'
                GROUP BY s.id, s.name";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getStudentDetails($studentId)
    {
        $sql = "SELECT s.id, s.name, GROUP_CONCAT( g.grade SEPARATOR ',') grade_list
                FROM `student` s
                join grade g on g.student_id = s.id
                where s.id = '$studentId'";
        $query = $this->db->prepare($sql);
        $query->execute();

        $data = $query->fetchAll();

        //$data = json_decode(json_encode($data), true);

        return $data;
    }
}
