<?php

if (isset($_GET['P'])) {

    if ($_GET['p'] == 'pesan') {
   
        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];

    } else if ($_GET['p'] == "pesan") {
        echo "HALO apakabar".$_POST['nama'];
        echo "<br/>";
        echo "password anda adalah".$_POST['password'];
    } else if ($_GET['P'] == "aman") {
        if (!empty( $_POST['nama'])) {
            echo $_POST['nama'];
        }
} else {
    echo "Anda tidak boleh mengakses halaman ini";
}

