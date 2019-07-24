<?php
// manggil seluruh package di vendor
require_once 'vendor/autoload.php';
require_once 'config.php';

$faker = Faker\Factory::create('id_ID');

// perulangan sampai seribu kali
for ($i=0; $i<50; $i++){
    // insert data ke database
    $sql = "INSERT INTO pelanggan (nama_pelanggan, alamat, username, password) 
VALUES ('".$faker->name."','".$faker->address."','".$faker->email."','');";

    if ($conn->query($sql) === TRUE) {
        echo "=";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

echo "semua data berhasil disimpan";

$conn->close();