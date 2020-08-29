<?php

namespace App\Controller;

class StudentController
{

    public function all() {
        $connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8','root', '');

        foreach($connection->query('SELECT * FROM students')as $row) {
            echo $row['id'] . ' ' . $row['name'];
        }
    }
}