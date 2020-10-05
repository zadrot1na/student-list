<?php
/**
 * TODO:Where's all PHPDoc blocks? Where's type hinting for primitive class properties?
 * TODO:Did you even read PSR-* standards?
 * TODO:Where cameCase style of naming?
 * TODO:Also add type hinting for class's methods.
 */

namespace App\Repository;

# TODO: WTF is that? Couldn't you just write "\PDO()"?
use PDO;


class StudentRepository
{
    // TODO: How do you think should create method return some data?
    // For example, maybe it would be nice to return the id of inserted row?
    // Or even better, it can return saved Student object with seated id
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
