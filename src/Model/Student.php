<?php

namespace App\Model;

// TODO: GENERATE PHPDOC BLOCKS, USE TYPE HINTING, REMEMBER PSR's

/**
 * Class Student
 * @package App\Model
 */
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
     * @param array|null $argc
     */
    public function __construct(array $argc = null)
    {
        // TODO: Create and implement function parseConstructorArguments
        // TODO: Create a basic class called model where you'll move everything the same for all classes

        /**
         * You can accept that $argc will contain data in such format:
         * [
         *      'name' => 'Qumo',
         *      ...
         *      'mail' => 'qumo@gmail.com'
         * ]
         **/
        if (!isset($argc)) {
            $this->parseConstructorArguments($argc);
        }

    }

    /**
     * @param array $param
     */
    private function parseConstructorArguments(array $param)
    {
        $this->name = $param['name'];
        $this->surname = $param['surname'];
        $this->gender = $param['gender'];
        $this->age = $param['age'];
        $this->groupnumber = $param['groupnumber'];
        $this->mail = $param['mail'];
        $this->score = $param['score'];
        $this->dob = $param['dob'];
        $this->islocal = $param['islocal'];

    }

    /**
     * Load method.
     *
     * @param array $student
     */
    public function load(array $student)
    {
        foreach ($this as $value) {
            $value = $student["$this"];
        }
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