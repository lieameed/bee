<?php

namespace App\Controllers;

use App\core\Controller;
use App\Models\Student;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

class StudentController extends Controller
{

    public function index()
    {
        $student = new Student();
        $students = $student->getStudents();
        $this->view('students.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        $this->view('students.create');
    }

    public function show(string $id)
    {
        $this->view('students.show');
    }

    public function edit(string $id)
    {
        $this->view('students.edit');
    }

}
