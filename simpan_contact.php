<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db   = "smartgo";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama  = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO contacts (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Pesan berhasil dikirim!'); window.location='contact.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
