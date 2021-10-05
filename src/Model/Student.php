<?php

namespace App\Model;

// TODO: GENERATE PHPDOC BLOCKS, USE TYPE HINTING, REMEMBER PSR's

/**
 * Class Student
 * @package App\Model
 */
class Student
{
    /**
     * @var int
     */
    private int $StudentId;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $surname;
    /**
     * @var string
     */
    private string $gender;
    /**
     * @var int
     */
    private int $age;
    /**
     * @var string
     */
    private string $groupnumber;
    /**
     * @var string
     */
    private string $mail;
    /**
     * @var int
     */
    private int $score;
    /**
     * @var string
     */
    private string $dob;
    /**
     * @var bool
     */
    private bool $islocal;


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
        if (isset($argc)) {
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
     * @return int
     */
    public function getStudentId(): int
    {
        return $this->StudentId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getGroupnumber(): string
    {
        return $this->groupnumber;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @return bool
     */
    public function getIslocal(): bool
    {
        return $this->islocal;
    }


}