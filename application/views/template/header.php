<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evanue</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/homepage_style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>asset/regis_style.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto' !important;
        }
    </style>
</head>
<!-- HEADER -->
<header>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url(); ?>">evanue</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if (isset($_SESSION['user'])) { ?>
                        <a class="nav-link" href="<?= base_url('member'); ?>">My data<span class="sr-only">(current)</span></a>
                    <?php } else { ?>
                        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <div class="form-group d-flex">
                        <select class="form-control" id="sel1" onchange="window.location = this.options[this.selectedIndex].value;">
                            <option selected>pilih menu</option>
                            <option value="<?= base_url('user'); ?>"><a href="">Event</a></option>
                            <option value="<?= base_url('user/ticket'); ?>"><a href="ticket">Ticket</a></option>
                        </select>
                    </div>
                </li>
            </ul>
            <div class="user_button">
                <?php if (isset($_SESSION['user'])) { ?>
                    <div class="user-login">
                        <a class="nav-link dropdown-toggle" href="#" id="account-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION['user']['nama'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="account-dropdown">
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="<?= base_url('User/logout') ?>">Logout</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <a href="#" class="btn btn-sm" role="button" data-toggle="modal" data-target="#modalLogin">Login</a>
                    <a href="<?= base_url(); ?>user/register" class="btn btn-sm" role="button">Register</a>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>
<div class="alert-pesan">
    <?php
    if (isset($_SESSION['login_first'])) {
        $this->load->view('alert/login_first');
    }
    ?>
</div>
<?php if ($salah == 2) { ?>
    <div class="justify-content-center d-flex">
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="width:50vw">
            <b>Wrong Username or Password !</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php } else if ($salah == 1) { ?>
    <div class="justify-content-center d-flex">
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="width:50vw">
            <b>Your account has been success to registered !, Try to login now !</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php } else if ($salah == 3) { ?>
    <div class="justify-content-center d-flex">
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="width:50vw">
            <b>Username has been registered !, Try another username</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php } else if ($salah == 4) { ?>
    <div class="justify-content-center d-flex">
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="width:50vw">
            <b>Register Failed !</b>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php } ?>
<script>
    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
        $(".alert").slideUp(500);
    });
</script>