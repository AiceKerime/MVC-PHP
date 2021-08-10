<?php 

class Siswa_model{
    // private $mhs = [
    //     [
    //        "nama" => "Rafi Izzaturohman",
    //        "kelas" => "XII",
    //        "jurusan" => "Rekayasa Perangkat Lunak",
    //        "email" => "rfizza1405@gmail.com" 
    //     ],
    //     [
    //        "nama" => "Mahesa Athur Thursena",
    //        "kelas" => "XII",
    //        "jurusan" => "Teknik Komputer dan Jaringan",
    //        "email" => "mahesa22@gmail.com " 
    //     ],
    //     [
    //        "nama" => "Fitri Nuraeni",
    //        "kelas" => "XII",
    //        "jurusan" => "Akomodasi Perhotelan",
    //        "email" => "fnuraeni28@gmail.com" 
    //     ]
    // ];


    public function getAllsiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}