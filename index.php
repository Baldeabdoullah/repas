<?php
require_once('./operations.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center my-3">Registration Form</h1>

    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post" class="w-50" enctype="multipart/form-data">
            <?php inputFields("Username", "username", "", "text")  ?>
            <?php inputFields("Mobile", "mobile", "", "text")  ?>
            <?php inputFields("", "file", "", "file")  ?>
            <button class="btn btn-dark" type="submit" name="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>