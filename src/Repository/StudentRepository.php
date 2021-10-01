<?php

namespace App\Repository;

use PDO;
use PDOStatement;


/**
 * Class StudentRepository
 * @package App\Repository
 */
class StudentRepository
{
    /**
     * @var PDO
     */
    private PDO $pdo;

    /**
     * StudentRepository constructor.
     *
     */
    public function __construct(PDO $pdo)// TODO: check this
    {
        /* if (!empty($pdo)) {
             $this->pdo = new PDO('mysql:host=localhost;dbname=students_list;charset=utf8', 'root', '');
         }*/
        $this->pdo = $pdo;
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @param Student $student
     * @return string
     */
    public function addStudent(Student $student): string
    {
        $query = $this->pdo->prepare("INSERT INTO students_list (name, surname, gender, age, groupnumber, mail, score, dob, islocal) 
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
        return $this->pdo->lastInsertId();
    }

    /**
     * @param string $search
     * @return mixed
     */
    public function find(string $search = null): mixed
    {
        echo 'find func';
        if ($search == null) {
            $query = $this->pdo->prepare(
                "SELECT * FROM students_list"
            ); //TODO:Check connection to db

        } else {
            $query = $this->pdo->prepare(
                "SELECT * FROM students_list 
            WHERE name LIKE ':search'
            OR surname LIKE ':search'
            OR groupnumber LIKE ':search'
            OR dob LIKE ':search:'"
            );
            $query->bindValue(':search', $search);
        }


       /* $query->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            "App\Model\Student");*/
   //   $query->execute();

       $tmp = $query->fetch();
        var_dump($tmp);

        return $tmp;
    }
    /**
     * @param string $sessionId
     * @return bool | PDOStatement
     */
    /*public function getSessionEncoded(string $sessionId): bool|PDOStatement
    {
        $sessionEncoded = $this->pdo->prepare("
        SELECT session
        FROM students
        WHERE sessionId = :sessionId
        ");
        $this->pdo->bindValue(':sessionId', $sessionId);
        $this->pdo->execute();

        return $sessionEncoded;
    }*/

    /**
     * @return PDO
     */
    public
    function getPdo(): PDO
    {
        return $this->pdo;
    }
}
