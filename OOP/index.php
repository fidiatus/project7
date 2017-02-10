<?php

require_once "database/Connection.php";
require_once "database/QueryBuilder.php";
require_once "config/database.php";

$connection = Connection::make($config);

$db = new QueryBuilder($connection);

// $mahasiswa = $db->select('mahasiswa');

// foreach ($mahasiswa as $mhs) {
//     echo $mhs->nim.'</br>';
//     echo $mhs->nama.'</br>';
//     echo $mhs->kelas.'</br>';
//     echo $mhs->prodi.'</br>';
//     echo $mhs->jurusan.'</br>';
//     echo "</br>";
// }


$db->insert('mahasiswa', [
        'nim' => '140111',
        'nama' => 'Aditya',
        'kelas' => '3A',
        'prodi' => 'MI',
        'jurusan' => 'TI'
    ]);