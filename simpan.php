<?php
$conn = new mysqli("localhost","root","","ticket");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$FN=$_POST['FN'];
$LN=$_POST['LN'];
$CN=$FN.' '.$LN;
$email=$_POST['email'];
$ticket=$_POST['ticket'];
$sql="INSERT INTO ticket (fn,ln,email,ticket) values ('$FN','$LN','$email','$ticket')"; 
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Input Berhasil, $CN ')</script>";
    header('location: ticket.php');
} else {
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "')</script>";
    echo "alert('MOHON LAKUKAN REGISTRASI ULANG')";
}
?>