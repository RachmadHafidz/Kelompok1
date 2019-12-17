<?php 
session_start();
session_destroy();

// mengalihkan halaman sambil mengirim pesan logout
header("location:http://localhost/Kelompok1/S.I.D/index.php?pesan=logout");
?>