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
