<?php  
// inport koneksi
include_once("config.php");

// queri mengambil semua data di tabel user
$result = mysqli_query( $mysqli, "select * from user");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas Perdana Web</title>
</head>
<body>
	<a href="tambah.php">Tambah User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Username</th> <th>Password</th> <th>Email</th> <th>Action</th>
    </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['username']."</td>";
        echo "<td>".$data['password']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td><a href='edit.php?id=$data[username]'>Edit</a> | <a href='hapus.php?id=$data[username]'>Delete</a></td></tr>";  
    }
    ?>
    </table>

</body>
</html>