<?php


namespace App\Repository;


class StudentRepository
{
    public function create(Student $student) {
        $connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8','root', '');

        $students = $connection->query('SELECT * FROM students');


        
    }
}