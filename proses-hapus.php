<?php
if(isset($_GET['file'])){
    $file_paths = array($_GET['file'], $_GET['file1'], $_GET['file2'], $_GET['file3'], $_GET['file4'], $_GET['file5']);
    
    foreach ($file_paths as $file_path) {
        if(file_exists($file_path)){
            if(unlink($file_path)){
                echo "<script>alert('Berhasil menghapus data Hutangan'); window.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Gagal menghapus data hutangan');</script>";
            }
        } else {
            echo "<script>alert('File $file_path tidak ditemukan');</script>";
        }
    }
}
?>