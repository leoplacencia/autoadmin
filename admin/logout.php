<!-- Leonardo Placencia Freelancer"
**********************************************
* Developer    : Leonardo Placencia
* Website      : https://leoplacencia.github.io 
* E-mail       : placencia.leo@gmail.com
* Phone        : +569 63223101
-->

<?php
session_start();
// hapus session
session_destroy();

// alihkan ke halaman login (index.php) dan berikan alert = 2
header('Location: index.php?alert=2');
?>