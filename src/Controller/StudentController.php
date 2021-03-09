<?php

namespace App\Controller;

// TODO: How do you think is it good to create the PDO object every time, or you can just create it inside constructor and assign as class property?
// TODO: Where's code blocks? Generate for all code
// TODO: Write 'use PDO' isn't good because PDO is already in global namespace

use App\Repository\StudentRepository;

class StudentController
{
    private $studentRepository;

    public function __construct()
    {
        $this->studentRepository = new StudentRepository();
    }

    public function showStudents()
    {

        $students = $this->studentRepository->find();
        var_dump($students);
        // TODO: Check what's the difference between include, require and include once, require_once and what should you use here?

        include __DIR__ . '/../View/showStudents.html';
    }


    public function remove()
    {
        echo 'remove page';
    }

    public function edit()
    {
        echo 'edit page';
    }

    public function signIn()
    {
       // TODO: it's good idea to create the independent controller for authorization
        
        # some code goes here and make brrhrhrr
    }
}