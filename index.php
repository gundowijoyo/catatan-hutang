<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aplikasi catatan hutang</title>
  <?php include("font.php");?>
<link rel="stylesheet" href="sh/style.css"/>
</head>
<body>
  <header>
    <div id="homebg">
      <h1>Selamat Datang Di Catatan Hutang</h1>
      <div class="cgm">
     <img src="https://i.ibb.co/XXDhVk5/images-2.jpg" alt="images-2" border="0" class="homegam">
      </div>
    <button id="nextHome">Next</button>
    </div>
  </header>
  
  <section>
    <div class="conwelad">
    <h2>Welcome Raf</h3>
    <button id="addHut">Tambah Penghutang</button>
</div>
<!--
<div class="searchAndHistori">
  <div>
    i
  </div>
  <div>
    <input type="text">
    <input type="text">
  </div>
  
</div>
-->
    </div>
   </div>
   
  <div id="conShowForm">
 <form action="proses.php" method="post" enctype="multipart/form-data" id="showForm">
  <div class="df">
  <span id="closeadd">x</span>
   <label for="nameHutang" class="l">
     Keterangan Hutang</label>
  <div class="ss">
<input type="text" name="keteranganHutang" placeholder="Masukkan Keterangan Hutang" class="ip" id="keteranganHutang"/>
</div> 
  
  <br/>
  <label for="nameHutang" class="l">Nama Penghutang</label>
  <div class="ss">
<input type="text" name="nameHutang" placeholder="Masukkan nama penghutang" class="ip" id="nameHutang"/>
</div>
<br/>
  <label for="countHutang" class="l">Jumblah Menghutang</label>
 <div class="ss">
  <input type="number" name="countHutang" class="ip" id="countHutang" placeholder="Masukkan Jumblah yang di hutangkan"/>
  </div>
  <br/>
 <label for="nomorHutang" class="l">Nomor Penghutang</label>
 <div class="ss">
  <input type="number" name="nomorHutang" class="ip" id="nomorHutang" placeholder="Masukkan nomor Penghutang"/>
  </div>
  <br/>
  
  <label for="dateHutang" class="l">Tanggal awal menghutang</label>
   <div class="ss">
  <input type="date" class="ip" name="dateHutang" id="dateHutang"/>
 </div>
  <br/>
  <label for="dateHutang" class="l">Tanggal Jatuh Tempo Membayar</label>
  <div class="ss">
  <input type="date"  name="tempoHutang" class="ip"/>
  </div>
  <br/>
  <div class="ss">
  <input type="submit" name="saveHut" id="saveHut" value="Simpan"/>
    </div>
    <br/>
    <br/>

    </div>
      </form>
    </div>
    <div id="maniBlackTrans">
    </div>
    
  </section>
  
  <script>
    addHut.addEventListener("click",()=>{
    setTimeout(()=>{
    showForm.style.display = "block";
    maniBlackTrans.style.display = "block";
    },200);
    
    });
    closeadd.addEventListener("click",()=>{
      setTimeout(()=>{
    showForm.style.display = "none";
    maniBlackTrans.style.display = "none";
    },200);
    });
  </script>
  
</body>
</html>

<?php
/*Folder yang berisi database file.txt dan*/
$folder_keterangan = "db/keterangan-hutang/";
$folder_penghutang= "db/nama-penghutang/";
$folder_menghutang = "db/jumblah-menghutang/";
$folder_nomor = "db/nomor-penghutang/";
$folder_tanggal_awal = "db/tanggal-awal/";
$folder_tanggal_tempo = "db/tanggal-tempo/";
/* Menghapus . dan .. dari daftar file*/
$files0 = array_diff(scandir($folder_keterangan), array('.', '..'));
$files1 = array_diff(scandir($folder_penghutang), array('.', '..'));
$files2 = array_diff(scandir($folder_menghutang), array('.', '..'));
$files3 = array_diff(scandir($folder_nomor), array('.', '..'));
$files4 = array_diff(scandir($folder_tanggal_awal), array('.', '..'));
$files5 = array_diff(scandir($folder_tanggal_tempo), array('.', '..'));

// Menampilkan isi dari setiap file sesuai dengan urutan file
foreach($files1 as $key1 => $file1){
$file0 = $files0[$key1];
 $file2 = $files2[$key1];
 $file3 = $files3[$key1];
 $file4 = $files4[$key1];
 $file5 = $files5[$key1];
 
$file_path0 = $folder_keterangan . $file0;
 $file_path1 = $folder_penghutang . $file1;
 $file_path2 = $folder_menghutang. $file2;
 $file_path3 = $folder_nomor. $file3;
 $file_path4 = $folder_tanggal_awal. $file4;
 $file_path5 = $folder_tanggal_tempo. $file5;
 
    // Memeriksa apakah itu file.txt
if (is_file($file_path0) || is_file($file_path1)||is_file($file_path2) || is_file($file_path3) || is_file($file_path4)||is_file($file_path5)) {
   // Membaca dan menampilkan isi file
 $lines0 = file($file_path0,FILE_IGNORE_NEW_LINES);
 $lines1 = file($file_path1,FILE_IGNORE_NEW_LINES);
$lines2 = file($file_path2,FILE_IGNORE_NEW_LINES);
$lines3= file($file_path3,FILE_IGNORE_NEW_LINES);
$lines4 = file($file_path4,FILE_IGNORE_NEW_LINES);
$lines5 = file($file_path5,FILE_IGNORE_NEW_LINES);

foreach($lines1 as $key =>$name_penghutang){
$keterangan_hutang = $lines0[$key];
 $jum_menghutang= $lines2[$key];
 $nomor_penghutang = $lines3[$key];
 $tanggal_awal = $lines4[$key];
 $tanggal_akhir = $lines5[$key];
 ?>


<div class="boxCat">
<div class="left">
  <p>Keterangan Hutang</p>
  <p>Nama Penghutang</p>
  <p>Jumblah Hutang</p>
  <p>Nomor Penghutang</p>
  <p>Tanggal Menghutang</p>
  <p>Tanggal Tempo Membayar</p>
</div>
<div class="center">
  <p>:</p>
  <p>:</p>
  <p>:</p>
  <p>:</p>
  <p>:</p>
  <p>:</p>
</div>
<div class="right">
  <p><?echo $keterangan_hutang;?></p>
  <p><? echo $name_penghutang;?></p>
  <p>Rp<?echo $jum_menghutang;?></p>
  <p><?echo $nomor_penghutang;?></p>
  <p><?echo $tanggal_awal;?></p>
  <p><?echo $tanggal_akhir;?></p>
  
 <div class="blm">
 <p>Belum Lunas </p>
 </div> 

 <!-- maintenance nanti aja-->
 <div class="popupaction">
 <span class="closepopac"><p class="x">x</p></span>
<?

 echo'<p class="bgedit">
 <a class="edit" href="#">
 <i class="fa-solid fa-pen"></i>Edit</a>
  </p>
 ';
 
 echo'<p class="bgconfir">
 <a class="confirNas" href="#"><i class="fa-solid fa-check"></i>Konfirmasi Lunas</a>
 </p>';
 
 echo'<p class="bgnotif">
 <a class="notif href="#"><i class="fa-solid fa-bell"></i> Nonaktif</a>
 </p>';
 
 ?>
 </div>
  <div class="three">
  <span></span>
  <span></span>
  <span></span>
  </div>
  <?
  echo'
<a href="proses-hapus.php?file='.$file_path0.'&file1='.$file_path1.'&file2='.$file_path2.'&file3='.$file_path3.'&file4='.$file_path4.'&file5='.$file_path5.'" class="delete"><i class="fa-solid fa-trash"></i></a>';
?>

</div>
</div>

<?



   }
   }
    }
    ?>

<script>
      var eleme = document.querySelectorAll('.three');
    eleme.forEach(element=>{
      element.addEventListener('click',function(){
     var popup = this.parentElement.querySelector('.popupaction'); /*Mengambil pop-up terkait*/
          setTimeout(()=>{
     popup.style.display = 'block'; /* Menampilkan pop-up tersebut*/ 
     },200);
      });
      });
    
  /*vent listener untuk menutup pop-up saat tombol x diklik*/
    var close = document.querySelectorAll('.closepopac');
    close.forEach(button=>{
     button.addEventListener('click', function() {
   var popup = this.parentElement;
   setTimeout(()=>{
     popup.style.display = 'none';
     },200);
      });
    });

nextHome.addEventListener("click",()=>{
	homebg.style.transform = "translateY(-200%)";
	sessionStorage.setItem("key","translateY(-200%)");
});
const getIt = sessionStorage.getItem("key");
homebg.style.transform = getIt;

let edi = document.querySelectorAll(".edit")
edi.forEach(edit=>{
edit.addEventListener("click",()=>{
	alert("fitur belum tersedia okeh ayo lu sebagai developer kembangin dong hihi semangat brader");
})	
})
let cf = document.querySelectorAll(".confirNas")
cf.forEach(confirNas=>{
confirNas.addEventListener("click",()=>{
	alert("fitur belum tersedia okeh ayo lu sebagai developer kembangin dong hihi semangat brader");
})	
})
let nt= document.querySelectorAll(".notif")
nt.forEach(notif=>{
notif.addEventListener("click",()=>{
alert("fitur belum tersedia okeh ayo lu sebagai developer kembangin dong hihi semangat brader");
});
});
</script>

</body>
</html>