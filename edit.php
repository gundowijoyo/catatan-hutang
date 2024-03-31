<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Data</title>
      <?php include("font.php");?>
<link rel="stylesheet" href="sh/style2.css"/>

</head>
<body>
<?php
if(isset($_GET['file'])){
$file_keterangan_hutang = htmlspecialchars($_GET["file"]);
$file_name_penghutang = htmlspecialchars($_GET["file1"]);
$file_jumblah_menghutang = htmlspecialchars($_GET["file2"]);
$file_nomor_penghutang = htmlspecialchars($_GET["file3"]);
$at = htmlspecialchars($_GET['file4']);
$atp = htmlspecialchars($_GET['file5']);

$file_tanggal_menghutang =  htmlspecialchars(file_get_contents($_GET["file4"]));
$file_tanggal_tempo_membayar = htmlspecialchars(file_get_contents($_GET["file5"]));

$tanggal_bagi = explode("-",$file_tanggal_menghutang);
$tanggal_bagi1 = explode("-",$file_tanggal_tempo_membayar);
$human_menghutang = $tanggal_bagi[2]."-".$tanggal_bagi[1]."-".$tanggal_bagi[0];
$human_tempo = $tanggal_bagi1[2]."-".$tanggal_bagi1[1]."-".$tanggal_bagi1[0];

?>

<div>
<form action="<?echo $_SERVER['PHP_SELF'];?>" method="" enctype="multipart/form-data" id="showForm">
  <div class="df">
  <span id="closeadd">x</span>
   <label for="nameHutang" class="l">
     Edit Keterangan Hutang</label>
  <div class="ss">
<input type="text" name="keteranganHutang" id="keteranganHutang"placeholder="Masukkan Keterangan Hutang" class="ip" value="<?php
echo file_get_contents($file_keterangan_hutang);?>" required/>
</div> 
  
  <br/>
  <label for="nameHutang" class="l">Edit Nama Penghutang</label>
  <div class="ss">
<input type="text" name="nameHutang" placeholder="Masukkan nama penghutang" class="ip" id="nameHutang" value="<?php echo file_get_contents($file_name_penghutang);?>" required/>
</div>
<br/>
  <label for="countHutang" class="l">Edit Jumblah Menghutang</label>
 <div class="ss">
  <input type="number" name="countHutang" class="ip" id="countHutang" placeholder="Masukkan Jumblah yang di hutangkan" value="<?php echo file_get_contents($file_jumblah_menghutang); ?>"required/>
  </div>
  <br/>
 <label for="nomorHutang" class="l">Edit Nomor Penghutang</label>
 <div class="ss">
  <input type="number" name="nomorHutang" class="ip" id="nomorHutang" placeholder="Masukkan nomor Penghutang" value="<?php echo file_get_contents($file_nomor_penghutang);?>"required/>
  </div>
  <br/>
  
  <label for="dateHutang" class="l">Edit Tanggal awal menghutang</label>
   <div class="ss">
  <input type="date" class="ip" name="dateHutang" id="dateHutang" value="<?php echo $human_menghutang;?>" required/>
 </div>
  <br/>
  <label for="dateHutang" class="l">Edit Tanggal Jatuh Tempo Membayar</label>
  <div class="ss">
  <input type="date" name="tempoHutang" class="ip" value="<?php echo $human_tempo;?>" id="tempoHutang"required/>
  </div>
  <br/>
  <div class="ss">
   <input type="submit" name="saveHut" value="Simpan" id="saveHut" class="saveHut"/>
       </div>
       
    <style>
      #saveHut{

        text-align: center;
      }
    </style>
    <br/>
    <br/>

    </div>
   </form>
    </div>
    <div id="maniBlackTrans">
</div>
<script>

</script>
<?
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
	
file_put_contents($file_keterangan_hutang,$keterangan_hutang);
file_put_contents($file_name_penghutang,$file_name_penghutang);
file_put_contents($file_jumblah_menghutang,$jumblah_menghutang);
file_put_contents($file_nomor_penghutang,$nomor_penghutang);
file_put_contents($file_nomor_penghutang,$nomor_penghutang);
file_put_contents($at,$human_menghutang);
file_put_contents($atp,$human_tempo);
echo"<script>alert('berhasil');</script>";
}

}

}
?>


<script>
  closeadd.addEventListener("click",function(){
  window.location.href = "index.php";
  });
const send = document.getElementById("saveHut")
send.addEventListener("click",()=>{
let keter = keteranganHutang.value
var xmlh = new XMLHttpRequest();
xmlh.onreadystatechange = function(){
 if(xmlh.readyState ==4&& xmlh.status == 200){
 
 }
}

xmlh.open("POST","proses-edit.php")
xmlh.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
xmlh.send("name="+ encodeURIComponent(keter));

})
</script>
</body>
</html>
<?php 

?>