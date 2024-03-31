<?php
if(isset($_GET['file'])&&isset($_POST['saveHut'])){
  
$file_keterangan_hutang = htmlspecialchars($_GET["file"]);
$file_name_penghutang = htmlspecialchars($_GET["file1"]);
$file_jumblah_menghutang = htmlspecialchars($_GET["file2"]);
$file_nomor_penghutang = htmlspecialchars($_GET["file3"]);
$file_tanggal_menghutang =  htmlspecialchars($_GET["file4"]);
$file_tanggal_tempo_membayar = htmlspecialchars($_GET["file5"]);

$tanggal_bagi = explode("-",$file_tanggal_menghutang);
$tanggal_bagi1 = explode("-",$file_tanggal_tempo_membayar);
$human_menghutang = $tanggal_bagi[2]."-".$tanggal_bagi[1]."-".$tanggal_bagi[0];
$human_tempo = $tanggal_bagi1[2]."-".$tanggal_bagi1[1]."-".$tanggal_bagi1[0];

$keterangan_hutang =$_POST["keteranganHutang"];
$name_penghutang = $_POST["nameHutang"];
$jumblah_menghutang = $_POST["countHutang"];
$nomor_penghutang = $_POST["nomorHutang"];
$tanggal_menghutang = $_POST["dateHutang"];
$tanggal_tempo_membayar = $_POST["tempoHutang"];
$tanggal_bagi = explode("-",$tanggal_menghutang);
$tanggal_bagi1 = explode("-",$tanggal_tempo_membayar);
$human_menghutang = $tanggal_bagi[2]."-".$tanggal_bagi[1]."-".$tanggal_bagi[0];
$human_tempo = $tanggal_bagi1[2]."-".$tanggal_bagi1[1]."-".$tanggal_bagi1[0];

/* if($keterangan_hutang != null && $name_penghutang != null&& $jumblah_menghutang != null && $nomor_penghutang != null && $human_menghutang && $human_tempo !=null){*/

file_put_contents($file_keterangan_hutang,$keterangan_hutang);  

file_put_contents($file_name_penghutang,$name_penghutang);   
file_put_contents($file_jumblah_menghutang,$file_jumblah_menghutang);   

file_put_contents($file_nomor_penghutang,$nomor_penghutang);   
file_put_contents($file_tanggal_menghutang,$tanggal_menghutang);   
file_put_contents($file_tanggal_tempo_membayar,$tanggal_tempo_membayar);  

echo'<script>
  alert("Berhasil mengedit data penghutang");
 window.location.href = "index.php";
</script>
'; 
/*}else {
echo'<script>
  alert("Mohon untuk tidak mengkosongkan semua kotak input.Silahkan coba lagi");
 window.location.href = "index.php";
</script>';*/

/*}*/

  
}
?>
 

