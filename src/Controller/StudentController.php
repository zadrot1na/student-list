<?php

namespace App\Controller;

use App\Model\Student;
use App\Repository\StudentRepository;
use PDO;

class StudentController
{
    public function showStudents()
    {
        $connection = new PDO('mysql:host=mysql;dbname=students;charset=utf8',
            'root', 'symfony');

        $students = $connection->query('SELECT * FROM `students`');

        include __DIR__ . '/../View/showStudents.html';
    }

    public function registerTemplate()
    {
        include __DIR__ . '/../View/register.html';
    }

    public function registerHandler()
    {
        echo "register handler\n";

        $temp = [
            $_POST['InputName'],
            $_POST['InputSurname'],
            $_POST['gender'],
            $_POST['InputAge'],
            $_POST['InputGroupNumber'],
            $_POST['InputMail'],
            $_POST['InputScore'],
            $_POST['InputDob'],
            $_POST['IsLocalCheck']
        ];

        foreach ($temp as $value) {
            $value = trim($value);
        }

        $student = new Student(
            $temp[0],
            $temp[1],
            $temp[2],
            $temp[3],
            $temp[4],
            $temp[5],
            $temp[6],
            $temp[7],
            $temp[8]
        );
        $repos = new StudentRepository();
        echo $repos->addStudent($student) . "registration successful\n";
    }

//    public function create()
//    {
//        echo 'regiser page';
//
//
//        die();
//        $student = new Student('john', 'miller', 'male', 15, 17, 'john@mail.com', 175, 2000, false);
//
//        if ($_SERVER['REQUEST_METHOD'] == 'POST')
//            echo 'NOW ITS POST';
//        else
//            include __DIR__ . '/../View/register.html';
//
//
//        $StudentGateway = new StudentRepository();
//        $StudentGateway->addStudent($student);
//    }

    public function remove()
    {
        echo 'remove page';
    }

    public function edit()
    {
        echo 'edit page';
    }
}