<?php
$sever= mysqli_connect("localhost","root","","latihan_xpplg");

if($sever){
    echo "selamat anda berasil".'</br>';
}else{
    echo "anda gagal";
}
$sql = "insert into profil_siswa(nama,nis,alamat,lahir,umur,sekolah,rombel)values('fadly','12209165','cigombong','2007/04/18','15','wikrama', 'pplgx4')";
if (mysqli_query($sever, $sql)) {
    echo "berasil yaaaa......";
}else{
    echo "anda gagal";
}
?>