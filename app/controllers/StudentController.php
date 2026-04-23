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
        $id = intval($id);

        $studentModel = new Student();
        $student = $studentModel->getStudent($id);

        $this->view('students.show', [
            'student' => $student
        ]);
        $this->view('students.show');
    }

    public function edit(string $id)
    {
        $id = intval($id);

        $studentModel = new Student();
        $student = $studentModel->getStudent($id);


        $this -> view('students.edit', [
            'student' => $student
        ]);
    }

    public function store()
    {
        $studentModel = new Student();
        $studentModel -> insert($_POST);
        
    }

    public function update(string $id)
    {
        $id = intval($id);
        $studentModel = new Student();
        $studentModel -> update($_POST, $id );
    }

    public function destroy(string $id)
    {
        $id = intval($id);
        $studentModel = new Student();
        $studentModel -> delete($id);

    }
}