<?php 

// koneksi ke database
$db = mysqli_connect("localhost", "root", "","phpdasar");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

 function tambah($data){
    //Ambil data dari elemen dalam form
    global $db;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar){
        return false;
    }


    //Query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp','$nama','$email','$jurusan','$gambar')
                ";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);

 }

 function upload(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload
    if( $error === 4 ){
        echo "
        <script>
            alert('Tambah gambar terlebihdahulu');
        </script>
        ";
        return false;
    }

    // cek apakah yang di upload adalah gambar

    $ektensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ektensiGambar = explode('.', $namaFile);
    $ektensiGambar = strtolower(end($ektensiGambar));
    if( !in_array($ektensiGambar, $ektensiGambarValid)){
        echo "
        <script>
            alert('Yang anda upload bukan gambar');
        </script>
        ";
        return false;
    }


    // cek jika ukuranya telalru besar
    if( $ukuranFile > 8000000){
        echo "
        <script>
            alert('Ukuran gambar terlalu besar');
        </script>
        ";
        return false;
    }

    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ektensiGambar;

    // lolos pengecekan , gambar siap di upload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;


 }

 

function hapus($id){
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($db);

}

function ubah($data){

    global $db;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    if( $_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET
            nrp = '$nrp',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'

        WHERE id = $id
    ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


function cari($keyword) {
    $query = "SELECT * FROM mahasiswa 
                WHERE
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR
            email LIKE '%$keyword%'";

            return query(($query));
}

?>
