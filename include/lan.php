<?php

session_start();
session_unset();
session_destroy();

$lan = $_GET['lan'];

session_start();
$_SESSION['lan'] = $lan;

echo "<script>
window.location.href = '../index.php';
</script>";