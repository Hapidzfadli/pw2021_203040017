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
    $description = str_replace("\n", '&nbsp;&lt;br&gt;', $description);
    $created = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");
    $updated = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");

    $query = "INSERT INTO toko_item
    VALUES ('', '$name', '$category', '$price', '$picture', '$description', '$created', '$updated')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM toko_item WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = htmlspecialchars($data['id']);
    $name = htmlspecialchars($data['name']);
    $category = htmlspecialchars($data['category']);
    $price = htmlspecialchars($data['price']);
    $picture = htmlspecialchars($data['picture']);
    $description = htmlspecialchars($data['description']);

    $updated = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");

    $query = "UPDATE `toko_item` SET `id`='$id',`name`='$name',`category`='$category',`price`='$price',`picture`='$picture',`description`='$description',`updated`='$updated' WHERE id = $id
    ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;
    $firstname = htmlspecialchars(strtolower(stripslashes($data["firstname"])));
    $lastname = htmlspecialchars(strtolower(stripslashes($data["lastname"])));
    $email = htmlspecialchars(strtolower(stripslashes($data["email"])));
    $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('username sudah di pakai');
            </script>
        ";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$firstname', '$lastname', '$email')");

    return mysqli_affected_rows($conn);
}
