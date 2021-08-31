<?php
namespace App\Controller;
require __DIR__ . '/../../config/config.php';
use App\Repository\StudentRepository;

// TODO: How do you think is it good to create the PDO object every time, or you can just create it inside constructor and assign as class property?
// TODO: Write 'use PDO' isn't good because PDO is already in global namespace


/**
 * Class StudentController
 * @package App\Controller
 */
class StudentController // TODO: This class
{
    /**
     * @var StudentRepository
     */
    private StudentRepository $repository;

    /**
     * StudentController constructor
     */
    public function __construct()
    {
        require __DIR__ . '/../../config/config.php';
        if (isset($PDO)) {
            $this->repository = new StudentRepository(new \PDO("mysql:host=" . $PDO['host'] . ";dbname=" . $PDO['dbname']
                . ";charset=utf8", $PDO['user'],  $PDO['password']));
        }
    }

    /**
     *
     */
    public function showStudents()
    {
        $students = $this->repository->find();
        var_dump($students);

        require __DIR__ . '/../View/showStudents.html';
    }

    /**
     *
     */
    public function remove()
    {
        echo 'remove page';
    }

    /**
     *
     */
    public
    function edit()
    {
        echo 'edit page';
    }

    /**
     *
     */
    public
    function signIn()
    {
        // TODO: it's good idea to create the independent controller for authorization

        # some code goes here and make brrhrhrr
    }
}