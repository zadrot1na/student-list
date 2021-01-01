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

    /**
     * Student constructor.
     * @param $name
     * @param $surname
     * @param $gender
     * @param $age
     * @param $groupnumber
     * @param $mail
     * @param $score
     * @param $dob
     * @param $islocal
     */
    public function __construct($name, $surname, $gender, $age, $groupnumber, $mail, $score, $dob, $islocal)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->age = $age;
        $this->groupnumber = $groupnumber;
        $this->mail = $mail;
        $this->score = $score;
        $this->dob = $dob;
        $this->islocal = $islocal;
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