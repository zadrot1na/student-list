<?php
namespace App\Controller;

use App\Model\Student;
use App\Repository\StudentRepository;

/**
 * Class AuthController
 * @package App\Controller
 */
class AuthController
{
    /**
     *
     */
    public function registerTemplate()
    {
        echo "registerTemplate";
        require __DIR__ . '/../View/register.html';
    }

    /**
     *
     */
    public function registerHandler()
    {
        echo "register handler\n";

        foreach ($_POST[Student] as $value) {
            $value = trim($value);
        }

        $student = new Student($_POST[Student]);
        $repos = new StudentRepository();
        echo $repos->addStudent($student) . "registration successful\n";
    }

    /**
     *
     */
    public function loginTemplate()
    {
        include __DIR__ . '/../View/login.html';
    }

    /**
     *
     */
    public function loginHandler()
    {

    }

    /**
     *
     */
    public function login()
    {

    }

    /**
     *
     */
    public function exit()
    {

    }
}