<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap and CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <?php
        if(!empty($style)) {
            echo "<link rel='stylesheet' href='styles/$style.css'>";
        }
    ?>

    <!-- Title and Favicon -->
    <?php
        echo "<title>$title</title>";
    ?>
    <link href="images/me.jpg" type="image/jpg" rel="icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link py-0" href="resume.php">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-0" href="guestbook.php">Guestbook</a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-0" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-0" href="https://github.com/Zakiti18">GitHub</a>
            </li>
        </ul>
    </nav>