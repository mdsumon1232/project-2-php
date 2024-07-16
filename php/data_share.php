<?php
 session_start();
    if($_SESSION['user']){
echo json_encode([
    'status' => 'success',
    'user' => $_SESSION['user']
]);
    }
?>