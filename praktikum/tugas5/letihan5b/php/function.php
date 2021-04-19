<?php
// melakukan koneksi kedalam database
$conn = mysqli_connect('localhost', 'root', '', 'pw_tubes_203040017');

//function untuk melakukan query dan memasukanya kedalam array

function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambahkan data ke dalam database
function tambah($data)
{
    global $conn;
    $name = htmlspecialchars($data['name']);
    $category = htmlspecialchars($data['category']);
    $price = htmlspecialchars($data['price']);
    $picture = htmlspecialchars($data['picture']);
    $description = htmlspecialchars($data['description']);
    $created = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");
    $updated = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");

    $query = "INSERT INTO toko_item
    VALUES ('', '$name', '$category', '$price', '$picture', '$description', '$created', '$updated')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
