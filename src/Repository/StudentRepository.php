<?php
namespace App\Repository;

use PDO;

class StudentRepository
{
    private $pdo;

    public function __construct()
    {
        require __DIR__ . '/../../config/config.php';

        if (isset($PDO)) {
            $dsn = 'mysql:host=' . $PDO['host'] . ';dbname=' . $PDO['database'] . ';charset=utf8';
            $this->pdo = new PDO($dsn, $PDO['user'], $PDO['password']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        else {
            $this->pdo = new PDO('mysql:host=mysql;dbname=students;charset=utf8',
                'root', 'symfony');
        }
    }

    public function addStudent(\App\Model\Student $student)
    {
        $query = $this->pdo->prepare("INSERT INTO students (name, surname, gender, age, groupnumber, mail, score, dob, islocal) 
                         values (:name, :surname, :gender, :age, :groupnumber, :mail, :score, :dob, :islocal)");

        $query->bindValue('name', $student->getName());
        $query->bindValue('surname', $student->getSurname());
        $query->bindValue('gender', $student->getGender());
        $query->bindValue('age', $student->getAge());
        $query->bindValue('groupnumber', $student->getGroupnumber());
        $query->bindValue('mail', $student->getMail());
        $query->bindValue('score', $student->getScore());
        $query->bindValue('dob', $student->getDob());
        $query->bindValue('islocal', $student->getIslocal());
        $query->execute();
        //return $query->fetchColumn();
    }
}
