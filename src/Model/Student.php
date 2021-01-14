<?php

namespace App\Model;

class Student
{
    private $name;
    private $surname;
    private $gender;
    private $age;
    private $groupnumber;
    private $mail;
    private $score;
    private $dob;
    private $islocal;
    private $id;

    /**
     * Student constructor.
     *
     * @param array $student
     */
    public function __construct(array $student)
    {
        $this->name = $student['name'];
        $this->surname = $student['surname'];
        $this->gender = $student['gender'];
        $this->age = $student['age'];
        $this->groupnumber = $student['groupNumber'];
        $this->mail = $student['mail'];
        $this->score = $student['score'];
        $this->dob = $student['dob'];
        $this->islocal = $student['isLocal'];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getGroupnumber()
    {
        return $this->groupnumber;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @return mixed
     */
    public function getIslocal()
    {
        return $this->islocal;
    }


}