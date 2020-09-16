<?php

namespace App\Controller;

use App\Model\Student;
use App\Repository\StudentRepository;
use PDO;

class StudentController
{

    public function all()
    {
        $connection = new PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8', 'root', '');

        $students = $connection->query('SELECT * FROM `students`');

        include __DIR__ . '/../View/showStudents.html';
    }

    public function create()
    {
        echo 'func create';
        die();
        $student = new Student('john', 'miller', 'male', 15, 17, 'john@mail.com', 175, 2000, false);

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            echo 'NOW ITS POST';
        else
            include __DIR__ . '/../View/register.html';



        $StudentGateway = new StudentRepository();
        $StudentGateway->create($student);
    }
}