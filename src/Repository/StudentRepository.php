<?php


namespace App\Repository;

use PDO;


class StudentRepository
{
    public function create(\App\Model\Student $student)
    {
        $connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = 'INSERT INTO students (name, surname, gender, age, groupnumber, mail, score, dob, islocal, id) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
//                                        values (:name, :surname, :gender, :age, :groupNumber, :mail, :score, :dob, :islocal, :id)";

        $STH = $connection->prepare($statement);
        var_dump((array)$student); /*TODO modify array keys*/
        $STH->execute($student);

        // $STH->execute((array)$student);
    }
}
