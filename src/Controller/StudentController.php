<?php

namespace App\Controller;

use App\Model\Student;
use App\Repository\StudentRepository;
use PDO;

class StudentController
{

    public function all() {
        $connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8','root', '');

        $students = $connection->query('SELECT * FROM students');

        include __DIR__ . '/../../View/showStudents.php';
    }

    public function create() {
        //$connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8','root', '');

        require_once __DIR__ . '/../Repository/StudentRepository.php';

        $Student = new Student('john','miller','male',15,17,'john@mail.com',175,2000,false,2);

        $StudentGateway = new StudentRepository();
        $StudentGateway->create($Student);
    }
}