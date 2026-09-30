<?php

require_once __DIR__ . '../database/connection.php';

class Kendaraan
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function tambah(
        $id,
        $kategori,
        
    ) {
        $var_id = mysqli_real_escape_string(
            $this->conn,
            $id
        );

        $var_kategori = mysqli_real_escape_string(
            $this->conn,
            $kategori
        );

        $query = "INSERT INTO kategori 
                  (id, kategori)
                  VALUES (
                      '$var_id',
                      '$var_kategori';
                      
                  )";

        return mysqli_query($this->conn, $query);
    }
}