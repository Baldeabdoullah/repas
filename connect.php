<?php
$con = mysqli_connect('localhost', 'root', '', 'imageUploadProject');

if (!$con) {
    die(mysqli_error($con));
}
