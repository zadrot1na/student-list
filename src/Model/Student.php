<?php

namespace App\Model;

class Student
{
    private $name;
    private $surname;
    private $gender;
    private $age;
    private $groupNumber;
    private $mail;
    private $score;
    private $dob;
    private $isSocial;
    private $id;

    /**
     * Student constructor.
     * @param $name
     * @param $surname
     * @param $gender
     * @param $age
     * @param $groupNumber
     * @param $mail
     * @param $score
     * @param $dob
     * @param $isSocial
     * @param $id
     */
    public function __construct($name, $surname, $gender, $age, $groupNumber, $mail, $score, $dob, $isSocial, $id)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->age = $age;
        $this->groupNumber = $groupNumber;
        $this->mail = $mail;
        $this->score = $score;
        $this->dob = $dob;
        $this->isSocial = $isSocial;
        $this->id = $id;
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
    public function getGroupNumber()
    {
        return $this->groupNumber;
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
    public function getIsSocial()
    {
        return $this->isSocial;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }




}