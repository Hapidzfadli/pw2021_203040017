<?php

$conn = mysqli_connect('localhost', 'root', '', 'pw_tubes_203040017');

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

function titleBarang($title)
{
    $kalimat = $title;
    $jumlahkarakter = 20;
    $cetak = substr($kalimat, $jumlahkarakter, 1);
    if ($cetak != " ") {
        while ($cetak != " ") {
            $i = 1;
            $jumlahkarakter = $jumlahkarakter + $i;
            $kalimat = $title;
            $cetak = substr($kalimat, $jumlahkarakter, 1);
        }
    }
    $cetak = substr($kalimat, 0, $jumlahkarakter);
    return "$cetak ...";
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

//fungsi untuk menambahkan data ke dalam database
function tambah($data)
{
    global $conn;
    $name = htmlspecialchars($data['name']);
    $category = htmlspecialchars($data['category']);
    $location = htmlspecialchars($data['location']);
    $username = htmlspecialchars($data['username']);
    $price = htmlspecialchars($data['price']);
    $picture = htmlspecialchars($data['picture']);
    $description = htmlspecialchars($data['description']);
    $description = str_replace("\n", '&nbsp;&lt;br&gt;', $description);
    $created = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");
    $updated = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");

    $query = "INSERT INTO toko_item
    VALUES ('', '$name', '$category', '$price', '$picture', '$description', '$created', '$updated', '$location', '$username')";

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
    $location = htmlspecialchars($data['location']);
    $username = htmlspecialchars($data['username']);

    $updated = mysqli_query($conn, "UPDATE toko_item SET date = GETDATE() ");

    $query = "UPDATE `toko_item` SET `id`='$id',`name`='$name',`category`='$category',`price`='$price',`img_cover`='$picture',`description`='$description',`updated`='$updated',`location`='$location',`username`='$username' WHERE id = $id
    ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
