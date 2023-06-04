<?php
include('./connect.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES['file'];
    echo $username;
    echo "<br>";
    echo $mobile;
    echo "<br>";
    print_r($image);
    echo "<br>";

    $imagefilename = $image['name'];
    echo "<br>";
    print_r($imagefilename);
    echo "<br>";
    $imagefileerror = $image['error'];
    print_r($imagefileerror);
    echo "<br>";
    $imagefiletemp = $image['tmp_name'];

    print_r($imagefiletemp);
    echo "<br>";

    $filename_separate = explode('.', $imagefilename);
    print_r($filename_separate);
    echo "<br>";

    // $file_extension = strtolower($filename_separate[1]);
    // print_r($file_extension);
    $file_extension = strtolower(end($filename_separate));
    print_r($file_extension);
    echo "<br>";

    $extension = array('jpeg', 'jpg', 'png');
    if (array($file_extension, $extension)) {
        $upload_image = 'images/' . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
        $sql = "insert into `registration` (name,mobile,image)
         values('$username', '$mobile', '$upload_image')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">
                       Data inserted successfully!
                  </div>';
        } else {
            die(mysqli_error($con));
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Display Data</title>

    <style>
        img {
            width: 100px;
        }
    </style>
</head>

<h1 class="text-center">User Data</h1>

<div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50">
        <thead class="table-dark">
            <tr>
                <th scope="col">Sl number</th>
                <th scope="col">Username</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>

            <?php

            //on selectionne les donne de la table registration
            $sql = "select * from `registration`";
            // on excecute
            $result =  mysqli_query($con, $sql);
            // le loop
            // le roe c'est pour afficher en array
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $image = $row['image'];

                echo ' <tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td> <img src=' . $image . ' /></td>
                  </tr>';
            };


            ?>


        </tbody>
    </table>

</div>

<body>

</body>

</html>