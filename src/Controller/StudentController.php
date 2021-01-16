<?php

namespace App\Controller;

// TODO: How do you think is it good to create the PDO object every time, or you can just create it inside constructor and assign as class property?
// TODO: Where's code blocks? Generate for all code
// TODO: Write 'use PDO' isn't good because PDO is already in global namespace

use App\Model\Student;
use App\Repository\StudentRepository;
use PDO;

class StudentController
{
    public function __construct() {
        // TODO: Implement constructor
    }

    public function showStudents()
    {
        $connection = new PDO('mysql:host=mysql;dbname=students;charset=utf8',
            'root', 'symfony');

        $students = $connection->query('SELECT * FROM `students`');
        // TODO: Check what's the difference between include, require and include once, require_once and what should you use here?

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

    // NOTICE: It's VERY BAD PRACTICE
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
        TODO: Actually it's good idea to create the independent controller for authorization
        
        # some code goes here and make brrhrhrr
    }
}