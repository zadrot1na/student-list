<?php

namespace App\Controller;

class StudentController
{

    public function all() {
        $connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8','root', '');

        $students = $connection->query('SELECT * FROM students');


       /* foreach($students as $row) {
            echo $row['id'] . ' ' . $row['name'];
        }*/

        include __DIR__ . '/../../View/showStudents.php';
    }
}