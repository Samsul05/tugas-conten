<?php

//mengaktifkan session php
session_start();

//menghapus session php
session_destroy();

//mengalihkan ke halaman login
header("localhost:index.php");
?>