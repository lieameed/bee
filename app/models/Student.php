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

    public function getStudent($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();

        $student = $result->fetch_assoc();

        return $student;
    }

    //Nambah siswa baru
    public function insert(array $data)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['kelas']);
        $phoneNumber = htmlspecialchars($data['no_telepon']);

        $query = "INSERT INTO {$this -> table} (name, nis, class, phone_number) VALUES (?, ?, ?, ?)";

        $stmt = $this -> connection-> prepare($query);
        $stmt->bind_param('ssss', $name, $nis, $class, $phoneNumber);
        $stmt -> execute();

        if($stmt -> affected_rows > 0){
            header('location: /students');
            exit;
        }else{
            echo "Error to store student";
        }

    }

}



?>