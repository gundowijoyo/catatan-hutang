<?php
if(isset($_POST["saveHut"])){
$keterangan_hutang = $_POST["keteranganHutang"];
$name_penghutang = $_POST["nameHutang"];
$jumblah_menghutang = $_POST["countHutang"];
$nomor_penghutang = $_POST["nomorHutang"];
$tanggal_menghutang = $_POST["dateHutang"];
$tanggal_tempo_membayar = $_POST["tempoHutang"];

$tanggal_bagi = explode("-",$tanggal_menghutang);
$tanggal_bagi1 = explode("-",$tanggal_tempo_membayar);
$human_menghutang = $tanggal_bagi[2]."-".$tanggal_bagi[1]."-".$tanggal_bagi[0];

$human_tempo = $tanggal_bagi1[2]."-".$tanggal_bagi1[1]."-".$tanggal_bagi1[0];

 if($keterangan_hutang != null && $name_penghutang != null&& $jumblah_menghutang != null && $nomor_penghutang != null && $human_menghutang && $human_tempo !=null){
 	
/*db save*/
$timestamp0 = time();
$path0 = "db/keterangan-hutang/file.$timestamp0.txt";
$op0 = fopen($path0,"a");
fwrite($op0,$keterangan_hutang);
fclose($op0);

$timestamp1 = time();
$path1 = "db/nama-penghutang/file.$timestamp1.txt";
$op1 = fopen($path1,"a");
fwrite($op1,$name_penghutang);
fclose($op1);

$timestamp2 = time();
$path2 = "db/jumblah-menghutang/file.$timestamp2.txt";
$op2 = fopen($path2,"a");
fwrite($op2,$jumblah_menghutang);
fclose($op2);

$timestamp3 = time();
$path3 = "db/nomor-penghutang/file.$timestamp3.txt";
$op3 = fopen($path3,"a");
fwrite($op3,$nomor_penghutang);
fclose($op3);

$timestamp4 = time();
$path4 = "db/tanggal-awal/file.$timestamp4.txt";
$op4= fopen($path4,"a");
fwrite($op4,$human_menghutang);
fclose($op4);

$timestamp5 = time();
$path5 = "db/tanggal-tempo/file.$timestamp5.txt";
$op5 = fopen($path5,"a");
fwrite($op5,$human_tempo);
fclose($op5);
 echo'<script>
  alert("Berhasil menambahkan data penghutang");
 window.location.href = "index.php";
</script>
'; 
}else {
echo'<script>
  alert("Mohon untuk mengisi semua kotak input.Silahkan coba lagi");
 window.location.href = "index.php";
</script>';
}
}

?>

