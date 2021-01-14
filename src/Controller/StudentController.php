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

        foreach ($_POST[Student] as $value) {
            $value = trim($value);
        }

        $student = new Student($_POST[Student]);
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

    public function loginTemplate()
    {
        include __DIR__ . '/../View/login.html';
    }

    public function loginHandler()
    {

    }

    public function remove()
    {
        echo 'remove page';
    }

    public function edit()
    {
        echo 'edit page';
    }

    public function signIn()
    {

    }
}