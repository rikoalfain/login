
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name ="data_siswa";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    try{
    	$query = $pdo->prepare("insert into siswa (nis,nama,jenis_kelamin,tgl_lahir) 
    		values (:nis,:nama, :jenis_kelamin,:tgl_lahir)");
    	$dataSiswa = array(
    		':nama' => 'riko',
    		':jurusan' => 'rpl',
    		':jenis_kelamin' => 'L',
    		':tgl_lahir' => '1987-06-01'
    	);
    	$query->execute($dataSiswa);
    	echo "Data siswa telah disimpan";
    }catch(PDOException $e){
    	echo "Error! gagal menyimpan data siswa:".$e->getMessage();  
    }