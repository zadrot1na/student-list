<?php


namespace App\Repository;

use PDO;


class StudentRepository
{
    public function create(\App\Model\Student $student)
    {
        $connection = new \PDO('mysql:host=localhost;dbname=studentsdb;charset=utf8', 'root', '');
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $STH = $connection->prepare("INSERT INTO students (name, surname, gender, age, groupnumber, mail, score, dob, islocal) 
                         values (:name, :surname, :gender, :age, :groupnumber, :mail, :score, :dob, :islocal)");

        $name = $student->getName();
        $surname = $student->getSurname();
        $gender = $student->getGender();
        $age = $student->getAge();
        $groupnumber = $student->getGroupnumber();
        $mail = $student->getMail();
        $score = $student->getScore();
        $dob = $student->getDob();
        $islocal = $student->getIslocal();

        $STH->bindParam('name', $name);
        $STH->bindParam('surname', $surname);
        $STH->bindParam('gender',$gender);
        $STH->bindParam('age', $age);
        $STH->bindParam('groupnumber',$groupnumber);
        $STH->bindParam('mail', $mail);
        $STH->bindParam('score',$score);
        $STH->bindParam('dob',$dob);
        $STH->bindParam('islocal',$islocal);

        $STH->execute();
    }
}
