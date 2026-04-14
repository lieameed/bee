<?php

namespace App\Models;
require_once "../app/core/database.php";

use App\core\database;

class Student extends database
{

    protected $table = 'students';

    //Fungsi menampilkan daftar siswa
    public function getStudents()
    {
        $students = [];

        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }


        return $students;

    }
}



?>