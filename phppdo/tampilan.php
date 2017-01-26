    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "data_siswa";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    $query = $pdo->prepare("select * from data_siswa");
    $query->execute();
       header("location: index.php");
    ?>
    <table>
    <tr>
    	<td>nama</td>
    	<td>jurusan</td>
    	<td>Jenis Kelamin</td>
    	<td>TGL Lahir</td>
    </tr>
    <?php while($siswa = $query->fetch()){?>
    <tr>
    	<td><?php echo $siswa['nama']?></td>
    	<td><?php echo $siswa['jurusan']?></td>
    	<td><?php echo $siswa['jenis_kelamin']?></td>
    	<td><?php echo $siswa['tgl_lahir']?></td>
    </tr>
    <?php }?>
    </table>