<?php

require_once 'database/connection.php';

class peminjam
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->conn;
    }

    public function tambah(
        $nama_lengkap,
        $username,
        $password
    ) {

        $var_nama_lengkap = mysqli_real_escape_string(
            $this->conn,
            $nama_lengkap
        );
        $var_username = mysqli_real_escape_string(
            $this->conn,
            $username
        );
        $var_password = mysqli_real_escape_string(
            $this->conn,
            $password
        );


        $query = "INSERT INTO peminjam
                  (nama_lengkap, username, password)
                  VALUES (
                  '$var_nama_lengkap',
                  '$var_username',
                  '$var_password'
                  )";

        return mysqli_query($this->conn, $query);
    }
}