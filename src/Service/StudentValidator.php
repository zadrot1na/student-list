<?php

// TODO: You shouldn't touch it for now, but read about Middleware's

use App\Model\Student;

class StudentValidator {

    public function __construct()
    {
        // studentvalidator constructor here
    }

    public function validate()
    {
        // here must be validation logic

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (1)
                $values['name'] = array_key_exists('InputName', $_POST) ? strval($_POST['InputName']) : '';
            $values['surname'] = array_key_exists('InputSurname', $_POST) ? strval($_POST['InputSurname']) : '';
        }

    }
}