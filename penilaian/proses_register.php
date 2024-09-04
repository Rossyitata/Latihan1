<?php 
    if($_SERVER["REQUEST_METHOD"] == "[POST"){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $jenis_kelamin=$_POST['jenis_kelamin'];
        $no_tlp=$_POST['no_tlp'];
        $jabatan=$_POST['jabatan'];

        if(empty($id)){
            echo "<script>alert('id tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($nik)){
            echo "<script>alert('NIK tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($alamat)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($jenis_kelamin)){
            echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($no_tlp)){
            echo "<script>alert('nomor telepon tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($jabatan)){
            echo "<script>alert('jabatan tidak boleh kosong');location.href='register.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from siswa where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_siswa']=$dt_login['id_siswa'];
                $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
                $_SESSION['status_login']=true;
                header("location: home.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>

