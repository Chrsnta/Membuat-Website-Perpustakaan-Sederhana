<?php
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            echo "Tambah Data <a href='data.php'>[HOME]</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='data.php'>[HOME]</a>";
        }
            
    }
?>