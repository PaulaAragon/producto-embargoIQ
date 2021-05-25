<?php
    $fileTmpPath = $_FILES['up']['tmp_name'];
    $fileName = $_FILES['up']['name'];
    $fileSize = $_FILES['up']['size'];
    $fileType = $_FILES['up']['type'];

    echo print_r($_FILES['up']);
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
?>