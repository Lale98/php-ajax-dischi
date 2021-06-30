<?php 
    require __DIR__ . '/db/database.php';

    header('Content-Type: application/jason');

    echo json_encode($disks);
?>