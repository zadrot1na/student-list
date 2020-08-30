<?php


namespace App\Repository;


class TableDataGateway
{
    public function create(/* class student */) {
        $connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8','root', '');

        $students = $connection->query('SELECT * FROM students');

    }
}