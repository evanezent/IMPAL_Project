<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evanue</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/slick-theme.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/input_style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/homepage_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto' !important;
        }
    </style>

</head>
<!-- Check session -->
<?php
if (!$_SESSION['user']) {
    redirect('User/forbiden');
}
?>
<!-- HEADER -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url(); ?>user">evanue</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="form-group d-flex">
                        <select class="form-control" id="sel_menu">
                            <option value="management">Management Data</option>
                            <option value="input">Input Data</option>
                        </select>
                    </div>
                </li>
                <!-- INPUT -->
                <li class="nav-item">
                    <div class="form-group" id="select-type1" style="display: none;">
                        <select class="form-control" id="sel_type1">
                            <option value="" selected>pilih menu</option>
                            <option value="event"><a href="">Event</a></option>
                            <option value="ticket"><a href="ticket">Ticket</a></option>
                        </select>
                    </div>
                </li>
            </ul>
            <div class="user_button">
                <div class="user-login">
                    <a class="nav-link dropdown-toggle" href="#" id="account-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['user']['nama'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="account-dropdown">
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="<?= base_url('User/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>