<?php 
$sever= mysqli_connect("localhost","root","","latihan_xpplg");

if($sever){
    echo "selamat anda berasil".'</br>';
}else{
    echo "anda gagal";
}
echo "<h2>biodata siswa</h2>";
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$sekolah = $_POST['sekolah'];
$Rombel = $_POST['Rombel']; 
$Produktif = $_POST['Produktif'];
$matematika = $_POST['matematika'];
$b_sun = $_POST['b_sun'];
$b_indo = $_POST['b_indo'];
$b_ing = $_POST['b_ing'];
// $rata =($prod+$mtk+$sunda+$b_indo+$b_ing)/5;
// $nilai = [$prod,$pipas,$sunda+$b_indo+$b_ing];
//     $max = max($nilai);
//     $min = min($nilai);

  


// echo "Nama anda adalah : " . $nama;
// echo "<br/>";
// echo "Nis anda adalah : " . $nis;
// echo "<br/>";
// echo "tanggal lahir anda adalah : " . $tanggal;
// echo "<br/>";
// echo "alamat anda adalah : ". $alamat;
// echo "<br/>";
// echo "umur anda adalah : ". $umur;
// echo "<br/>";
// echo "sekolah anda adalah : ". $sekolah;
// echo "<br/>";
// echo "sekolah anda adalah : ". $Rombel;
// echo "<br/>";

// echo "<h2>hasil nilai</h2>";
// echo "<br/>";
// echo "nilai produktif anda adalah : ".$prod;
// echo "<br/>";
// echo "nilai mtk anda adalah : ".$mtk;
// echo "<br/>";
// echo "nilai basa sunda anda adalah : ".$sunda;
// echo "<br/>";
// echo "rata rata anda adalah : ".$rata;
// echo "<br/>";
// echo "Nilai Max anda adalah : ".$max;
// echo "<br/>";
// echo "NIlai Min anda adalah : ".$min;
$sql = "insert into profil_siswa(nama,nis,alamat,lahir,umur,sekolah,rombel,produktif,matematika,b_indo,b_ing,b_sun)values('$nama','$nis','$alamat','$tanggal','$umur','$sekolah','$Rombel','$Produktif','$matematika','$b_indo','$b_ing','$b_sun')";
if (mysqli_query($sever, $sql)) {
    echo "berasil yaaaa......";
}else{
    echo "anda gagal";
}
?>